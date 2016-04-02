<?php include("../view_header.php");?>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	
							<form role="form" action="registrarse.php" method="post" class="registration-form">
                        		
                        		<fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Paso 1 / 2</h3>
											<p>Identificaci&oacute;n</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-user"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
									<input type="hidden" name="action" id="formulario" value="validaFormulario1">
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
										  <input type="text" class="form-control" placeholder="Product name">
										  <span class="input-group-btn">
											<select name="Last-number" class="btn btn-secondary">
											  <option value="0" selected>0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
											</select>
										  </span>
										</div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="razonSocial">Razón social</label>
											<input type="text" name="razonSocial" id="registrarse-razon-social" placeholder="Raz&oacute;n social..." class="form-last-name form-control" id="form-last-name" required>
				                        </div>
				                        <div class="form-group">
											<label class="sr-only" for="correo">Correo Electr&oacute;nico</label>
											<input type="text" name="correo" id="form-correo" placeholder="Correo Electr&oacute;nico..."
												   class="form-about-yourself form-control" id="form-about-yourself" required></input>
				                        </div>
				                        <button type="submit" name="next-1" value="siguiente" class="btn btn-next">Siguiente</button>
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