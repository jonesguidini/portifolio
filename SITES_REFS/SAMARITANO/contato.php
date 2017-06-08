<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=WINDOWS-1252">
    
    <title>CASA DE REPOUSO O BOM SAMARITANO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/folha.css" rel="stylesheet">
    <link href="css/bootstrap-lightbox.min.css" rel="stylesheet">
    <link href="css/bootstrap.icon-large.min.css" rel="stylesheet">    

     <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
   
    <script type="text/javascript" src="js/bootstrap-lightbox.min.js"></script>
	  
    
    <script type="text/javascript">
	<!--
	function valida_fale_conosco() {

		with(document.form_contato)
		{
			
			if(nome.value == "")
			{
				alert("Digite seu nome!");
				nome.focus();
				return false;
			}
			else if(email.value == "")
			{
				alert("Digite seu email!");
				email.focus();
				return false;
			}
			else if (email.value.indexOf("@") == -1 || email.value.indexOf(".") == -1)
			{
				alert("O email esta incorreto!");
				email.focus();
				return false; 					
			}
			else if (mensagem.value.indexOf("www") == 0 || mensagem.value.indexOf("http") == 0)
			{
				alert("O formato da sua mensagem não é valida!");
				email.focus();
				return false; 					
			}	
			else if(mensagem.value == "")
			{
				alert("Digite a mensagem que deseja enviar!");
				//msg.focus();
				return false;
			}		
			
			return true;
		}
	}
	-->
    </script>
<script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
  </head>

  <body>
  	<!-- CABECALHO -->
	<?php include("inc/cabecalho.php");?>
	<!-- FIM CABECALHO -->
	
	<!-- CORPO -->
	<div class="row-fluid fundo_corpo">
		<div class="container conteudo">
		
		<?php 
		if(isset($_GET['status']) && $_GET['status'] == "msg_enviada") {
		?>
			<div class="msg_contato">
			A MENSAGEM FOI ENVIADA COM SUCESSO! EM BREVE ENTRAREMOS EM CONTATO, OBRIGADO.
			</div>
		<?php 
		}?>
			
			<?php 
		if(isset($_GET['status']) && $_GET['status'] == "msg_nao_enviada") {
		?>
			<div class="msg_contato_erro">
			A MENSAGEM NÃO FOI ENVIADA! Verifique se você preencheu tudo corretamente!
			</div>
		<?php 
		}?>
			<div class="div_titulo_pagina">	
				<div class="ico_pagina"><img src="img/ico_contato.png" width="28"></div>
				<div class="titulo_pagina">Fale Conosco</div>
			</div>
			
			<div class="">
				<table border="0" cellspacing="0" cellpadding="0" width="100%">
				<tr>
					<td width="50%" valign="top">
							  
						<form method="post" name="form_contato" onsubmit="javascript: return valida_fale_conosco();" action="enviar_email.php">
						  <table border="0" cellspacing="1" cellpadding="1" width="100%">
						  	<tr>
						  		<td style="text-align: left;">Nome:</td><td> <input type="text" name="nome" style="width: 350px;"></td>
						  	</tr>
						  	<tr>
						  		<td style="text-align: left;">Email:</td><td> <input type="text" name="email" style="width: 350px;"></td>
						  	</tr>
						  	<tr>
						  		<td style="text-align: left;">Telefone:</td><td> <input type="text" name="ddd" maxlength="3" style="width: 30px;"> - <input type="text" name="telefone" maxlength="10" style="width: 90px;"></td>
						  	</tr>
						  	<tr>
						  		<td style="text-align: left;">Mensagem:</td><td> <textarea name="mensagem" style="width: 350px;" rows="4"></textarea></td>
						  	</tr>
							  <tr>
								  <td colspan="2">
								  <div class="g-recaptcha" data-sitekey="6LeE4hcUAAAAAJcecwpkhmPjeDTP-apTcsJtUOeS" style="width: 100%; "></div>
								  </td>
							  </tr>
						  	<tr>
						  		<td>&nbsp;</td>
						  		<td>
						  			<input type="submit" value="Enviar" class="btn btn-info"> <input type="reset" value="Apagar" class="btn">
						  		</td>
						  	</tr>
						  </table>
						</form>
					</td>
					
					<td valign="top">
					<i class="icon-envelope"></i> <span class="info_contato">Mais informações para contato:</span>
					
					<table class="table" style="margin-top: 10px;">
		              <tbody>
		                <tr>
		                  <td>
		                  	<b>Endereço Casa de Repouso:</b><br> 
		                  	Avenida Central, SN, Monte Alto-GO
		                  </td>
		                 </tr> 
		                <tr> 
		                  <td>
		                  	<b>Telefones:</b><br> 
		                  	(61) 3352-3240 / (61) 8358-4140 / (61) 8358-4200
		                  </td>
		                </tr>
		                <tr> 
		                  <td>
		                  	<b>E-mail:</b><br> 
		                  	atendimento@samaritanodf.org.br
		                  </td>
		                </tr>
		              </tbody>
		            </table>
					
					</td>
				</tr>
				</table>
			</div>
	    </div>
	</div>
	<!-- FIM CORPO -->
	
	<!-- RODAPÉ -->
    <?php include("inc/rodape.php");?>
	<!-- FIM RODAPÉ -->	
    

	  
  </body>
</html>
