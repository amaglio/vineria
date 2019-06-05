<!-- Footer -->
	<footer>
	  	<div class="container footer">
	    	<div class="row">
	    		<div class="col-lg-4 col-md-6  col-xs-12">
					<h5 class="titulo_footer">Viñedos y Olivares del Quintón</h5>
					<div>
						<p>
							Ruta 50 kilómetro 17.5  <br>
							Paraje El Quintón, Colonia.  <br>
							República Oriental del Uruguay.
						</p>
						<p>
						Office: <a href="tel:06 845 9350">06 845 9350</a> <br>
						Restaurant: <a href="tel:06 845 9354">06 845 9354</a> <br>
						Cellar Door: <a href="tel:06 845 9353">06 845 9353</a>
					</p>
					</div>
	    		</div>
	    		 
	    		<div class="col-lg-4 col-md-6 col-xs-12">
	    			<h5 class="titulo_footer">Nuestros productos</h5>
	    			<p>
		    			<ul>
		    				<li><a href="bodega.php">Bodega</a>  </li>
		    				<li><a href="almazara.php">Almazara</a> </li>
		    				<li><a href="turismo.php">Turismo</a> </li>
		    				<li><a href="vinos.php">Vinos</a> </li>
		    				<li><a href="aceites.php">Aceites</a> </li>
		    				<li><a href="quienes_somos.php">Quiénes somos</a> </li> 
		    				<li><a href="servicios_industriales.php">Servicios industriales</a> </li> 
		    				<li><a href="contacto.php">Contacto</a> </li>
		    			</ul>
		    		<p>
	    		</div>
	    		<div class="col-lg-4 col-md-6 col-xs-12 footer_iconos">
	    			 <i class="fab fa-2x fa-instagram"></i>
	    			 <i class="fab fa-2x fa-facebook-square"></i>
	    			 <i class="fab fa-2x fa-youtube"></i>
	    		</div>
	    	</div>	
	  	</div>
	</footer> 


	<div id="div_button_up">
		<button class="btn btn-primary" id="button_up">
			<i class="fas fa-2x fa-arrow-up"></i>
		</button>
	</div>
		 
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js" crossorigin="anonymous"></script>
	<script type="text/javascript">
			$("#form_contacto").validate({
										  rules: {
										     
										    nombre: "required",
										    
										    email: {
										      required: true,
										      email: true
										    }

										  },
										   messages:{
										   	
										   	nombre: "El nombre es obligatorio",


										    email: {
										      required: "El email es obligatorio",
										      email: "El formato de email es incorrecto"
										    }

										   }

										});
	</script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</body>
	
</html>