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
	<title>Yanetsis - Speaker</title>
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
    <div id="wrapper" class="noRadius toggled claseVerde">

        <!-- menú lateral -->
        <?php $active=4;include("menu.php") ?>
        <!-- fin menú lateral -->

        <!-- Contenido central -->
        <div id="page-content-wrapper" class="noPadding fondoInternas">
        	<div class="container-fluid noPadding">
	        	<div class="container noPadding internoSeccionesScroll">

		        	<div class="row noPadding relativo">
		        		<div class=" col-lg col-md col-xl columnaCentralPadding centroAcerca relativo">
		        			<?php for($a=1;$a<=4;$a++){?>
		        			<div class="row marginSpeaker">
		        				<div class="col-lg-12 col-md-12 col-xl-12">
		        					<h2 class="tituloSpeaker">Conferencia sobre canto y sus ventajas</h2>
		        				</div>
		        				<div class="col-lg-2 col-md-2 col-xl-2 horizon" data-animate-in="preset:slideInLeftShort;duration:1000ms;">	
		        					<div class="fechaSuperiorSpeaker">
		        						<?php echo $a?>
		        					</div>
		        					<div class="fechaInferiorSpeaker">
		        						Marzo
		        					</div>
		        				</div>
		        				<div class="col-lg-10 col-md-10 col-xl-10 horizon" data-animate-in="preset:slideInRightShort;duration:1000ms;">	
		        					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		        					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		        					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		        					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
		        				</div>
		        				<div class="col-lg-12 col-md-12 col-xl-12 horizon" data-animate-in="preset:slideInUpShort;duration:1000ms;">
		        					<div class="row">
		        						<div class="col-lg fechaSpeaker"></div>
		        						<div class="col-lg-5 col-md-5 col-xl-5 fechaSpeaker">
		        							<small><strong>Lugar</strong></small><br>
		        							Palacio de los deportes
		        						</div>
		        						<div class="col-lg-5 col-md-5 col-xl-5 horaSpeaker">
		        							<small><strong>Fecha y Hora</strong></small><br>
		        							0<?php echo $a?> de Marzo de 2018 3:30pm
		        						</div>
		        					</div>
		        				</div>
		        			</div>
		        			<?php }?>
		        			
		        			<!--<?php include("pieContacto.php") ?>-->
		        			
		        		</div>
		        		<div class=" col-lg-2 col-md-2  col-xl-2 noPadding lateralesInternos lateralSpeaker">
		        			<div class="tituloInterno horizon" data-animate-in="preset:slideInDownShort;duration:1000ms;">
		        				<div class="contTexto">
		        					Speaker
		        					<div class="flecha_izquierda"></div>
		        				</div>
		        			</div>
		        		</div>
		        		<!-- <div class=" col-lg-10 col-md-10  col-xl-10 relativo">
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