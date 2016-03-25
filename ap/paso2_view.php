<?php include("../view_header.php");?>
<?php if(isset($values['errors']) and count($values['errors'])>0):?>
	<?php foreach($values['errors'] as $errors):?>
		<?php echo $errors;?>
	<?php endforeach;?>
<?php endif;?>
<?php if(!isset($values['token']) and !count($values['token'])>0):?>
	<?php redirect('registro.php');?>
<?php endif;?>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	
							<form role="form" enctype="multipart/form-data" action="registrarse.php" method="post" class="registration-form">
								<input type="hidden" name="token" value="<?php echo $values['token'];?>">
			                    <fieldset>
									<input type="hidden" name="action" id="formulario" value="validaFormulario2">
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Paso 2 / 2</h3>
		                            		<p>Datos Empresariales:</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-user"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="responsable">Responsable de la empresa</label>
											<input type="text" name="responsible_name" placeholder="Responsable de la empresa..." class="form-facebook form-control" id="form-facebook" required>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="file_1">Archivo 1</label>
				                        	<input type="file" name="file_1" placeholder="Seleccione..." class="form-google-plus form-control" required>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="file_2">Archivo 2</label>
				                        	<input type="file" name="file_2" placeholder="Seleccione..." class="form-google-plus form-control" required>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="file_3">Archivo 3</label>
				                        	<input type="file" name="file_3" placeholder="Seleccione..." class="form-google-plus form-control" required>
				                        </div>
				                        <div class="form-group">
											<label class="sr-only" for="name">Nombre del usuario</label>
				                        	<input type="text" name="name" placeholder="Nombre del usuario..." class="form-twitter form-control" id="form-twitter" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="lastname">Apellido del usuario</label>
				                        	<input type="text" name="lastname" placeholder="Apellido del usuario..." class="form-google-plus form-control" id="form-google-plus" required>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="cedula">Cédula</label>
				                        	<input type="text" name="cedula" placeholder="Cedula..." class="form-google-plus form-control" id="form-google-plus" equired>
				                        </div>
				                        <button type="submit" class="btn">Registrarme!</button>
				                    </div>
			                    </fieldset>               
		                    </form>
		                    
                        </div>
                    </div>
                </div>