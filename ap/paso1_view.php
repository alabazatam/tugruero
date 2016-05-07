<?php include("../view_header.php");?>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	
							<form role="form" action="registrarse.php" method="post" class="registration-form">
                        		
                        		<fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Paso 1 / 2</h3>
											<p>Identificación de Gruero Master.</p>
		                        		</div>
		                        		<div class="form-top-right">
											<div class="alert alert-warning">
												<h6 class="text-justify">
													El Gruero Master podrá registrar su empresa en la plataforma, al igual que su(s) grua(s) y chofer(es).
												</h6>
											</div>
											<i class="fa fa-user"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
									<input type="hidden" name="action" id="formulario" value="validaFormulario1">
									<div class="form-group">
										<div class="input-group">
										  <span class="input-group-btn">
											<select name="Type_rif" class="btn btn-secondary">
												<option value="V" selected>V</option>
												<option value="E">E</option>
												<option value="J">J</option>
												<option value="P">P</option>
												<option value="G">G</option>
											</select>
										  </span>
											<input type="text" maxlength="11" class="form-control" placeholder="RIF...12345678-9" name="rif" required oninvalid="setCustomValidity('Debe colocar su RIF para poder registrarse.')" 
   oninput="setCustomValidity('')" />
										   <span class="input-group-addon">(*)</span>
										</div>
										</div>
				                        <div class="form-group">
											<div class="input-group">
												<label class="sr-only" for="razonSocial">Nombre o Razón social</label>
												<input type="text" maxlength="100" name="razonSocial" id="registrarse-razon-social" placeholder="Nombre o Raz&oacute;n social..." class="form-last-name form-control" id="form-last-name" required  oninvalid="setCustomValidity('Debe colocar su Razón Social o Nombre para poder registrarse.')" 
	oninput="setCustomValidity('')" />
												 <span class="input-group-addon" id="basic-addon2">(*)</span>
											</div>
				                        </div>
				                        <div class="form-group">
											<div class="input-group">
												<label class="sr-only" for="correo">Correo Electr&oacute;nico</label>
												<input type="text" maxlength="100" name="correo" id="form-correo" placeholder="Correo Electr&oacute;nico..."
													   class="form-about-yourself form-control" id="form-about-yourself" required oninvalid="setCustomValidity('Debe colocar su correo electrónico para poder registrarse.')" 
	oninput="setCustomValidity('')" /></input>
												<span class="input-group-addon">(*)</span>
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
									<button type="submit" name="next-1" value="siguiente" class="btn btn-success btn-lg">Siguiente <i class="fa fa-arrow-right"></i></button>
										<a href="<?php echo full_url;?>/ap/index.php"><button type="button" class="btn btn-danger btn-lg"><i class="fa"></i>Cancelar <i class="fa fa-remove"></i></button></a>
										<div class="form-top-right">
											<h6 class="text-danger">(*) Campos obligatorios.</h6>
										</div>
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