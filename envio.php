<?php

	//Variaveis de POST, Alterar somente se necessário
	//====================================================
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$mensagem = $_POST['mensagem'];
	$radio = $_POST["radio"];
	$local = $_POST["local"];
	$localfinal = $_POST["localfinal"];
	$data = $_POST["data"];
	$quant = $_POST["quant"];
	$robo = $_POST["robo"];
	//====================================================

	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//====================================================
	$email_remetente = "reserva@transladovipexpress.com.br"; // deve ser uma conta de email do seu dominio
	//====================================================

	//Configurações do email, ajustar conforme necessidade
	//====================================================
	$email_destinatario = "sac@transladovipexpress.com.br"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email";
	$email_assunto = "Reserva em Translado Vip Express"; // Este será o assunto da mensagem
	//====================================================

	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome: $nome \n";
	$email_conteudo .= "Email: $email \n";
	$email_conteudo .= "Telefone: $telefone \n";
	$email_conteudo .= "Motivo Da Procura: $radio \n";
	$email_conteudo .= "Ponto de partida: $local \n";
	$email_conteudo .= "Local De Destino: $localfinal \n";
	$email_conteudo .= "Data Da Reserva: $data \n";
	$email_conteudo .= "Quantidade de Passageiros: $quant \n";
	$email_conteudo .= "Mensagem: $mensagem \n";
	//====================================================

	//Seta os Headers (Alterar somente caso necessario)
	//====================================================
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================


if ($robo != "Tr4nsl4do") {
echo "<h1><p><center></p></center></h2>";
    	echo "<div class='alert'>";
    	echo "<center><h1>Erro no preenchimento dos dados.</h1></div></center>";
	}
	else {
		mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers);
		echo "<h1><p><center></p></center></h2>";
    	echo "<div class='alert success'>";
    	echo "<center>Parabéns Seu Email Foi Enviado Corretamente.</div></center>";
    	//aqui envia o e-mail de auto-resposta para o visitante
	}




		//Enviando o email
	//====================================================
	//if (empty($email_headers))  {
  //  	echo "<h1><p><center></p></center></h2>";
   // 	echo "<div class='alert'>";
   // 	echo "<center><h1>Erro no preenchimento dos dados.</h1></div></center>";
	//}
	//else {
	//	mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers);
	//	echo "<h1><p><center></p></center></h2>";
    //	echo "<div class='alert success'>";
    //	echo "<center>Parabéns Seu Email Foi Enviado Corretamente.</div></center>";
    	//aqui envia o e-mail de auto-resposta para o visitante
	//}



?>