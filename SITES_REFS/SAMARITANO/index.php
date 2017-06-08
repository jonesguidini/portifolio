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
		    <div class="inicial_01">
		    	<div class="tit_secao"><i class="icon-picture "></i> Galeria de Fotos</div>
		    	<div>
		    		<?php 
		    		//sortear as fotos a serem mostradas
		    		$sql_fotos_eventos = mysql_query("SELECT * FROM eventogaleria ORDER BY rand() LIMIT 1") or die(mysql_error());
					
					$evento = mysql_fetch_array($sql_fotos_eventos);
					
					$id_evento = $evento['id'];
					
					$files = glob("admin/fotos_uploads/".$id_evento."/*.*");
		    		
		    		for ($i=1; $i<6; $i++) { 
					
						if(count($files) > $i){
					
							$foto_pequena = str_replace($id_evento."/", $id_evento."/thumbnail/", $files[$i]); 
						
							$foto_grande = $files[$i];
						
						
							echo "<div class='foto_mini_inicial foto_mini'><a data-toggle='lightbox' href='#foto_evento_{$i}'><img src='{$foto_pequena}' border='0' alt='' width='76px' height='57px' style='width: 76px; height: 57px;'></a></div>";
						}else {
							echo "";
						}
						
					
					?>
					
					<script>
					$(document).ready(function() {
						$('#foto_evento_<?php echo $i;?>').lightbox(show);
					});
					
		    		</script>
		    		
		    		<div id="foto_evento_<?php echo $i;?>" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
						<div class='lightbox-content'>
							<img src="<?php echo $foto_grande;?>" border="0" alt="">
						</div>
					</div>	 
						
					<?php
					}
		    		?>

		    		<a href="galeria.php" class="btn btn-warning btn-small" style="width: 252px;">Veja mais fotos</a>
		    	</div>
		    </div>
		    
		    <div class="inicial_02">
		    	<div class="tit_secao"><i class="icon-globe"></i> Campanha</div>
		    	<div>
		    	<a href="colabore.php"><img src="img/img_campanha.gif" border="0" alt=""></a>
		    	</div>
		    </div>
		    
		    <div class="inicial_03">
		    
		    <?php 
		    
		    $sql_artigo = mysql_query("SELECT * FROM artigos ORDER BY id DESC LIMIT 1") or die(mysql_error());
		    
		    $artigo = mysql_fetch_object($sql_artigo);
		    
		    ?>
		    
		    	<div class="tit_secao"><i class="icon-th-list"></i> <?php echo $artigo->titulo;?> - <span class="tiny_font"><?php echo date("d/m/y H:I", strtotime($artigo->dataCriacao));?>h</span></div>
		    	<div class="texto-justify cx_artigo_inicial">
		    	<?php echo $config->retornar_resumo($artigo->artigo, 390);?>
		    	</div>
		    	<div style="margin-top: 16px;">
		    		<a href="artigos.php"  class="btn btn-info btn-small" style="width: 300px;">Veja este e outros artigos</a>
		    	</div>
		    </div>
	    </div>
	</div>
	<!-- FIM CORPO -->
	
	<!-- RODAPÉ -->
    <?php include("inc/rodape.php");?>
	<!-- FIM RODAPÉ -->	
    
  </body>
</html>