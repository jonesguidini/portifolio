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
				<div class="ico_pagina"><img src="img/icon_artigos.png" width="28"></div>
				<div class="titulo_pagina">Artigos</div>
			</div>
			
			<?php 
			
			if(!isset($_GET['id']) || $_GET['id'] == "") {
				$sql_artigo = mysql_query("SELECT * FROM artigos ORDER BY dataCriacao desc LIMIT 1") or die(mysql_error());
			}
			else {
				$sql_artigo = mysql_query("SELECT * FROM artigos WHERE id = '{$_GET['id']}'") or die(mysql_error());
			}
			
			$artigo = mysql_fetch_object($sql_artigo);
			
			?>
			
			
			<div  style="border-top: 1px dashed #ccc; padding-top: 20px; float:left; width: 100%;">
			
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
			<tr>
				<td width="700" valign="top"  class="artigo_principal">
					<span class="titulo_artigo"><?php echo $artigo->titulo;?></span><br>
					<b><?php echo date("d/m/Y H:I", strtotime($artigo->dataCriacao));?>h</b> <br>
					<br>
					<?php echo $artigo->artigo;?>					
				</td>
				<td valign="top" class="lista_outros_artigos">
					<b>Últimos 10 Artigos:</b>
					<?php

					$sql_lista_ultimos = mysql_query("SELECT * FROM artigos WHERE id != '{$artigo->id}' ORDER BY dataCriacao desc LIMIT 10") or die(mysql_error());
					
					while($artigo = mysql_fetch_object($sql_lista_ultimos)) {?>
						<div class="link_artigos_interno"><i class="icon-file"></i> <a href="artigos.php?id=<?php echo $artigo->id;?>"><?php echo $config->retornar_resumo($artigo->titulo, 32);?></a></div>
					<?php }?>
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
