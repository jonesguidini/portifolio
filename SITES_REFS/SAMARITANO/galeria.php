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
			
			<div style="width: 100%;">
				<ul class="nav nav-tabs">
				
				<?php 
				
				//class="active"
				
				if(isset($_GET['id']) && $_GET['id'] != "") {
					$id_galeria = $_GET['id'];
				}
				else {
					$id_galeria = 1;
				}
				
				 $sql_categorias = mysql_query("SELECT * FROM tiposgaleria ORDER BY tipo ASC") or die(mysql_error());
				
				 while($categoria = mysql_fetch_object($sql_categorias)) {

					if($id_galeria == $categoria->id) {
						$checked = "class='active'";
					}
					else {
						$checked = "";
					}

					echo "<li $checked><a href=\"?id=$categoria->id\">$categoria->tipo</a></li>";
				 }
				 ?> 
				  
				</ul>
			</div>
			
			<div>
			<table class="table">
              <thead>
                <tr class="class_tag_galeria">
                  <th width="300">Título</th>
                  <th width="500">Descrição</th>
                  <th width="100">Data</th>
                  <th width="80">Opções</th>
                </tr>
              </thead>
              <tbody>
              	<?php 
              	
              	$sql_eventos = mysql_query("SELECT * FROM eventogaleria WHERE IdTipoGaleria = '{$id_galeria}' ") or die(mysql_error());
              	
              	while($evento = mysql_fetch_object($sql_eventos)) {?>
                <tr>
                  <td><?php echo $config->retornar_resumo($evento->titulo, 35);?></td>
                  <td><?php echo $config->retornar_resumo($evento->descricao, 65);?></td>
                  <td><?php echo date("d/m/Y", strtotime($evento->dataEvento));?></td>
                  <td><a href="ver_fotos.php?id_evento=<?php echo $evento->id;?>" class="btn btn-primary btn-small">Ver Fotos</a></td>
                </tr>
          		<?php }?>
              </tbody>
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
