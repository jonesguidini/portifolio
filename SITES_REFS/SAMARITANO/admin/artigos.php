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
		
			<?php 
		   
		   $sql = mysql_query("SELECT * FROM artigos ORDER BY dataCriacao desc") or die(mysql_error());
		   
		   $total = mysql_num_rows($sql);
		   
		   ?>
		
		   <h3>Artigos (<?php echo $total;?>)</h3>
		   
		   
		   
		   <div style="margin-bottom: 10px;">
		   <a href="novo_artigo.php" class="btn btn-info">Novo Artigo</a>
		   </div>
		   
		  	<table class="table table-bordered">
              <thead>
                <tr class="bg_color_th">
                  <th width="640">T�tulo</th>
                  <th width="120">Data</th>
                  <th width="160">Op��es</th>
                </tr>
              </thead>
              <tbody>
              	<?php while($artigo = mysql_fetch_object($sql)) {
              		?>
                <tr>
                  <td><?php echo $artigo->titulo;?></td>
                  <td><?php echo date("d/m/Y - H:i", strtotime($artigo->dataCriacao));?>h</td>
                  <td>
                  	<a href="ver_artigo.php?id=<?php echo $artigo->id;?>" class="btn btn-primary btn-small">Ver</a> 
                  	<a href="editar_artigo.php?id=<?php echo $artigo->id;?>" class="btn btn-primary btn-small">Editar</a> 
                  	<a href="_ac_excluir_artigo.php?id=<?php echo $artigo->id;?>" class="btn btn-primary btn-small" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a> 
                  </td>
                </tr>
          		<?php }?>
              </tbody>
            </table>
		   
	    </div>
	</div>
	<!-- FIM CORPO -->
    
  </body>
</html>