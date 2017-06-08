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
    <link href="css/bootstrap.icon-large.min.css" rel="stylesheet">

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
				<div class="ico_pagina"><img src="img/ico_galeria.png" width="28"></div>
				<div class="titulo_pagina">Galeria de Fotos</div>
			</div>
			
			<div style="margin-bottom: 10px;"><a href="galeria.php" class="btn btn-small"><i class="icon-backward"></i> Voltar</a></div>
			
			<?php 
			
			$id_evento = $_GET['id_evento'];
			
			$sql_evento = mysql_query("SELECT * FROM eventogaleria WHERE id = '{$id_evento}'") or die(mysql_error());
			
			$qtd_evento = mysql_num_rows($sql_evento);
			
			if($qtd_evento == 0) {
				echo "<script>window.location=\"galeria.php?erro=Evento não localizado!\"</script>";
			}
			
			$evento = mysql_fetch_object($sql_evento);
			
			//$sql_fotos = mysql_query("SELECT * FROM fotosevento WHERE IdEvento = '{$id_evento}'") or die(mysql_error());
			//$total_fotos = mysql_num_rows($sql_fotos);
			
			$files = glob("admin/fotos_uploads/".$id_evento."/*.*");
			
			$total_fotos = count($files);
			?>
			
			<div>
				<table class="table">
                 <tr>
                  <td width="300"><b>Título</b>: <?php echo $evento->titulo; ?> - <span class="label label-info"><?php echo date("d/m/Y", strtotime($evento->dataEvento));?></span> - <span class="label"><?php echo $total_fotos;?> fotos</span></td>
                </tr>
                <tr>  
                  <td width="500"><b>Descrição</b>: <?php echo $evento->descricao; ?></td>
                </tr>
                <tr>  
                  <td width="500">
                  
                  
                  <?php 
				  $files = glob("admin/fotos_uploads/".$id_evento."/*.*");
						
						for ($i=0; $i<count($files); $i++) { 
						$foto_pequena = str_replace($id_evento."/", $id_evento."/medium/", $files[$i]); 
						
						$foto_grande = $files[$i]; 						
						?>
                  <div class="foto"><a data-toggle='lightbox' href='#foto_evento_<?php echo $i;?>'><img src="<?php echo $foto_pequena;?>" border="0"></a></div>
                  
                  <script>
					$(document).ready(function() {
						$('#foto_evento_<?php echo $foto->id;?>').lightbox(show);
					});
		    		</script>
		    		
		    		<div id="foto_evento_<?php echo $i;?>" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
						<div class='lightbox-content'>
							<img src="<?php echo $foto_grande;?>" border="0" alt="">
						</div>
					</div>	 
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
