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
			<span class="css_texto_biblico"><i>"Ao Senhor empresta o que se compadece do pobre, ele lhe pagar� o seu benef�cio."</i></span> <br>
			Prov�rbios 19:17<br>
			</center>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agradecemos e acreditamos que cada colaborador tem espirito de participa��o e respeito com a vida de todos aqueles que s�o atendidos pelos projetos sociais do Bom Samaritano.
     		Todos os profissionais, que de maneira direta ou indireta nos projetos de a��o social de nossa institui��o,assumem o compromisso de proporcionar a felicidade daqueles que carecem de seu apoio, e ao mesmo tempo serem aben�oados com o privil�gio de fazer algu�m feliz.<br> 
      		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Agradecemos e valorizamos nossos patrocinadores, apoiadores e colaboradores, por acreditar nas nossas a��es, buscando desta maneira desenvolver um relacionamento m�tuo com o nosso projeto.<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Por meio de a��es de visibilidade, elaboramos nossas contrapartidas, contemplando as expectativas de cada parceria, com o acompanhamento dos resultado de nossas a��es, atrav�s da divulga��o de nossos relat�rios de atividade sociais com bastante transpar�ncia.
			Al�m disso, os nossos projetos buscam sempre novas parcerias, que contribuam diretamente no desenvolvimento socioecon�mico, e cultural, buscando sempre o atendimento �s pessoas menos favorecidas da comunidade, ou sociedade, abrindo assim novos horizontes e possibilidades que beneficiem a comunidade como um todo.
			
			
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
	
	<!-- RODAP� -->
    <?php include("inc/rodape.php");?>
	<!-- FIM RODAP� -->	
    
  </body>
</html>
