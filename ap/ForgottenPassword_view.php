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
											<input type="text" autocomplete="off" class="form-control" placeholder="Cedula..." name="document" required oninvalid="setCustomValidity('Debe colocar su Cédula para poder recuperar contraseña.')" 
	oninput="setCustomValidity('')" /></input>
										  <span class="input-group-addon" id="basic-addon2">(*)</span>
										</div>
									</div>
				                        <div class="form-group">
											<div class="input-group">
												<label class="sr-only" for="mail">Correo Electrónico</label>
												<input type="text" autocomplete="off" name="mail" id="registrarse-razon-social" placeholder="Correo Electrónico..." class="form-last-name form-control" id="form-last-name" required oninvalid="setCustomValidity('Debe colocar su Correo Electrónico para poder recuperar contraseña.')" 
		oninput="setCustomValidity('')" /></input>
												<span class="input-group-addon" id="basic-addon2">(*)</span>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<label class="sr-only" for="InitialFirstName">Inical del primer nombre</label>
												<input type="text" autocomplete="off" name="InitialFirstName" id="registrarse-IniciarNombre" placeholder="Inicial del primer nombre..." class="form-last-name form-control" id="form-last-name" maxlength="1" required oninvalid="setCustomValidity('Debe colocar su Inicial del Primer Nombre para poder recuperar contraseña.')" 
		oninput="setCustomValidity('')" /></input>
												<span class="input-group-addon" id="basic-addon2">(*)</span>
											</div>
				                        </div>
										<div class="form-group">
											<div class="input-group">
												<label class="sr-only" for="InitialFirstLastName">Inical del primer apellido</label>
												<input type="text" autocomplete="off" name="InitialFirstLastName" id="registrarse-InicialNombre" placeholder="Inicial del primer apellido..." class="form-last-name form-control" id="form-last-name"maxlength="1" required oninvalid="setCustomValidity('Debe colocar su Inicial del Primer Apellido para poder recuperar contraseña.')" 
		oninput="setCustomValidity('')" /></input>
												<span class="input-group-addon" id="basic-addon2">(*)</span>
											</div>
				                        </div>
										<div class="control-group form-group">
												<div class="controls">
													<?php
														  // show captcha HTML using Securimage::getCaptchaHtml()

														  $options = array();
														  $options['input_name']             = 'ct_captcha'; // change name of input element for form post
														  $options['disable_flash_fallback'] = false; // allow flash fallback
														  $options['show_audio_button'] = false;

														  if (!empty($_SESSION['ctform']['captcha_error'])) {
															// error html to show in captcha output
															$options['error_html'] = $_SESSION['ctform']['captcha_error'];
														  }

														  echo "<div id='captcha_container_1' class='text-center'>\n";
														  echo Securimage::getCaptchaHtml($options);
														  echo "\n</div>\n";
													 ?>




												</div>
											</div>
				                        <button type="submit" name="next-1" value="Recuperar" class="btn btn-next btn-success btn-lg">Recuperar <i class="fa fa-arrow-right"></i></button>
										<a href="<?php echo full_url;?>/ap/index.php"><button type="button" class="btn btn-danger btn-lg">Cancelar <i class="fa fa-remove"></i></button></a>
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
								 <div class="form-top-right">
											<h6 class="text-danger">(*) Campos obligatorios.</h6>
							</div>
                        </div>
                    </div>
                </div>
