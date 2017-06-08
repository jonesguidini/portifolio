	<?php
  		if(isset($_GET['status'])) {
  		?>
         <div class="container" id="div_status">
       	   <div class="msgs_status">
		            <div class="alert alert-success">
		              <button type="button" class="close" data-dismiss="alert">×</button>
		              <?php echo $_GET['status'];?>
		            </div>
          </div>
       </div>
       <?php 
       }
       else if(isset($_GET['erro'])) {
       ?>
        <div class="container" id="div_status">
       	   <div class="msgs_status">
		            <div class="alert alert-error">
		              <button type="button" class="close" data-dismiss="alert">×</button>
		              <?php echo $_GET['erro'];?>
		            </div>
          </div>
       </div>
       <?php 
       }
       ?>
       <script type="text/javascript">
       jQuery(document).ready(function () {
    	    //hide a div after 3 seconds
    	    setTimeout( "jQuery('#div_status').fadeOut('slow');",3000 );
    	});
       </script>
	
	<?php

	include("_conecta.php");//conecta ao banco de dados
	 
	$pagina = basename($_SERVER['PHP_SELF']); 
	
	$pagina = str_replace(".php", "", $pagina);
	
	$_index = "";
	$_instituicao = "";
	$_galeria = "";
	$_colabore = "";
	$_artigos = "";
	$_parceiros = "";
	$_contato = "";
	
	switch ($pagina) {
		case "inicial" :
			$_index = 'class="active"';
		break;
		
		case "instituicao" :
			$_instituicao = 'class="active"';
		break;
		
		case "galeria" :
			$_galeria = 'class="active"';
		break;
		
		case "artigos" :
			$_artigos = 'class="active"';
		break;
		
		case "parceiros" :
			$_parceiros = 'class="active"';
		break;

	}
	
	?>
	<script type="text/javascript" src="js/folha.js"></script>
	<!-- MENU -->
	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">ADMINISTRADOR</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li <?php echo $_index; ?> ><a href="inicial.php">Inicial</a></li>
              <li <?php echo $_instituicao; ?>><a href="instituicao.php">A Instituição</a></li>
              <li <?php echo $_galeria; ?> ><a href="galerias.php">Galerias de Fotos</a></li>
              <li <?php echo $_artigos; ?> ><a href="artigos.php">Artigos</a></li>
              <li ><a href="sair.php">Sair</a></li>
            </ul>
         
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
    
    <!-- FIM MENU -->
    
   