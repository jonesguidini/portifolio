<?php
require_once('phpmailer/class.phpmailer.php');
include("phpmailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

if (isset($_POST['g-recaptcha-response'])) {
    	$captcha_data = $_POST['g-recaptcha-response'];
	}

	// Se nenhum valor foi recebido, o usuário não realizou o captcha
	if (!$captcha_data) {
		header("Location: contato.php?status=msg_nao_enviada");
		exit;
	}
	//$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=SUA-CHAVE-SECRETA&response=".$captcha_data."&remoteip=".$_SERVER['REMOTE_ADDR']);
	$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeE4hcUAAAAAIe-v_rOwg7-8UX-ne3MWnustzuL&response=".$captcha_data."&remoteip=".$_SERVER['REMOTE_ADDR']);
	if ($resposta.success) {
    //echo "Obrigado por deixar sua mensagem!";
		header("Location: contato.php?status=msg_enviada");
} else {
    //echo "Usuário mal intencionado detectado. A mensagem não foi enviada.";
		header("Location: contato.php?status=msg_nao_enviada");
    exit;
}



$nome = $_POST['nome'];
$email = $_POST['email'];
$ddd = $_POST['ddd'];
$telefone = $_POST['telefone'];
$mensagem = nl2br(strip_tags($_POST['mensagem']));



$mail = new PHPMailer();
$mail->Mailer = "smtp";
$mail->IsHTML(true);

$mail->Host = "samaritanodf.org.br"; //  se tiver CPANEL provavelmente possa ser mail.seudominio.com ou .com.br
$mail->Port = 25;
$mail->SMTPAuth = true;
$mail->Username = "naoresponda@samaritanodf.org.br"; // exemplo: tu@teudominio.com.br ou .com :)
$mail->Password = "@VISUWEB2017@";

$mail->From = $mail->Username;
$mail->FromName   = $nome;
//$mail->AddAddress("jguidini@hotmail.com","Jos� Guidini");
//$mail->AddAddress("atendimento@samaritanodf.org.br","Atendimento");
$mail->AddCC('jonesguidini@gmail.com', 'Visuweb');
$mail->AddCC('joaodg2014@gmail.com', 'João Domingos');
$mail->AddCC('edson.terapeuta@hotmail.com', 'Edson');

$mail->AddReplyTo($email, $nome); // Para quando responder, n�o v� para o email de autentica��o

$mail->Subject    = "MENSAGEM ENVIADO PELO SITE - SAMARITANODF.ORG.BR";
$mail->AltBody    = "AQUI VAI A MENSAGEM!"; // optional, comment out and test

$body = "
<h3>MENSAGEM ENVIADA PELO SITE www.samaritanodf.org.br!</h3>
<table border='0' cellpading='6' cellspacing='0' width='600'>
<tr>
<td width='75' style='padding: 6px; border: 1px solid #ccc;'><b>Nome:</b></td>
<td style='padding: 6px; border: 1px solid #ccc;'> $nome </td>
</tr>
<tr>
<td style='padding: 6px; border: 1px solid #ccc;'><b>Email:</b></td> 
<td style='padding: 6px; border: 1px solid #ccc;'>$email </td>
</tr>
<tr>
<td style='padding: 6px; border: 1px solid #ccc;'><b>Telefone:</b></td> 
<td style='padding: 6px; border: 1px solid #ccc;'>$ddd - $telefone </td>
</tr>
<tr>
<td valign='top' style='padding: 6px; border: 1px solid #ccc;'><b>Mensagem:</b></td>
<td style='padding: 6px; border: 1px solid #ccc;'> $mensagem </td>
</tr>
</table>
";

$mail->MsgHTML($body);
//adicionar os emails "atendimento@samaritanodf.org.br" e "jguidini@hotmail.com"
$address = "jonesguidini@gmail.com";

$mail->AddAddress($address, "Jose Guidini");

	if(!$mail->Send()) {
		echo "Houve os seguintes erros: " . $mail->ErrorInfo;
	} else {
		//echo "Message sent!";
		header("Location: contato.php?status=msg_enviada"); 
	}

?>