<?php include('./templates/header.php') ?>

<link rel="stylesheet" type="text/css" href="css/vinos.css">
<link rel="stylesheet" type="text/css" href="css/bodega.css">

<style type="text/css"></style>

<main role="main">
	
	<div class="col-lg-12" id="imagen_central">
		<div class="container">
			<h2 class="titulo_slide">Nuestra bodega</h2>
		</div>
	</div>


	<div class="col-lg-12"  >
		<div class="container">
			<div class="text-bodega">
				<p>
					Con viñedos propios de cepa Malbec, Syrah y Cabernet Franc, y bajo la supervisión un enólogo internacional, cultivamos bajo estrictas normas de calidad nuestra materia prima para la elaboración de vinos de selección premium.
				</p>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="col-lg-12 fila ">
			<div class="row">
		    	<div class="col-lg-6 col-md-3  col-xs-12">
		    		<img src="./img/bodega.jpg" class="img img-fluid"> 
		    	</div>
		    	<div class="col-lg-6 col-md-9  col-xs-12">
		    		 
		    		<p>
		    			La vinificación se realiza en bodega propia, concebida bajo el concepto de bodega gravitacional.
		    		</p>
		    		<p>
						Nuestras barricas de roble francés conservan en un ambiente único y con una humedad óptima del terruño en donde son cultivadas.
		    		</p>
		    	</div>	
		    </div>
		</div>
	</div>

	<div class="col-lg-12 fila fotos_bodega">
	 
		<div class="row">
	    	<div class="col-lg-3 col-md-3  col-xs-12">
	    		 <img src="./img/bodega.jpg" class="img img-fluid img-bodega"> 
	    	</div>
	    	<div class="col-lg-3 col-md-3  col-xs-12">
	    		 <img src="./img/bodega.jpg" class="img img-fluid img-bodega"> 
	    	</div>	
	    	<div class="col-lg-3 col-md-3  col-xs-12">
	    		 <img src="./img/bodega.jpg" class="img img-fluid img-bodega"> 
	    	</div>
	    	<div class="col-lg-3 col-md-3  col-xs-12">
	    		 <img src="./img/bodega.jpg" class="img img-fluid img-bodega"> 
	    	</div>	
	    </div>

	    <div class="row">
	    	<div class="col-lg-3 col-md-3  col-xs-12">
	    		 <img src="./img/bodega.jpg" class="img img-fluid img-bodega"> 
	    	</div>
	    	<div class="col-lg-3 col-md-3  col-xs-12">
	    		 <img src="./img/bodega.jpg" class="img img-fluid img-bodega"> 
	    	</div>	
	    	<div class="col-lg-3 col-md-3  col-xs-12">
	    		 <img src="./img/bodega.jpg" class="img img-fluid img-bodega"> 
	    	</div>
	    	<div class="col-lg-3 col-md-3  col-xs-12">
	    		 <img src="./img/bodega.jpg" class="img img-fluid img-bodega"> 
	    	</div>	
	    </div>
		 
	</div>
	
	<div class="container">
		<div class="col-lg-12">
		    <div class="row">
		    	<div class="col-lg-6 col-md-3 col-xs-12">
		    		  <h5>Nuestros horarios</h5>
		    		  <p>
		    		  	De lunes a viernes de 11am a 18pm
		    		  </p>
		    		   <p>
		    		  	15.3623.6584 <br>
		    		  	4658.2154 <br>
		    		  	vinos@aceites.com <br>
		    		  </p>
		    	</div>
		    	<div class="col-lg-6 col-md-9 col-xs-12">
		    		<form action="/procesa_contacto.php" id="form_contacto" method="post">
			    		<input class="form-control" type="text" id="nombre" name="nombre" placeholder="Tu nombre">
			    		<input class="form-control" type="text" id="email" name="email" placeholder="Tu Email">
			    		<textarea class="form-control"></textarea>
			    		<input type="submit" name="Enviar" class="btn btn-info">
					</form>
		    	</div>	
		    </div>
			 
		</div>
	</div>
 

	 

	 
</main>
	
<?php include('./templates/footer.php') ?>
