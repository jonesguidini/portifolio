	<?php

	include("admin/_conecta.php");//conecta ao banco de dados
	
	include_once("inc/analyticstracking.php");//conecta ao banco de dados

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
		case "index" :
			$_index = 'class="active"';
		break;
		
		case "instituicao" :
			$_instituicao = 'class="active"';
		break;
		
		case "galeria" :
			$_galeria = 'class="active"';
		break;
		
		case "colabore" :
			$_colabore = 'class="active"';
		break;
		
		case "artigos" :
			$_artigos = 'class="active"';
		break;
		
		case "parceiros" :
			$_parceiros = 'class="active"';
		break;
		
		case "contato" :
			$_contato = 'class="active"';
		break;

	}
	
	?>
	<!-- MENU -->
	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">samaritanodf.org.br</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li <?php echo $_index; ?> ><a href="index.php">Inicial</a></li>
              <li <?php echo $_instituicao; ?>><a href="instituicao.php">A Instituição</a></li>
              <li <?php echo $_galeria; ?> ><a href="galeria.php">Galeria de Fotos</a></li>
              <li <?php echo $_colabore; ?> ><a href="colabore.php">Colabore</a></li>
              <li <?php echo $_artigos; ?> ><a href="artigos.php">Artigos</a></li>
              <li <?php echo $_parceiros; ?> ><a href="parceiros.php">Parceiros</a></li>
              <li <?php echo $_contato; ?> ><a href="contato.php">Fale Conosco</a></li>
            </ul>
         
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <!-- FIM MENU -->
    
    <!-- IMAGENS CABECALHO -->
    <div class="row-fluid cabecalho">
  		<div class="container"><img src="img/cabecalho_01.png" border="0" alt=""><img src="img/cabecalho_02.png" border="0" alt=""></div>
  	</div>
  	<!-- FIM IMAGENS CABECALHO -->