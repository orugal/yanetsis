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
	<title>Yanetsis - Aceca de mí</title>
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
    <div id="wrapper" class="noRadius toggled claseRoja">

        <!-- menú lateral -->
        <?php $active=2;include("menu.php") ?>
        <!-- fin menú lateral -->

        <!-- Contenido central -->
        <div id="page-content-wrapper" class="noPadding fondoInternas">
        	<div class="container-fluid noPadding">
	        	<div class="container noPadding ">
		        	<div class="row noPadding relativo">
		        		<div class=" col-lg col-md col-xl columnaCentralPadding centroAcerca relativo">
		        			
	        				<ul class="nav nav-tabs horizon" data-animate-in="preset:slideInDownShort;duration:1000ms;" id="myTab" role="tablist">
							  <li  class="nav-item">
							    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#historia" role="tab" aria-controls="historia" aria-selected="true">Historia</a>
							  </li>
							  <li class="nav-item" >
							    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#estudios" role="tab" aria-controls="estudios" aria-selected="false">Estudios</a>
							  </li>
							  <li   class="nav-item">
							    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#premios" role="tab" aria-controls="premios" aria-selected="false">Premios</a>
							  </li  class="nav-item">
							</ul>

							<div class="tab-content" id="myTabContent">
							  <div class="tab-pane fade show in active" id="historia" role="tabpanel" aria-labelledby="home-tab">
							  	Historia Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>

							  	Historia Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>

							  	Historia Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
							  </div>
							  <div class="tab-pane fade" id="estudios" role="tabpanel" aria-labelledby="profile-tab">
							  	Estudios Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>

							  	Estudios Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							  </div>
							  <div class="tab-pane fade" id="premios" role="tabpanel" aria-labelledby="contact-tab">
							  	Premios Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>

							  	Premios Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							  </div>
							</div>

							<?php include("pieContacto.php") ?>
		        		</div>
		        		<div class=" col-lg-2 col-md-2  col-xl-2 noPadding lateralesInternos lateralAcercaDeMi">
		        			<div class="tituloInterno horizon" data-animate-in="preset:slideInDownShort;duration:1000ms;">
		        				<div class="contTexto">
		        					Acerca de mí
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