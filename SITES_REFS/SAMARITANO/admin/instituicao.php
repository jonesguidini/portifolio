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
		   <h3>Instituição</h3>
		   
		   <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<!-- TinyMCE 4.x -->
<script type="text/javascript">
 
tinymce.init({
  language : 'pt_BR',
  selector: "textarea#config",
  width: 970,
  height: 300,
  
  // ===========================================
  // INCLUDE THE PLUGIN
  // ===========================================
	
  plugins: [
    "advlist autolink lists link image charmap print preview anchor",
    "searchreplace visualblocks code fullscreen",
    "insertdatetime media table contextmenu paste jbimages"
  ],
	
  // ===========================================
  // PUT PLUGIN'S BUTTON on the toolbar
  // ===========================================
	
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
	
  // ===========================================
  // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
  // ===========================================
	
  relative_urls: false
	
});
 
</script>
<!-- /TinyMCE -->
			
			<?php 
			$consulta = mysql_query("SELECT * FROM config WHERE id = 1") or die (mysql_error());
			$_obj_consulta = mysql_fetch_object($consulta);
			$instituicao = $_obj_consulta->instituicao;
			?>
			
			<form action="_ac_atualizar_instituicao.php" method="post">
			    <textarea id="config" name="instituicao"><?php echo $instituicao; ?></textarea>
			    <br>
			    <input type="submit" value="Salvar" class="btn btn-info">
			</form>
		   
	    </div>
	</div>
	<!-- FIM CORPO -->
    
  </body>
</html>