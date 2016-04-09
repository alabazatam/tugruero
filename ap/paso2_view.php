<?php include("../view_header.php");?>
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
											<label class="sr-only" for="first_name">Primer nombre</label>
				                        	<input type="text" name="first_name" placeholder="Primer nombre..." class="form-twitter form-control" id="form-twitter" required>
				                        </div>
										 <div class="form-group">
											<label class="sr-only" for="second_name">Segundo nombre</label>
				                        	<input type="text" name="second_name" placeholder="Segundo nombre..." class="form-twitter form-control" id="form-twitter">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="first_lastname">Primer apellido</label>
				                        	<input type="text" name="first_lastname" placeholder="Primer apellido..." class="form-google-plus form-control" id="form-google-plus" required>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="second_lastname">Segundo apellido</label>
				                        	<input type="text" name="second_lastname" placeholder="Segundo apellido..." class="form-google-plus form-control" id="form-google-plus" >
				                        </div>
										<div class="form-group">
											<div class="input-group">
											  <span class="input-group-btn">
												<select name="nationality" class="btn btn-secondary">
													<option value="V" selected>V</option>
													<option value="E">E</option>
												</select>
											  </span>
												<input type="text" class="form-control" placeholder="Cedula..." name="cedula" required="">
											  </span>
											</div>
										</div>
										<div class="form-group">
											<label class="radio-inline"><input type="radio" value="M" name="gender">Masculino</label>
											<label class="radio-inline"><input type="radio" value="F" name="gender">Femenino</label>
										</div>
										<div class="form-group">
				                        	<label class="sr-only" for="phone">Telefono</label>
				                        	<input type="text" name="phone" placeholder="Telefono..." class="form-google-plus form-control" id="form-google-plus" required>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="type_bank">Banco</label>
				                        	 <select name="type_bank" class="form-google-plus form-control" required>
												<option value selected>Banco..</option>												
												 <?php foreach($values['bank'] as $bank):?>
													<option value="<?php echo $bank["id"]?>"><?php echo $bank["name"]?></option>
												<?php endforeach;?>
											  </select> 
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="NumCuenta">Número de Cuenta</label>
				                        	<input type="text" name="NumCuenta" placeholder="Número de Cuenta..." class="form-google-plus form-control" id="form-google-plus" required>
				                        </div>
				                        <button type="submit" class="btn">Registrarme!</button>
										<?php if(isset($values['message']) and count($values['message'])>0):?>
											<?php foreach($values['message'] as $message):?>
												<div class="alert alert-success" role="alert"><?php echo $message;?></div>
											<?php endforeach;?>
										<?php endif;?>
										
										<?php if(isset($values['errors']) and count($values['errors'])>0):?>
											<?php foreach($values['errors'] as $errors):?>
												<div class="alert alert-danger" role="alert"><?php echo $errors;?></div>
											<?php endforeach;?>
										<?php endif;?>
				                    </div>
			                    </fieldset>               
		                    </form>
		                    
                        </div>
                    </div>
                </div>