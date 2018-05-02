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
	<title>Yanetsis - Home</title>
	<meta content="#1e6676" name="theme-color">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fontawesome-all.min.css"><!-- 
	<link rel="stylesheet" href="css/timber.css"> -->
	<link rel="stylesheet" href="webfonts/fonts.css">
	<link rel="stylesheet" href="css/yanetsis.css">
</head>
<body>
    <?php include("preloader.php") ?>
	
	<!-- Versión PC-->
	<!-- Panel completo-->
    <div id="wrapper" class="noRadius toggled claseRoja">

        <!-- menú lateral -->
        <?php $active=1;include("menu.php") ?>
        <!-- fin menú lateral -->

        <!-- Contenido central -->
        <div id="page-content-wrapper" class="backgroundPrincipal noPadding d-none d-lg-block d-xl-block d-md-block">

        	<iframe id="video-background" width="560" height="315" src="//www.youtube.com/embed/ucAglvhdcy4?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1&amp;html5=1&amp;allowfullscreen=true&amp;wmode=transparent&amp;loop=1" frameborder="0" allowfullscreen></iframe>



            	<div class="btnMenuPie" id="btn1" data-bg="1">
            		<div class="container noPadding panelBotonInterno">
	            		<div class="container fotoBotonInt fotoBotonInt1"></div>
	            		<h2>SOBRE MI</h2>
	            		<div class="txtBoton noMostrar">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            		tempor incididunt ut labore et dolore magna aliqua.</div>
	            		<div class="container-fluid btnMasInfo noMostrar">
	            			<div class="container noPadding">
	            				<a href="acerca-de-mi.php">MÁS INFORMACIÓN<i class="fas fa-chevron-right float-right iconoBotonesPrincipales"></i></a>
	            			</div>
	            		</div>
            		</div>
            	</div>
            	<div class="btnMenuPie" id="btn2" data-bg="2">
            		<div class="container noPadding panelBotonInterno">
            			<div class="container fotoBotonInt fotoBotonInt2"></div>
	            		<h2>TRAYECTORIA</h2>
	            		<div class="txtBoton noMostrar">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            		tempor incididunt ut labore et dolore magna aliqua.</div>
	            		<div class="container-fluid btnMasInfo noMostrar">
	            			<div class="container noPadding">
	            				<a href="trayectoria.php">MÁS INFORMACIÓN<i class="fas fa-chevron-right float-right iconoBotonesPrincipales"></i></a>
	            			</div>
	            		</div>
            		</div>
            	</div>
            	<div class="btnMenuPie" id="btn3" data-bg="3">
            		<div class="container noPadding panelBotonInterno">
            			<div class="container fotoBotonInt fotoBotonInt3"></div>
	            		<h2>EXPERIENCIA</h2>
	            		<div class="txtBoton noMostrar">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            		tempor incididunt ut labore et dolore magna aliqua.</div>
	            		<div class="container-fluid btnMasInfo noMostrar">
	            			<div class="container noPadding">
	            				<a href="experiencia.php">MÁS INFORMACIÓN<i class="fas fa-chevron-right float-right iconoBotonesPrincipales"></i></a>
	            			</div>
	            		</div>
            		</div>
            	</div>
            	<div class="btnMenuPie" id="btn4" data-bg="4">
            		<div class="container noPadding panelBotonInterno">
            			<div class="container fotoBotonInt fotoBotonInt4"></div>
	            		<h2>BLOG</h2>
	            		<div class="txtBoton noMostrar">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	            		tempor incididunt ut labore et dolore magna aliqua.</div>
	            		<div class="container-fluid btnMasInfo noMostrar">
	            			<div class="container noPadding">
	            				<a href="blog.php">MÁS INFORMACIÓN<i class="fas fa-chevron-right float-right iconoBotonesPrincipales"></i></a>
	            			</div>
	            		</div>
            		</div>
            	</div>

            
        </div>
        <!-- fon contenido central -->

    </div>
	<!-- panel completo -->

	<!-- Versión móvil-->
	<div class="container-fluid noPadding">
		<div class="container noPadding centroMovilHome">
			<div class="contLogo horizon" data-animate-in="preset:scaleOut;duration:1000ms;">
		    	<img src="images/diseno/logo.jpg" width="100%">
		    </div>
		</div>
	</div>

	<script src="js/jquery-3.1.0.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/timber.min.js"></script>
	<script src="js/jquery.tm.horizon.min.js"></script>
	<script src="js/yanetsis.js"></script>

</body>
</html>