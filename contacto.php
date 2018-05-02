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
	<title>Yanetsis - Contácto</title>
	<meta content="#1e6676" name="theme-color">
    <meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fontawesome-all.min.css"><!-- 
	<link rel="stylesheet" href="css/timber.css"> -->
	<link rel="stylesheet" href="css/yanetsis.css">
	<link rel="stylesheet" href="webfonts/fonts.css">
</head>
<body>
	
    <?php include("preloader.php") ?>

	<!-- Panel completo-->
    <div id="wrapper" class="noRadius toggled claseGris">

        <!-- menú lateral -->
        <?php $active=7;include("menu.php") ?>
        <!-- fin menú lateral -->

        <!-- Contenido central -->
        <div id="page-content-wrapper" class="noPadding fondoInternas">
        	<div class="container-fluid noPadding">
	        	<div class="container noPadding ">
		        	<div class="row noPadding relativo">
		        		<div class="col-lg col-md col-xl columnaCentralPadding centroAcerca relativo">
		        			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		        			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		        			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.<br>
		        			<form style="padding: 2% 5%">
		        				Todos los campos son obligatorios<br><br>
		        				<div class="row">
		        					<div class="col-lg-6 col-md-6 col-xl-6">
		        						<div class="form-group">
											<input type="text" class="form-control" name="" placeholder="Nombres y apellidos">    
										</div>
		        					</div>
		        					<div class="col-lg col-md col-xl">
		        						<div class="form-group">
			        						<input type="text" class="form-control" name="" placeholder="Correo electrónico">
			        					</div>
		        					</div>
		        					<div class="col-lg-6 col-md-6 col-xl-6">
		        						<div class="form-group">
			        						<input type="text" class="form-control" name="" placeholder="Teléfono fijo">
			        					</div>	
		        					</div>
		        					<div class="col-lg col-md col-xl">
		        						<div class="form-group">
			        						<input type="text" class="form-control" name="" placeholder="Teléfono móvil">
			        					</div>
		        					</div>
		        					<div class="col-lg-6 col-md-6 col-xl-6">
		        						<div class="form-group">
			        						<input type="text" class="form-control" name="" placeholder="Ciudad">
			        					</div>
		        					</div>
		        					<div class="col-lg col-md col-xl">
		        						<div class="form-group">
			        						<select class="form-control">
			        							<option>Seleccione...</option>
			        						</select> 
		        						</div>	
		        					</div>
		        					<div class="col-lg-12 col-md-12 col-xl-12">
		        						<div class="form-group">
			        						<textarea class="form-control" placeholder="Escribe tu mensaje"></textarea>
		        						</div>	
		        					</div>

		        					<div class="col-lg-6 col-md-6 col-xl-6">
		        						<label>
			        						<input type="checkbox" name=""> He leído y acepto el tratamiento de datos
			        					</label>
		        					</div>
		        					<div class="col-lg-6 col-md-6 col-xl-6">
		        						<input type="submit" name="" value="Enviar Mensaje" class="botonContacto float-right">
		        					</div>
		        				</div>
		        			</form>
		        			<!--<?php include("pieContacto.php") ?>-->
		        		</div>
		        		<div class=" col-lg-2 col-md-2  col-xl-2 noPadding lateralesInternos lateralAcercaDeMi">
		        			<div class="tituloInterno horizon" data-animate-in="preset:slideInDownShort;duration:1000ms;">
		        				<div class="contTexto">
		        					Contácto
		        					<div class="flecha_izquierda"></div>
		        				</div>
		        			</div>
		        		</div>
		        		
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