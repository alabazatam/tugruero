<?php include("../view_header.php");?>	


		<!-- Top content -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	
                        	<form role="form" action="" method="post" class="registration-form">
                        		
                        		<fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Paso 1 / 3</h3>
											<p>Identificaci&oacute;n</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-user"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
										<input type="hidden" name="formulario" id="formulario" value="1">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="registrarse-rif">RIF</label>
				                        	<input type="text" name="registrarse-rif" id="registrarse-rif" placeholder="RIF..." class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="registrarse-razon-social">Razón social</label>
											<input type="text" name="registrarse-razon-social" id="registrarse-razon-social" placeholder="Raz&oacute;n social..." class="form-last-name form-control" id="form-last-name">
				                        </div>
				                        <div class="form-group">
											<label class="sr-only" for="form-correo">Correo Electr&oacute;nico</label>
											<input type="text" name="form-correo" id="form-correo" placeholder="Correo Electr&oacute;nico..." 
				                        				class="form-about-yourself form-control" id="form-about-yourself"></textarea>
				                        </div>
				                        <button type="button" name="next-1" class="btn btn-next">Siguiente</button>
				                    </div>
									
			                    </fieldset>
			                    
			                    <fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Paso 2 / 3</h3>
		                            		<p>codigo de seguridad:</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-key"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                        <input type="hidden" name="formulario" id="formulario" value="2">
										<div class="form-group">
				                        	<label class="sr-only" for="form-email">Codigo de validación</label>
											<input type="text" name="form-email" placeholder="Codigo de validaci&oacute;n..." class="form-email form-control" id="form-email">
				                        </div>
				                        <button type="button" class="btn btn-previous">Anterior</button>
				                        <button type="button" class="btn btn-next">Siguiente</button>
				                    </div>
			                    </fieldset>
			                    
			                    <fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Paso 3 / 3</h3>
		                            		<p>Datos Empresariales:</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-twitter"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-facebook">Facebook</label>
				                        	<input type="text" name="form-facebook" placeholder="Facebook..." class="form-facebook form-control" id="form-facebook">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-twitter">Twitter</label>
				                        	<input type="text" name="form-twitter" placeholder="Twitter..." class="form-twitter form-control" id="form-twitter">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-google-plus">Google plus</label>
				                        	<input type="text" name="form-google-plus" placeholder="Google plus..." class="form-google-plus form-control" id="form-google-plus">
				                        </div>
				                        <button type="button" class="btn btn-previous">Previous</button>
				                        <button type="submit" class="btn">Sign me up!</button>
				                    </div>
			                    </fieldset>
		                    
		                    </form>
		                    
                        </div>
                    </div>
                </div>
        <!-- Javascript -->
        <script src="../assets/js/jquery-1.11.1.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery.backstretch.min.js"></script>
        <script src="../assets/js/retina-1.1.0.min.js"></script>
        <script src="../assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

<?php //include("../view_footer.php");?>		
