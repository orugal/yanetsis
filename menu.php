<!--versión PC-->
<div id="sidebar-wrapper" class="noRadius noBorder d-none d-lg-block d-xl-block d-md-block">
        	<div class="container-fluid noPadding noBorder noRadius">
	        	<div class="card noRadius noBorder relativo borderCard">
				  <img class="card-img-top noRadius noBorder" src="images/diseno/yanetsis.jpg" alt="Yanetsis" width="100%">
				    <div class="contLogo horizon" data-animate-in="preset:scaleOut;duration:1000ms;">
				    	<img src="images/diseno/logo.jpg" width="100%">
				    </div>
				</div>
			</div>
			<div class="container-fluid noPadding noBorder noRadius distanciaMenu">
	            <ul class="sidebar-nav">
	                <li>
	                    <a href="index.php" data-toggle="tooltip" data-placement="left" title="Página principal">Home <i class="fas fa-chevron-right float-right iconoMargin <?php if($active == 1){?>iconoMenuSelect<?php }else{?>iconoMenu<?php } ?>"></i></a>
	                </li>
	                <li>
	                    <a href="acerca-de-mi.php" data-toggle="tooltip" data-placement="left" title="Conoce más acerca de mi">Acerca de mi <i class="fas fa-chevron-right float-right iconoMargin <?php if($active == 2){?>iconoMenuSelect<?php }else{?>iconoMenu<?php } ?>"></i></a>
	                </li>
	                <li>
	                    <a href="experiencia.php" data-toggle="tooltip" data-placement="left" title="Conoce mi experiencia">Experiencia <i class="fas fa-chevron-right float-right iconoMargin <?php if($active == 3){?>iconoMenuSelect<?php }else{?>iconoMenu<?php } ?>"></i></a>
	                </li>
	                <li>
	                    <a href="speaker.php" data-toggle="tooltip" data-placement="left" title="Speaker">Speaker <i class="fas fa-chevron-right float-right iconoMargin <?php if($active == 4){?>iconoMenuSelect<?php }else{?>iconoMenu<?php } ?>"></i></a>
	                </li>
	                <li>
	                    <a href="trayectoria.php" data-toggle="tooltip" data-placement="left" title="Mi trayectoria">Trayectoria <i class="fas fa-chevron-right float-right iconoMargin <?php if($active == 5){?>iconoMenuSelect<?php }else{?>iconoMenu<?php } ?>"></i></a>
	                </li>
	                <li>
	                    <a href="blog.php" data-toggle="tooltip" data-placement="left" title="Actualidad">Blog <i class="fas fa-chevron-right float-right iconoMargin <?php if($active == 6){?>iconoMenuSelect<?php }else{?>iconoMenu<?php } ?>"></i></a>
	                </li>
	                <li>
	                    <a href="contacto.php" data-toggle="tooltip" data-placement="left" title="No perdamos el contacto">Estemos en contácto <i class="fas fa-chevron-right float-right iconoMargin <?php if($active == 7){?>iconoMenuSelect<?php }else{?>iconoMenu<?php } ?>"></i></a>
	                </li>
	            </ul>
	            <div class="container iconosRedes">
	        	    <a href="http://www.facebook.com" data-toggle="tooltip" data-placement="top" title="Sígueme en Facebook"><i class="fab fa-facebook"></i> </a>
					<a href="http://www.instagram.com" data-toggle="tooltip" data-placement="top" title="Sígueme en Instagram"><i class="fab fa-instagram"></i></a>
					<a href="http://www.twitter.com" data-toggle="tooltip" data-placement="top" title=" Sígueme en Twitter"><i class="fab fa-twitter"></i></a>
	            </div>
	            <div class="container desarrollador">
	            	Desarrollado por <a data-toggle="tooltip" data-placement="top" href="http://www.wannabe.com.co/" title="Wannabe, diseño y desarrollo web a la medida"><strong>Wannabe</strong></a>
	            </div>
	        </div>
</div>



<!--versión -->
<nav class="navbar navbar-expand-lg navbar-light bg-light d-lg-none d-xl-none">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>