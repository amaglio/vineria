<!DOCTYPE html>
<html lang="es">
<head>
	<title>Viñedos y Olivares del Quintón </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="VViñedos y Olivares del Quintón da vida a cultivos, cosecha y producción de los más altos estándares en enología y oleología.">
	<meta name="author" content="Ing. Adrian Magliola - Mg. Federigo Gomez.">
	
	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.1.0.js"  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<!-- Bootstrap	 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="css/global.css">
	
	<link href='//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900,300italic,400italic,700italic|PT+Serif:100,200,300,400,500,600,700,800,900,300italic,400italic,700italic|Vidaloka:100,200,300,400,500,600,700,800,900,300italic,400italic,700italic|Roboto:100,200,300,400,500,600,700,800,900,300italic,400italic,700italic|Prata:100,200,300,400,500,600,700,800,900,300italic,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<!-- CSS animate -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

	<!-- Font google -->
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	
	<!-- Font Awsome --> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	

	<script type="text/javascript" src="js/index.js"></script>
 	<script type="text/javascript" src="js/contacto.js"></script>
	

</head>

<?php  	$class = '';
		if( ! strpos( $_SERVER['REQUEST_URI'], '/index.php') )
			$class = 'class=body-blanco';
?>

<body  <?=$class?>>	
		
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">

			<a class="navbar-brand navbar-brand-mobile "   href="./index.php"></index><img class="img img-responsive" src="./img/logo/logo_vinedo2.png">  </a> </a>
			
			<?php  if(  strpos( $_SERVER['REQUEST_URI'], '/index.php') ):	 ?>

				<button class="navbar-toggler"   type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    	<i class="fas fa-bars"></i>
			  	</button>

		   <?php else: ?>

		   		<button class="navbar-toggler navbar-blanco" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    	<i class="fas fa-bars"></i>
			  	</button>

		   <?php endif; ?>

		  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav col-lg-5  ">

				    <li class="nav-item col-lg-3">
				        <a class="nav-link" href="bodega.php">Bodega</a>
				    </li>
				    <li class="nav-item col-lg-3">
				        <a class="nav-link" href="almazara.php">Almazara</a>
				    </li>
				    <li class="nav-item col-lg-3">
				        <a class="nav-link" href="./turismo.php"> Turismo	</a>
				    </li>
				    <li class="nav-item  col-lg-3 ">
				        <a class="nav-link" href="vinos.php">Vinos </a>
				    </li>
			      
			    </ul>
			    <a class="navbar-brand col-lg-2 text-center" href="./index.php"> <img class="img img-responsive" src="./img/logo/logo_vinedo2.png">  </a>
			    <ul class="navbar-nav col-lg-5">
			       	<!-- <li class="nav-item  col-lg-3">
			        		<a class="nav-link" href="./dia_campo.php">Día de campo</a>
			      		</li> 
			      	-->
			      	<li class="nav-item col-lg-3">
				        <a class="nav-link" href="aceites.php">Aceites</a>
				    </li>
			      	<li class="nav-item  col-lg-3">
			        	<a class="nav-link" href="./quienes_somos.php">Quiénes somos</a>
			      	</li>
			     
			      	<li class="nav-item col-lg-3">
			        	<a class="nav-link" href="./servicios_industriales.php">Servicios industriales</a>
			      	</li>
			       	<li class="nav-item col-lg-3">
			        	<a class="nav-link" href="./contacto.php">Contacto</a>
			      	</li>
			    </ul>
			 </div>
		
		</div>
	</nav>
	