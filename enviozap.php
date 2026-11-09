<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    header('Allow: POST');
    exit('Método inválido. Volte ao formulário para solicitar um orçamento.');
}

$submissionToken = $_POST['submission_token'] ?? '';
$formTokens = $_SESSION['contact_form_tokens'] ?? [];
$tokenCreatedAt = is_string($submissionToken) ? ($formTokens[$submissionToken] ?? null) : null;
if (!$tokenCreatedAt || !is_int($tokenCreatedAt) || $tokenCreatedAt < time() - 1800) {
    http_response_code(409);
    exit('Este formulário já foi enviado ou expirou. Volte ao formulário e tente novamente.');
}

// Consumir antes do envio ao CRM. O bloqueio da sessão serializa dois POSTs simultâneos.
unset($_SESSION['contact_form_tokens'][$submissionToken]);
session_write_close();

$radio = trim((string)($_POST['radio'] ?? ''));
$nome = trim((string)($_POST['nome'] ?? ''));
$telefone = trim((string)($_POST['telefone'] ?? ''));
$mensagem = trim((string)($_POST['mensagem'] ?? ''));
$local = trim((string)($_POST['local'] ?? ''));
$localfinal = trim((string)($_POST['localfinal'] ?? ''));
$kids = trim((string)($_POST['kids'] ?? ''));
$quant = trim((string)($_POST['quant'] ?? ''));
$malagrande = trim((string)($_POST['malag'] ?? ''));
$maladebordo = trim((string)($_POST['malab'] ?? ''));
$dataAmericana = trim((string)($_POST['data'] ?? ''));

if ($nome === '' || $telefone === '') {
    http_response_code(422);
    exit('Informe seu nome e telefone. Volte ao formulário para corrigir os dados.');
}

$datetime = $dataAmericana !== '' ? DateTime::createFromFormat('!Y-m-d\TH:i', $dataAmericana) : false;
$dataFormatada = $datetime ? $datetime->format('d/m/Y \à\s H:i') : 'Não informada';

$payload = json_encode([
	'nome' => $nome,
	'telefone' => $telefone,
	'origem' => $local,
	'destino' => $localfinal,
	'data_viagem' => $dataAmericana,
	'passageiros_adultos' => $quant,
	'criancas' => $kids,
	'malas_grandes' => $malagrande,
	'malas_bordo' => $maladebordo,
	'cadeirinha' => $radio,
	'mensagem' => $mensagem,
	'secret' => 'TRANSLADO_SECRET_2026',
]);

$ch = curl_init('https://srtrkwzhsmrghyakkbzh.supabase.co/functions/v1/receber-lead');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_TIMEOUT, 5); // não trava a página se a API demorar
curl_exec($ch);
curl_close($ch);

$whatsappMessage = "ORÇAMENTO DE TÁXI\n\n"
    . "Nome: {$nome}\n"
    . "Telefone: {$telefone}\n"
    . "Passageiros adultos: {$quant}\n"
    . "Crianças: {$kids}\n"
    . "Malas grandes: {$malagrande}\n"
    . "Malas de bordo: {$maladebordo}\n"
    . "Cadeirinha: {$radio}\n"
    . "Data da corrida: {$dataFormatada}\n"
    . "Ponto de partida: {$local}\n"
    . "Destino: {$localfinal}\n\n"
    . "Detalhes: {$mensagem}";
$whatsappUrl = 'https://api.whatsapp.com/send?' . http_build_query(
    ['phone' => '5531972174387', 'text' => $whatsappMessage],
    '',
    '&',
    PHP_QUERY_RFC3986
);
header('Location: ' . $whatsappUrl, true, 303);
exit;
