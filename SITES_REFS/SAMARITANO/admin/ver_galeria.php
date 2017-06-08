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
     
     
     
     <meta name="description" content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS Toolkit styles -->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<!-- Generic page styles -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Bootstrap styles for responsive website layout, supporting different screen sizes -->
	<link rel="stylesheet" href="../css/bootstrap-responsive.min.css">
	<!-- Bootstrap CSS fixes for IE6 -->
	<!--[if lt IE 7]>
	<link rel="stylesheet" href="http://blueimp.github.io/cdn/css/bootstrap-ie6.min.css">
	<![endif]-->
	<!-- blueimp Gallery styles -->
	<link rel="stylesheet" href="css/blueimp-gallery.min.css">
	<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
	<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
	<!-- CSS adjustments for browsers with JavaScript disabled -->
	<noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>

  </head>

  <body>
  	<!-- CABECALHO -->
	<?php include("inc/cabecalho.php");?>
	<?php 
	 $_SESSION['id_categoria'] = $_GET['id'];
	?>
	<!-- FIM CABECALHO -->
	
	<!-- CORPO -->
	<div class="row-fluid fundo_corpo_admin">
		<div class="container conteudo_admin">
		   <h3>Ver Evento</h3>
		   
		   <?php 
			   $id = $_GET['id'];
			   $sql = mysql_query("SELECT * FROM eventogaleria WHERE id = '{$id}'") or die(mysql_error());
			   $galeria = mysql_fetch_object($sql);
		   ?>
		   
		   <div style="margin-bottom: 10px;">
		   	<a href="editar_galeria.php?id=<?php echo $id;?>" class="btn btn-primary btn-small">Editar Evento</a> 
		   	<a href="_ac_excluir_galeria.php?id=<?php echo $galeria->id;?>" class="btn btn-danger btn-small" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a> 
		   </div>
		
				<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td><b>Título: </b> <br>
					<?php echo $galeria->titulo;?><br>
					<br>
					<b>Data:</b><br>
					<?php echo date("d/m/Y - H:i", strtotime($galeria->dataEvento));?>h<br>
					<br>
					<b>Descrição:</b><br>
					<?php echo $galeria->descricao;?>
				</td>
				</tr>
				</table>
		   		
		   		<br>
		   		
		   		<h3>Editar Fotos</h3>
		   		<form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
		   		<input type="hidden" name="id_galeria" id="id_galeria" value="<?php echo $_GET['id'];?>" class="form-control">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value="http://blueimp.github.io/jQuery-File-Upload/"></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="fileupload-buttonbar">
            <div class="span7">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-small btn-success fileinput-button">
                    <i class="icon-plus icon-white"></i>
                    <span>Selecionar Fotos</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-small btn-primary start">
                    <i class="icon-upload icon-white"></i>
                    <span>Iniciar upload</span>
                </button>
                <button type="reset" class="btn btn-small btn-warning cancel">
                    <i class="icon-ban-circle icon-white"></i>
                    <span>Cancelar upload</span>
                </button>
                <button type="button" class="btn btn-small btn-danger delete">
                    <i class="icon-trash icon-white"></i>
                    <span>Excluir</span>
                </button>
                <input type="checkbox" class="toggle">
                <!-- The loading indicator is shown during file processing -->
                <span class="fileupload-loading"></span>
            </div>
            <!-- The global progress information -->
            <div class="span5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="bar" style="width:0%;"></div>
                </div>
                <!-- The extended global progress information -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped"><tbody class="files">
        <tr> 
	        <td width="60"><b>Foto</b></td> 
	        <td width="750"><b>Nome do Arquivo</b></td> 
	        <td width="100"><b>Tamanho</b></td> 
	        <td><b>Opções</b></td>
        </tr>
        </tbody></table>
    </form>
    
    
    
    <!-- The blueimp Gallery widget -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>
<!-- The template to display files available for upload -->
<script type="text/javascript">
$(document).ready(function(){
	
	$('#fileupload').bind('fileuploadsubmit', function (e, data) {
		console.log(data);
	    // The example input, doesn't have to be part of the upload form:
	    var input = $('#id_galeria');
		
		console.log(input);
		
	    data.formData = {id_galeria: input.val()};
	    if (!data.formData.id_galeria) {
	      input.focus();
	      return false;
	    }
	});
	
	
});	
</script>


<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            {% if (file.error) { %}
                <div><span class="label label-important">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <p class="size">{%=o.formatFileSize(file.size)%}</p>
            {% if (!o.files.error) { %}
                <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="bar" style="width:0%;"></div></div>
            {% } %}
        </td>
        <td>
            {% if (!o.files.error && !i && !o.options.autoUpload) { %}
                <button class="btn btn-small btn-primary start">
                    <i class="icon-upload icon-white"></i>
                    <span>Iniciar</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-small btn-warning cancel">
                    <i class="icon-ban-circle icon-white"></i>
                    <span>Cancelar</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
            </p>
            {% if (file.error) { %}
                <div><span class="label label-important">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            <button class="btn btn-small btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                <i class="icon-trash icon-white"></i>
                <span>Excluir</span>
            </button>
            <input type="checkbox" name="delete" value="1" class="toggle">
        </td>
    </tr>
{% } %}
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="js/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="../js/bootstrap.min.js"></script>
<!-- blueimp Gallery script -->
<script src="js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="js/main.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->
		   		
	    </div>
	</div>
	<!-- FIM CORPO -->
	
	
	<?php
	/*
$options = array(
    'delete_type' => 'POST',
    'db_host' => 'localhost',
    'db_user' => 'root',
    'db_pass' => '',
    'db_name' => 'samarita_site',
    'db_table' => 'fotosevento',
	'id_galeria' => 27
);

error_reporting(E_ALL | E_STRICT);
require('server/php/UploadHandler.php');

class CustomUploadHandler extends UploadHandler {

    protected function initialize() {
        $this->db = new mysqli(
            $this->options['db_host'],
            $this->options['db_user'],
            $this->options['db_pass'],
            $this->options['db_name']
        );
        parent::initialize();
        $this->db->close();
		
		$result = mysql_query("SELECT * FROM fotosevento");
		$num_rows = mysql_num_rows($result);
		
		echo $num_rows;
    }

}

$upload_handler = new CustomUploadHandler($options);
*/
	?>
    
  </body>
</html>