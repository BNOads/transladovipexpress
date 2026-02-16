<?php 
if (isset($_GET['BTEnvia'])) {
	
$variavel = $_GET['loc'];

$partes = explode(' ',$variavel);

$loc1=$partes[1]; //Cidade
$total=$partes[0]; //Valor
$loc2=$partes[2]; //Cidade

$city=$loc1."".$loc2; // 

$loc = $total - ($total / 100 * 20.00);
$loc = number_format($loc, 0, '.', '');
echo "<br>";				
			


						
	$reserva1 = "<center><div class='actions'><a id='whatsapp' target='_blank' href=\"https://api.whatsapp.com/send?phone=5531972174387&text=Olá, Gostaria de mais detalhes da promoção para ";
	$reserva2 = "\"class='button special'>Efetivar Reserva</a>";
    $voltar = "<a class='btn-a button' style='margin-left: 3%' href=\"orcamento.html\">Voltar</a>  </div></center>
    <br><center><h3>*Promoção, Casal com 2 malas pequenas de bordo</h3>";

$zipreserva = $reserva1.$city.$reserva2;
	

}
   ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Orçamento - Translado Vip Express</title>
		<meta charset="utf-8" />
		<link rel=”canonical” href=”www.transladovipexpress.com.br/orcamento.php” />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="main.css" />
		<link rel="shortcut icon" href="icone.webp" type="image/x-icon"/>	
		<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-wX/yv3XrMHL9ho8i2z4rFw6B6cKKtxFiBuB2S+CRlmw=" crossorigin="anonymous"/>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="description" content="Translado Vip Express">
	<meta name="keywords" content="Translado Vip Express, Traslado Vip Express, Confins, Táxi, Taxi, Transfer, Transfer em Confins">
	</script><script>window.dataLayer=window.dataLayer || []; function gtag(){dataLayer.push(arguments);}gtag('js', new Date()); gtag('config', 'UA-90467816-1');</script>
		<meta name="author" content="JpConfins">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHWNDGH');</script>
<!-- End Google Tag Manager -->
<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#362929">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#362929">

		<script type="text/javascript">
	// makes sure the whole site is loaded
jQuery(window).load(function() {
        // will first fade out the loading animation
        // will fade out the whole DIV that covers the website.
	jQuery("#preloader").delay(1000).fadeOut("slow");
})
</script> 



	</head>
	
	<body><!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WHWNDGH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<a href="https://api.whatsapp.com/send?phone=5531972174387" id="whatsapp" style="position:fixed;width:60px;height:60px;z-index:9999;
bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;" target="_blank">
<i style="margin-top:16px" class="fa fa-whatsapp"></i>
</a>

<div id="preloader">
	<div id="status"></div>
</div>

	<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">Translado Vip Express</a>
					<nav id="nav">
						<a href="index.html">Inicio</a>
						<a href="sobrenos.html">Sobre Nós</a>
						<a href="institucional.html">Institucional</a>
						<a href="contato.php" title="Reservas" >Reservas</a>
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		<!-- Main -->
	<section id="main">
			<div class="inner" > 
				<header class="major special">			
					<?php 	echo "<h1 style='font-size:2em;'><center>Sua corrida para " . $city; 
							echo " custará <h2>R$ $loc,00</h2></center></h1>";	
							echo $zipreserva;
							echo $voltar;
							?>
				
					<br />
				</header>

	<!-- Classe Três -->
			<section id="three"><div class="inner"><article><div class="content" style="opacity: 0"><span class="icon"><span style="color: #700303;" class="fa fa-taxi"></span></span><header></header></div></article><article><div class="content"><span class="icon"><span style="color: #700303;" class="fa fa-heartbeat"></span></span><header><h3>Prezando pela sua saúde</h3></header><p>Lembrando que todos os nossos Táxis são credenciados pelo aeroporto na cor azul e podem utilizar as pistas exclusiva de ônibus para maior agilidade no percurso e seguem o <b>Rigoroso Protocolo da OMS.</b></p><ul class="actions"><li><a href="https://api.whatsapp.com/send?phone=5531972174387" id="whatsapp3" target="_blank" rel="noreferrer" title="Orçamento" class="button alt">Confira</a></li></ul></div></article><article><div class="content" style="opacity: 0" ><span class="icon"><span style="color: #700303;" class="fa fa-credit-card"></span></span><header><h3>Várias Formas de pagamento</h3></header><p>Trabalhamos com todas as bandeiras de cartão de crédito e todos os aplicativos de transporte legalizado.<br/>Contamos com parcelamento.</p></div></article></div></section>




			</div>
	</section>
		<!-- Footer -->
		<section id="footer" style="margin-top: 5em;">
			<div class="inner">
				<div class="field half first">
					<div class="copyright">
						&copy; Translado Vip Express. Feito Por: <a href="https://jpconfins.com.br" target="_blank">JpConfins</a>
					</div>
				</div>
			</div>
		</section>
			<!-- Scripts -->
			<script src="skel.min.js"></script>
	</body>
</html>