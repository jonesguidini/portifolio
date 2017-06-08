<?php include("verifica_adm.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>CASA DE REPOUSO O BOM SAMARITANO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/folha.css" rel="stylesheet">
    <link href="../css/bootstrap-lightbox.min.css" rel="stylesheet">
    
    <style type="text/css">
	    body {
	    	background: #fff;
	    }
    </style>

     <script type="text/javascript" src="../js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
   
    <script type="text/javascript" src="../js/bootstrap-lightbox.min.js"></script>

  </head>

  <body>
  	<!-- CABECALHO -->
	<?php include("inc/cabecalho.php");?>
	<!-- FIM CABECALHO -->
	
	<!-- CORPO -->
	<div class="row-fluid fundo_corpo_admin">
		<div class="container conteudo_admin">
		   <h3>Ver Artigo</h3>
		   
		   <?php 
		   
		   $id = $_GET['id'];
		   
		   $sql = mysql_query("SELECT * FROM artigos WHERE id = '{$id}'") or die(mysql_error());
		   
		   $artigo = mysql_fetch_object($sql);
		   
		   ?>
		   
		   <div style="margin-bottom: 10px;">
		   	<a href="editar_artigo.php?id=<?php echo $id;?>" class="btn btn-primary btn-small">Editar Artigo</a> <a href="_ac_excluir_artigo.php?id=<?php echo $artigo->id;?>" class="btn btn-primary btn-small" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a> 
		   </div>
		
				<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td><b>Título:</b></td><td><?php echo $artigo->titulo;?></td>
				</tr>
				<tr>
					<td><b>Data:</b></td><td><?php echo date("d/m/Y - H:i", strtotime($artigo->dataCriacao));?>h</td>
				</tr>
				<tr>
					<td colspan="2"><b>Artigo:</b></td>
				</tr>
				<tr>
					<td colspan="2"><?php echo $artigo->artigo;?></td>
				</tr>
				</table>
		   
	    </div>
	</div>
	<!-- FIM CORPO -->
    
  </body>
</html>