<div class="container" >
	<div class="col-lg-12">
	    <div class="row">
	    	<div class="col-lg-6 col-md-6 col-xs-12" id="horarios">
	    		 <!--  <h2>Nuestros horarios</h2>
	    		  <p>
	    		  	De lunes a viernes de 11am a 18pm
	    		  </p>
	    		  <hr class="linea_divisoria linea_izquierda"  > </hr> -->
	    		  <h2>Nuestro contacto</h2>
	    		   <p>
	    		  	15.3623.6584 
	    		  </p>
	    		   <p>
	    		  	4658.2154 </p>
	    		  	<p> vinos@aceites.com 
	    		  </p>
	    	</div>
	    	<div class="col-lg-6 col-md-6 col-xs-12">
 
				<form action="" href="procesa_contacto.php" id="form_contacto" name="form_contacto">
			    	
			    	<div class="form-group">
					    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Tu nombre">
					</div>


			    	<?php  if(  strpos( $_SERVER['REQUEST_URI'], 'contacto.php') ):	 ?>

				    	 	<div class="form-group">
							    <input type="text" class="form-control" id="apellido" name="apellido"  aria-describedby="emailHelp" placeholder="Tu apellido">
							</div>

					<?php endif; ?>
					
					
					<div class="form-group">
					    <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Tu email">
					</div>

					<?php  if(  strpos( $_SERVER['REQUEST_URI'], 'contacto.php') ):	 ?>
					
						<div class="form-group">
						    <input type="text" class="form-control" id="telefono" name="telefono"  aria-describedby="telefonoHelp" placeholder="Tu telefono">
						</div>

						<div class="form-group">
						    <input type="text" class="form-control" id="pais" name="pais" aria-describedby="paisHelp" placeholder="Tu pais">
						
						</div>
						
						<div class="form-group">
						    <input type="text" class="form-control" id="empresa" name="empresa" aria-describedby="empresaHelp" placeholder="Tu empresa">
						</div>

					<?php endif; ?>
					
					<div class="form-group">
					    <textarea type="text" class="form-control" id="comentario" name="comentario" aria-describedby="comentarioHelp" placeholder="Tu comentario"></textarea>
					</div>



					<!--<div class="g-recaptcha" data-sitekey="6Ldpv6YUAAAAAIYLpNi_Sg9o99Z_ZIWojeBsR-OC"></div>-->

					<div class="form-group" id="div_submit">
					 	<button type="submit" id="sendMessageButton"  class=" btn-comprar"> Enviar </button>
					</div>

		    	</form>
				

	    	</div>	
	    </div>
		 
	</div>
</div>