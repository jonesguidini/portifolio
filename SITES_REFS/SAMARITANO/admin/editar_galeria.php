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
		   <h3>Editando Evento</h3>
			
			<?php 
		   
		   $id = $_GET['id'];
		   
		   $sql = mysql_query("SELECT * FROM eventogaleria WHERE id = '{$id}'") or die(mysql_error());
		   
		   $evento = mysql_fetch_object($sql);
		   
		   ?>
			
			<form action="_ac_alterar_galeria.php" method="post" onsubmit="javascript: return valida_nova_galeria();" name="form_nova_galeria">
			<input type="hidden" name="id" value="<?php echo $id;?>">
				<div style="margin-bottom: 10px;"><b>Título:</b> <input type="text" name="titulo" style="width: 918px;" value="<?php echo $evento->titulo;?>"></div>
				<div style="margin-bottom: 10px;"><b>Tipo da Galeria:</b> 
					<select name="IdTipoGaleria">
						<?php 
						if($evento->IdTipoGaleria == 1) {
						?>
							<option value="1" selected="selected">Casa de Repouso</option>
							<option value="2">Construção</option>
						<?php 
						}
						else {
						?>
							<option value="1">Casa de Repouso</option>
							<option value="2" selected="selected">Construção</option>
						<?php 
						}
						?>
					</select>
				</div>
				
				<div>
			    	<b>Descrição:</b> <br>
			    	<textarea id="descricao" name="descricao" style="width: 960px;" rows="8"><?php echo $evento->descricao;?></textarea>
			    </div>
			    <br>
			    <input type="submit" value="Salvar" class="btn btn-info">
			</form>
		   
	    </div>
	</div>
	<!-- FIM CORPO -->
    
  </body>
</html>