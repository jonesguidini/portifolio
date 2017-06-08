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
				<div class="ico_pagina"><img src="img/icon_parceiros.png" width="28"></div>
				<div class="titulo_pagina">Parceiros</div>
			</div>
			
			<div class="">
			<div>
			<center>
			<span class="css_texto_biblico"><i>"Ao Senhor empresta o que se compadece do pobre, ele lhe pagará o seu benefício."</i></span> <br>
			Provérbios 19:17<br>
			</center>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agradecemos e acreditamos que cada colaborador tem espirito de participação e respeito com a vida de todos aqueles que são atendidos pelos projetos sociais do Bom Samaritano.
     		Todos os profissionais, que de maneira direta ou indireta nos projetos de ação social de nossa instituição,assumem o compromisso de proporcionar a felicidade daqueles que carecem de seu apoio, e ao mesmo tempo serem abençoados com o privilégio de fazer alguém feliz.<br> 
      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agradecemos e valorizamos nossos patrocinadores, apoiadores e colaboradores, por acreditar nas nossas ações, buscando desta maneira desenvolver um relacionamento mútuo com o nosso projeto.<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Por meio de ações de visibilidade, elaboramos nossas contrapartidas, contemplando as expectativas de cada parceria, com o acompanhamento dos resultado de nossas ações, através da divulgação de nossos relatórios de atividade sociais com bastante transparência.
			Além disso, os nossos projetos buscam sempre novas parcerias, que contribuam diretamente no desenvolvimento socioeconômico, e cultural, buscando sempre o atendimento às pessoas menos favorecidas da comunidade, ou sociedade, abrindo assim novos horizontes e possibilidades que beneficiem a comunidade como um todo.
			
			
			</div>
				
				<center>
             
             <!-- VISUWEB -->
             <div class="cx_parceiros">
                <div class="thumbnail">
                  <a href="http://www.visuweb.com.br" target="_blank"><img src="img/parceiro_visuweb.jpg" alt="" border="0"></a>
                  <div class="caption text-center">
                  
                    <span class="tit_parceiro">VISUWEB</span>
                     <div style="margin-top: 6px;">
                    	<a href="http://www.visuweb.com.br" class="btn btn-small btn-info" target="_blank">www.visuweb.com.br</a>
                   	 </div>
                   	 
                  </div>
                </div>
              </div>
              <!-- F VISUWEB -->
              
              <!-- NOVO PARCEIRO -->
              <?php for($i = 0; $i < 4; $i++) {?>
              <div class="cx_parceiros">
                <div class="thumbnail">
                  <img src="img/parceiro_novo.jpg" alt="">
                  <div class="caption text-center">
                  
                    <span class="tit_parceiro">SUA EMPRESA</span>
                    <div style="margin-top: 6px; width: 100%; text-align: center;">
                    	<a href="contato.php" class="btn btn-small btn-info">Clique aqui!</a>
                    </div>
                   
                  </div>
                </div>
              </div>
              <!-- F NOVO PARCEIRO -->
              </center>
				<?php }?>
			</div>
	    </div>
	</div>
	<!-- FIM CORPO -->
	
	<!-- RODAPÉ -->
    <?php include("inc/rodape.php");?>
	<!-- FIM RODAPÉ -->	
    
  </body>
</html>
