<?php
/**
 * Consulta o painel de voos da BH Airport e devolve em JSON para a pagina
 * voos-em-tempo-real-confins.html.
 *
 * Por que existe: a API da BH Airport nao envia cabecalho de CORS, entao o
 * navegador do visitante nao pode chama-la direto. A consulta e feita aqui,
 * no servidor, com cache, para nao repetir a chamada a cada visita.
 *
 * Cache de 3 minutos. Em caso de falha, devolve erro explicito para a pagina
 * mostrar o link do painel oficial em vez de dado velho.
 */

// Endpoint de API: aviso do PHP na saida corromperia o JSON
ini_set('display_errors', '0');

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: public, max-age=60');

$tipo = (isset($_GET['type']) && $_GET['type'] === 'departure') ? 'departure' : 'arrival';
$ttl  = 180;

// Diretorio de cache: tenta ao lado do arquivo, cai para o temporario do sistema
$dirCache = __DIR__ . '/.cache-voos';
if (!is_dir($dirCache)) { @mkdir($dirCache, 0775, true); }
if (!is_dir($dirCache) || !is_writable($dirCache)) { $dirCache = sys_get_temp_dir(); }
$arquivo = $dirCache . '/voos-' . $tipo . '.json';

/** Nome da companhia -> nome do arquivo da logo em logos-cia/ */
function slugCia($nome) {
    $t = mb_strtolower(trim($nome), 'UTF-8');
    $t = strtr($t, array('á'=>'a','à'=>'a','ã'=>'a','â'=>'a','é'=>'e','ê'=>'e',
                         'í'=>'i','ó'=>'o','ô'=>'o','õ'=>'o','ú'=>'u','ç'=>'c'));
    $t = preg_replace('/[^a-z0-9]+/', '-', $t);
    return trim($t, '-');
}

function responde($dados, $origem, $quando) {
    echo json_encode(array(
        'ok'          => true,
        'origem'      => $origem,
        'atualizadoEm'=> $quando,
        'total'       => count($dados),
        'voos'        => $dados,
    ), JSON_UNESCAPED_UNICODE);
    exit;
}

function falha($motivo) {
    http_response_code(503);
    echo json_encode(array('ok' => false, 'motivo' => $motivo), JSON_UNESCAPED_UNICODE);
    exit;
}

// 1) Cache ainda valido
if (file_exists($arquivo) && (time() - filemtime($arquivo)) < $ttl) {
    $cru = file_get_contents($arquivo);
    $dados = json_decode($cru, true);
    if (is_array($dados)) { responde($dados, 'cache', date('c', filemtime($arquivo))); }
}

// 2) Busca na origem
$url = 'https://www.bh-airport.com.br/api/flights?type=' . $tipo;
$cru = false;

if (function_exists('curl_init')) {
    $ch = curl_init($url);
    curl_setopt_array($ch, array(
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 12,
        CURLOPT_CONNECTTIMEOUT => 6,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_USERAGENT      => 'TransladoVipExpress/1.0 (+https://www.transladovipexpress.com.br/voos-em-tempo-real-confins.html)',
        CURLOPT_HTTPHEADER     => array('Accept: application/json'),
    ));
    $cru = curl_exec($ch);
    $http = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($http !== 200) { $cru = false; }
} else {
    $ctx = stream_context_create(array('http' => array(
        'timeout' => 12,
        'header'  => "Accept: application/json\r\nUser-Agent: TransladoVipExpress/1.0\r\n",
    )));
    $cru = @file_get_contents($url, false, $ctx);
}

$dados = $cru ? json_decode($cru, true) : null;

// 3) Normaliza: mantem so o que a pagina usa e o que ainda vai acontecer hoje
if (is_array($dados)) {
    $limite = time() + (36 * 3600);
    $piso   = time() - (3 * 3600);
    $lista  = array();
    foreach ($dados as $v) {
        $quando = isset($v['scheduledUnformated']) ? strtotime($v['scheduledUnformated']) : null;
        if ($quando && ($quando > $limite || $quando < $piso)) { continue; }
        $nomeCia = isset($v['companyName']) ? $v['companyName'] : '';
        $lista[] = array(
            'cia'      => $nomeCia,
            'slug'     => slugCia($nomeCia),
            'voo'      => isset($v['flight']) ? $v['flight'] : '',
            'ponta'    => isset($v['origin']) ? $v['origin'] : (isset($v['destination']) ? $v['destination'] : ''),
            'previsto' => isset($v['scheduled']) ? $v['scheduled'] : '',
            'estimado' => isset($v['estimated']) ? $v['estimated'] : '',
            'portao'   => isset($v['gate']) ? $v['gate'] : '',
            'status'   => isset($v['status']) ? $v['status'] : '',
            'quando'   => $quando,
        );
    }
    usort($lista, function ($a, $b) {
        if ($a['quando'] == $b['quando']) { return 0; }
        return ($a['quando'] < $b['quando']) ? -1 : 1;
    });
    @file_put_contents($arquivo, json_encode($lista, JSON_UNESCAPED_UNICODE));
    responde($lista, 'origem', date('c'));
}

// 4) Origem falhou: se houver cache antigo, usa avisando. Senao, erro.
if (file_exists($arquivo)) {
    $dados = json_decode(file_get_contents($arquivo), true);
    if (is_array($dados)) { responde($dados, 'cache-antigo', date('c', filemtime($arquivo))); }
}

falha('nao foi possivel consultar o painel da BH Airport');
