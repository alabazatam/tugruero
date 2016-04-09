<?php include("../view_header.php");?>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	
							<form role="form" action="registrarse.php" method="post" class="registration-form">
                        		
                        		<fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>¿Olvidó contraseña?</h3>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-user"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
									<input type="hidden" name="action" id="formulario" value="valideForgottenPassword">
									<div class="form-group">
										<div class="input-group">
										  <span class="input-group-btn">
											<select name="nationality" class="btn btn-secondary">
												<option value="V" selected>V</option>
												<option value="E">E</option>
											</select>
										  </span>
										  <input type="text" class="form-control" placeholder="Cedula..." name="document">
										</div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="mail">Correo Electrónico</label>
											<input type="text" name="mail" id="registrarse-razon-social" placeholder="Correo Electrónico..." class="form-last-name form-control" id="form-last-name" required>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="InitialFirstName">Inical del primer nombre</label>
											<input type="text" name="InitialFirstName" id="registrarse-IniciarNombre" placeholder="Inicial del primer nombre..." class="form-last-name form-control" id="form-last-name" maxlength="1" required>
				                        </div>
										<div class="form-group">
				                        	<label class="sr-only" for="InitialFirstLastName">Inical del primer apellido</label>
											<input type="text" name="InitialFirstLastName" id="registrarse-InicialNombre" placeholder="Inicial del primer apellido..." class="form-last-name form-control" id="form-last-name"maxlength="1" required>
				                        </div>
				                        <button type="submit" name="next-1" value="Recuperar" class="btn btn-next">Recuperar</button>
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