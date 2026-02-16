<?php 

	$radio = $_GET['radio'];
	$nome = $_GET['nome'];
	$telefone = $_GET['telefone'];
	$mensagem = $_GET['mensagem'];
	$local = $_GET["local"];
	$localfinal = $_GET["localfinal"];
	$kids = $_GET["kids"];
	$quant = $_GET["quant"];
	$malagrande = $_GET["malag"];
	$maladebordo = $_GET["malab"];


$dataAmericana = $_GET['data'] ?? '';

if ($dataAmericana) {
    $datetime = DateTime::createFromFormat('Y-m-d\TH:i', $dataAmericana);
    $dataFormatada = $datetime ? $datetime->format('d/m/Y \à\s H:i') : 'Data inválida';
} else {
    $dataFormatada = 'Não informada';
}



//Monta o Corpo da Mensagem

	//====================================================

	$email_conteudo = "*ORÇAMENTO DE TÁXI* %0A%0A";

	$email_conteudo .= "*Nome*: $nome %0A";

	$email_conteudo .= "*Email*: $email %0A";

	$email_conteudo .= "*Telefone*: $telefone %0A";

	$email_conteudo .= "*Passageiros Adultos*: $quant %0A";
		$email_conteudo .= "*Crianças*: $kids %0A";
		$email_conteudo .= "*Malas grandes*: $malagrande %0A";
		$email_conteudo .= "*Malas de bordo*: $maladebordo %0A";

		$email_conteudo .= "*Cadeirinha*: $radio %0A";


$email_conteudo .= "*Data Da Corrida*: $dataFormatada %0A";

	$email_conteudo .= "*Ponto de partida*: $local %0A";

	$email_conteudo .= "*Local De Destino*: $localfinal %0A%0A";


	$email_conteudo .= "*Detalhamento da corrida*: $mensagem %0A%0A";
	


	//====================================================
	

 ?>
<!DOCTYPE HTML>

<html lang="pt-BR">

	<head>

		<title>Tabela Táxi Aeroporto 2022</title>



		<meta charset="UTF-8"/><meta name="viewport" content="width=device-width, initial-scale=1"/>

		<link rel="stylesheet" href="main.css"/>

		<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>

<meta name="theme-color" content="#362929">

<meta name="apple-mobile-web-app-status-bar-style" content="#362929">

<meta property="og:locale" content="_ptBR"><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-98388796-1"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'UA-98388796-1');

</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-flexdatalist/2.3.0/jquery.flexdatalist.min.js" integrity="sha512-JEX6Es4Dhu4vQWWA+vVBNJzwejdpqeGeii0sfiWJbBlAfFzkeAy6WOxPYA4HEVeCHwAPa+8pDZQt8rLKDDGHgw==" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-flexdatalist/2.3.0/jquery.flexdatalist.min.css" integrity="sha512-feX1WY95JHQ//uffCG42xy0PofA6DAZSEgIQMMOmRBbSmmOoz/J52azXXLM3kYa9EkQ5PlOHFFCgqpnPJ1oYpg==" crossorigin="anonymous" />

<link rel="shortcut icon" href="icon2.png" type="image/x-icon"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css" integrity="sha256-wX/yv3XrMHL9ho8i2z4rFw6B6cKKtxFiBuB2S+CRlmw=" crossorigin="anonymous"/>

<link rel="manifest" href="manifest/manifest.json">

<meta name="mobile-web-app-capable" content="yes">

    <link rel="icon" sizes="192x192" href="icon2.png">

    <meta name="theme-color" content="#09545e">





    <!-- Add to homescreen for Safari on iOS -->

    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta name="apple-mobile-web-app-title" content="Tabela Táxi do Aeroporto 2022">

    <meta name="apple-mobile-web-app-status-bar-style" content="#09545e">

    <link rel="apple-touch-icon-precomposed" href="icon2.png">
<meta http-equiv="refresh" content="2; URL='https://api.whatsapp.com/send?phone=5531972174387&text=<?php echo $email_conteudo;?>'"/>


</head><body>



</body>
