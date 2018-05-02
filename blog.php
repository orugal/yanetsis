<!--                                                    
     ("`-''-/").___....''"`-._
      `6_ 6  )   `-.  (     ).`-.__.`) 
      (_Y_.)'  ._   )  `._ `. ``-..-'
    _..`..'_..-_/  /..'_.' ,'
   (il),-''  (li),'  ((!.-'

   Desarrollado por Farez Prieto
   http://www.wannabe.com.co
-->
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Yanetsis - Blog</title>
	<meta content="#1e6676" name="theme-color">
    <meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/timber.css">
	<link rel="stylesheet" href="css/yanetsis.css">
	<link rel="stylesheet" href="webfonts/fonts.css">
</head>
<body>
	
    <?php include("preloader.php") ?>

	<!-- Panel completo-->
    <div id="wrapper" class="noRadius toggled claseVerde visible-lg visible-md visible-lg">

        <!-- menú lateral -->
        <?php $active=6;include("menu.php") ?>
        <!-- fin menú lateral -->

        <!-- Contenido central -->
        <div id="page-content-wrapper" class="noPadding fondoInternas">
        	<div class="container-fluid noPadding">
	        	<div class="container noPadding ">
		        	<div class="row noPadding relativo">
		        		<div class=" col-lg col-md col-xl columnaCentralPadding centroAcerca relativo">
		        			<?php for($a=1;$a<=4;$a++){?>
		        			<div class="row marginNoticias">
		        				<div class="col-lg-12 col-md-12 col-xl-12">
		        					<h2 class="tituloNoticias">
		        						Esta sería la noticia nro <?php echo $a?> del blog
		        						<span class="floatRight fechaNoticia">01 de Enero de 2018</span>
		        					</h2>
		        				</div>
		        				<div class="col-lg-3 col-md-3 col-xl-3 horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;">	
		        					<img src="images/diseno/bg<?php echo $a?>.jpg" alt="Imagen de la noticia" width="100%">
		        				</div>
		        				<div class="col-lg-9 col-md-9 col-xl-9 horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;">
		        					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		        					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		        					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		        					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
		        					<br>
		        					<a href="#" data-toggle="tooltip" data-placement="left" title="Leer esta nota" class="linkLeerMasNoticia">Leer más  <i class="fas fa-chevron-right"></i></a>
		        				</div>
		        			</div>
		        			<?php }?>
		        			
		        			<!--<?php include("pieContacto.php") ?>-->
		        			
		        		</div>
		        		<div class=" col-lg-2 col-md-2  col-xl-2 noPadding lateralesInternos lateralBlog">
		        			<div class="tituloInterno horizon" data-animate-in="preset:slideInDownShort;duration:1000ms;">
		        				<div class="contTexto">
		        					Blog
		        					<div class="flecha_izquierda"></div>
		        				</div>
		        			</div>
		        		</div><!-- 
		        		<div class=" col-lg-10 col-md-10  col-xl-10 relativo">
		        			<?php include("pieContacto.php") ?>
		        		</div> -->
		        		
		        	</div>
		        </div>
	        </div>


	    </div>    
        
        <!-- fon contenido central -->

    </div>
	<!-- panel completo -->

	<script src="js/jquery-3.1.0.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/timber.min.js"></script>
	<script src="js/jquery.tm.horizon.min.js"></script>
	<script src="js/yanetsis.js"></script>

</body>
</html>