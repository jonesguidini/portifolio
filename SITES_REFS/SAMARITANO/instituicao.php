<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>CASA DE REPOUSO O BOM SAMARITANO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/folha.css" rel="stylesheet">
    <link href="css/bootstrap-lightbox.min.css" rel="stylesheet">

     <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
   
    <script type="text/javascript" src="js/bootstrap-lightbox.min.js"></script>

  </head>

  <body>
  	<!-- CABECALHO -->
	<?php include("inc/cabecalho.php");?>
	<!-- FIM CABECALHO -->
	
	<!-- CORPO -->
	<div class="row-fluid fundo_corpo">
		<div class="container conteudo">
			<div class="div_titulo_pagina">	
				<div class="ico_pagina"><img src="img/icon_instituicao.png" width="28"></div>
				<div class="titulo_pagina">A Instui��o</div>
			</div>
			
			<div class="texto-justify">
			
				<?php 
				$consulta = mysql_query("SELECT * FROM config WHERE id = 1") or die (mysql_error());
				$_obj_consulta = mysql_fetch_object($consulta);
				$instituicao = $_obj_consulta->instituicao;
				
				echo $instituicao;
				?>
				<!-- 
				<p>&nbsp;&nbsp;&nbsp;&nbsp;O centro Reformista de Assist�ncia Social �O Bom Samaritano�, � uma Institui��o Filantr�pica sem fins lucrativos, de utilidade p�blica federal n� 90935  - CNPJ 44.086.403.0005.02. Foi fundado em 1930 e desenvolve campanhas de promo��o social em v�rios estados do Brasil, especialmente em nosso Munic�pio (Padre Bernardo-GO), onde mant�m a Casa de Repouso e Conviv�ncia de Idosos "O Bom Samaritano" (local que acolhe idosos que precisam de aux�lio e cuidados), escola para crian�as carentes, distribui cestas b�sicas e faz diferentes encaminhamentos. Nossa institui��o d� sua parcela de contribui��o � sociedade com pessoas capacitadas que promovem cursos profissionalizantes e cursos de m�sica para crian�as carentes em v�rios munic�pios do Brasil.</p>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;Como n�o temos recursos pr�prios,  dependemos  da ajuda de empresas, da mantenedora (Igreja Adventista do 7� Dia Movimento de Reforma) e de pessoas volunt�rias. Atualmente estamos construindo mais uma casa de repouso para idosos no munic�pio de Padre Bernardo (GO), cidade do entorno de Bras�lia (DF).</p>
				 -->
				<br>
				<a href="galeria.php" class="btn btn-warning"><i class="icon-picture icon-white"></i> Veja algumas fotos da Institui��o</a>
			</div>	
	    </div>
	</div>
	<!-- FIM CORPO -->
	
	<!-- RODAP� -->
    <?php include("inc/rodape.php");?>
	<!-- FIM RODAP� -->	
    
  </body>
</html>
