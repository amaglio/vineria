<?php include('./templates/header.php') ?>

<link rel="stylesheet" type="text/css" href="css/index.css">	
	 
<main role="main">
	
	<!-- Carrusel -->
	<section id="carrusel">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="height: 80% !important">

			<div class="carousel-inner">
				<!-- <ul class="carousel-indicators">
				    <li class="item1 active"></li>
				    <li class="item2"></li>
				    <li class="item3"></li>
				  </ul> -->
			    <div id="carrusel_div_1" class="carousel-item active">  
			    		<img src="img/carrusel/imagen1.jpg"> 
			    </div>
			    <div id="carrusel_div_2" class="carousel-item"> 
			    		<img src="img/carrusel/imagen2.jpg"> 
			    </div>
			    <div id="carrusel_div_3" class="carousel-item"> 	
			    		<img src="img/carrusel/imagen3.jpg"> 
			    </div>
			    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>
			</div>

		</div>
		<!-- Texto -->
		<section id="texto" >
			<div class="container">
				<p>
					Viñedos y Olivares del Quintón da vida a cultivos, cosecha y producción de los más altos estándares en enología y oleología. 
					Preserva cada atributo de la naturaleza que origina a los productos y a las experiencias en sus hectáreas, para que todas las personas activen el total de sus sentidos.
				</p>
			</div>
		</section>		
	</section>

	<!-- Productos -->
	<section id="productos	">
		<div class="container">
			<div class="row">
				
			  	<div class="col-lg-4 col-md-4 servicio">
			  		

			  		<div class="flip-box">
					  <div class="flip-box-inner">
					    <div class="flip-box-front">
					     <img src="./img/bodega.jpg" class="img-responsive img-fluid rounded img_producto"> 
					     <h2 class="titulo_servicio">BODEGA</h2>
					    </div>
					    <div class="flip-box-back">
					      <h2>BODEGA</h2>
					      <p>Gravitacional y de diseño único, para concretar la producción premium originada en nuestros viñedos. </p>
					    </div>
					  </div>
					</div>
			  	</div>

			  	<div class="col-lg-4 col-md-4 servicio">
		  			<div class="flip-box">
					  <div class="flip-box-inner">
					    <div class="flip-box-front">
					      <img src="./img/dia_de_campo.jpg" class="img-responsive img-fluid rounded img_producto"> 
					      <h2 class="titulo_servicio">DÍA DE CAMPO</h2>
					    </div>
					    <div class="flip-box-back">
					      <h2>DÍA DE CAMPO	</h2>
					      <p>Enoturismo y oleoturismo a medida para parejas, familias y grupos.</p>
					    </div>
					  </div>
					</div>
			  	</div>

			  	<div class="col-lg-4 col-md-4 servicio">
			  		

			  		<div class="flip-box">
					  <div class="flip-box-inner">
					    <div class="flip-box-front">
					     <img src="./img/executive_quiton.jpg" class="img-responsive img-fluid rounded img_producto">
					     <h2 class="titulo_servicio">EXECUTIVE QUINTON</h2>
					    </div>
					    <div class="flip-box-back">
					      <h2>EXECUTIVE QUINTON</h2>
					      <p>Convenciones y reuniones ejecutivas <exclusivas class=""></exclusivas></p>
					    </div>
					  </div>
					</div>



			  	</div>

			</div>
		</div>
	</section>

	<!-- VINO Y ACEITES -->
	<section id="vinos_aceites" >

		<div class="container">
			<div class="row">
			 
				<div class="col-lg-6" id="div_vinos">
				 	
					<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel"  >

						<div class="carousel-inner">
							 
						    <div id="carrusel_div_1" class="carousel-item active">  
						    	<div class="row">
							    	<div class="col-lg-5 col-xs-12">
							    		<img class="img-fluid" src="./img/vinos/bruna_etiqueta_negra_malbec.jpg"> 
							    	</div>
							    	<div class="col-lg-7 col-xs-12">
							    		<h5>Malbec Selección | Gran Reserva</h5>
							    		<h1>Bruna Etiqueta Negra</h1>
							    		<p>24 meses en barrica de roble francés</p>
							    		<h4><strong>Varietal:</strong> Malbec 2018, con un corte de Syrah en un 10 %</h4>
							    	</div>	
							    </div>
						    </div>
						    <div id="carrusel_div_2" class="carousel-item"> 
						    	<div class="row">
							    	<div class="col-lg-5 col-xs-12">
							    		<img src="./img/vinos/bruna_etiqueta_negra_malbec.jpg"> 
							    	</div>
							    	<div class="col-lg-7 col-xs-12">
							    		<h5>Malbec Selección | Reserva</h5>
							    		<h1>Bruna</h1>
							    		<p>14 meses en barrica de roble francés</p>
							    		<h4><strong>Varietal:</strong> Malbec 2017</h4>
							    	</div>	
							    </div>
						    </div>
						    <div id="carrusel_div_3" class="carousel-item"> 	
						    	<div class="row">
							    	<div class="col-lg-5">
							    		<img src="./img/vinos/bruna_etiqueta_negra_malbec.jpg"> 
							    	</div>
							    	<div class="col-lg-7">
							    		<h5>Malbec</h5>
							    		<h1>Petra</h1>
							    		<p>12 meses en barrica de roble francés</p>
							    		<h4><strong>Varietal:</strong> Malbec 2018</h4>
							    	</div>	
							    </div>
						    </div>
						    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							</a>
						</div>

					</div>



				</div>
				<div class="col-lg-6" id="div_aceite">
				 	 
				    <div id="aceite_oliva">  
				    	<div class="row">
				    		<div class="col-lg-6">
					    		<h5>Aceite de Oliva Extra Virgen</h5>
					    		<h1>Piedras del Olivar</h1> 
					    	</div>	
					    	<div class="col-lg-6">
					    		<img class="img-fluid" src="./img/aceites/aceite.png"> 
					    	</div>
					    	
					    </div>
				    </div>
				</div>
			</div>
		</div>
		   
	</section>

	<!-- Video -->
	<section id="video" >
			 
		<iframe width="100%" height="700px" src="https://www.youtube.com/embed/qS8ikPf9Bf0?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		
		<div class="text-video">
			<h3>Weddings</h3>
			<p>
				Offering an elegant wedding experience in lovingly restored classic surroundings, with magnificent views and complimented with world class cuisine and wines.  Mission provides the complete wedding service all in the one convenient and stunning location.
			</p>
		</div>			   
	</section>
</main>
	
<?php include('./templates/footer.php') ?>