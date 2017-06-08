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
		   <h3>Novo Evento</h3>
		   
			
			<form action="_ac_cadastrar_evento.php" method="post" onsubmit="javascript: return valida_nova_galeria();" name="form_nova_galeria">
				<div style="margin-bottom: 10px;"><b>Título:</b> <input type="text" name="titulo" style="width: 918px;"></div>
				<div style="margin-bottom: 10px;"><b>Tipo da Galeria:</b> 
					<select name="IdTipoGaleria">
						<option value=""></option>
						<?php 
						$tipo_categorias = mysql_query("SELECT * FROM tiposgaleria") or die(mysql_error());
						
						while($tipo = mysql_fetch_object($tipo_categorias)) {
								echo "<option value=\".$tipo->id.\">".$tipo->tipo."</option>";
						}
						?>
					</select>
				</div>
			    <div>
			    	<b>Descrição:</b> <br>
			    	<textarea id="descricao" name="descricao" style="width: 960px;" rows="8"></textarea>
			    </div>
			    <br>
			    <input type="submit" value="Salvar" class="btn btn-info">
			</form>
		   
	    </div>
	</div>
	<!-- FIM CORPO -->
    
  </body>
</html>