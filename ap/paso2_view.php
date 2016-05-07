<?php include("../view_header.php");?>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 form-box">
                        	
							<form role="form" enctype="multipart/form-data" action="registrarse.php" method="post" class="registration-form">
								<input type="hidden" name="token" value="<?php echo $values['token'];?>">
			                    <fieldset>
									<input type="hidden" name="action" id="formulario" value="validaFormulario2">
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Paso 2 / 2</h3>
											<p>Datos personales, empresariales y bancarios de Gruero Master.</p>
		                        		</div>
		                        		<div class="form-top-right">
											<div class="alert alert-warning">
												<h6 class="text-justify">
													Indique los siguientes datos a continuación para completar su registro en la plataforma. Puede subir los archivos desde la galería de fotos de su teléfono en tal caso de registrarse desde su móvil.
												</h6>
											</div>
		                        		</div>
		                            </div>
									<hr>
									<div class="form-bottom">
									<h3>Datos personales</h3>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<div class="input-group">
													<label class="sr-only" for="first_name">Primer Nombre</label>
													<input type="text" name="first_name" value="<?php if(isset($values['first_name'])) echo $values['first_name']?>" id="registrarse-razon-social" placeholder="Primer nombre..." class="form-last-name form-control" id="form-last-name" required  oninvalid="setCustomValidity('Debe colocar su Primer Nombre para poder registrarse.')" 
		oninput="setCustomValidity('')" />
													 <span class="input-group-addon" id="basic-addon2">(*)</span>
												</div>
				                        </div>
										</div>
										<div class="col-sm-6">	
										 <div class="form-group">
											<label class="sr-only" for="second_name">Segundo nombre</label>
				                        	<input type="text" name="second_name" value="<?php if(isset($values['second_name'])) echo $values['second_name']?>" placeholder="Segundo nombre..." class="form-twitter form-control" id="form-twitter">
				                        </div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
											<div class="input-group">
												<label class="sr-only" for="first_name">Primer apellido</label>
												<input type="text" name="first_lastname" value="<?php if(isset($values['first_lastname'])) echo $values['first_lastname']?>" id="registrarse-razon-social" placeholder="Primer Apellido..." class="form-last-name form-control" id="form-last-name" required  oninvalid="setCustomValidity('Debe colocar su Primer Apellido para poder registrarse.')" 
	oninput="setCustomValidity('')" />
												 <span class="input-group-addon" id="basic-addon2">(*)</span>
											</div>
				                        </div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="sr-only" for="second_lastname">Segundo apellido</label>
												<input type="text" name="second_lastname" value="<?php if(isset($values['second_lastname'])) echo $values['second_lastname']?>" placeholder="Segundo apellido..." class="form-google-plus form-control" id="form-google-plus" >
											</div>
										</div>
									</div>
				                    <div class="row">
										<div class="col-sm-6">   
											<div class="form-group">
											<div class="input-group">
											  <span class="input-group-btn">
												<select name="nationality" class="btn btn-secondary">
													<option value="V" selected>V</option>
													<option value="E">E</option>
												</select>
											  </span>
												<input type="text" class="form-control" value="<?php if(isset($values['cedula'])) echo $values['cedula']?>" placeholder="Cédula..." name="cedula" required  oninvalid="setCustomValidity('Debe colocar su Cédula para poder registrarse.')" 
	oninput="setCustomValidity('')" />
											  </span>
											  <span class="input-group-addon" id="basic-addon2">(*)</span>
											</div>
										</div>
										</div>
										<div class="col-sm-6">  
											<div class="form-group">
											<label class="radio-inline"><input type="radio" value="M" name="gender" checked>Masculino</label>
											<label class="radio-inline"><input type="radio" value="F" name="gender">Femenino</label>
										</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"> 	
											<div class="form-group">
											<div class="input-group">
												<label class="sr-only" for="phone">Número fijo/Número movil principal</label>
												<input type="text" name="phone" value="<?php if(isset($values['phone'])) echo $values['phone']?>" id="registrarse-razon-social" placeholder="Número fijo/Número movil principal..." class="form-last-name form-control" id="form-last-name" required  oninvalid="setCustomValidity('Debe colocar su Número fijo o Número movil principal para poder registrarse.')" 
	oninput="setCustomValidity('')" />
												 <span class="input-group-addon" id="basic-addon2">(*)</span>
											</div>
				                        </div>
										</div>
										<div class="col-sm-6"> 	
											<div class="form-group">
												<label class="sr-only" for="phone1">Número movil secundario</label>
												<input type="text" name="phone1" value="<?php if(isset($values['phone1'])) echo $values['phone1']?>" placeholder="Número movil secundario..." class="form-google-plus form-control" id="form-google-plus" >
										 </div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											 <div class="form-group">
				                        	<h6 class="label label-default" for="file_1">Suba su cédula de identidad.</h6>
				                        	<input type="file" name="file_1" placeholder="Cedula..." class="form-google-plus form-control" required>
				                        </div>
										</div>
										<div class="col-sm-6"> 	
										</div>
									</div>
										
										
										
									<hr>
									<h3>Datos Empresariales</h3>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<div class="input-group">
													<label class="sr-only" for="company_name">Nombre de empresa o firma personal</label>
													<input type="text" value="<?php if(isset($values['company_name'])) echo $values['company_name']?>" name="company_name" id="registrarse-razon-social" placeholder="Nombre de empresa o firma personal..." class="form-last-name form-control" id="form-last-name" required  oninvalid="setCustomValidity('Debe colocar el Nombre de empresa o firma personal para poder registrarse.')" 
		oninput="setCustomValidity('')" />
													 <span class="input-group-addon" id="basic-addon2">(*)</span>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
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
													<input type="text" class="form-control" placeholder="Rif de empresa o firma personal" value="<?php if(isset($values['rif'])) echo $values['rif']?>" name="rif" required oninvalid="setCustomValidity('Debe colocar el Rif de empresa o firma personal para poder registrarse.')" 
		   oninput="setCustomValidity('')" />
												   <span class="input-group-addon">(*)</span>
												</div>
												</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<div class="input-group">
													<label class="sr-only" for="location">Ubicación de empresa o firma personal</label>
													<input type="text" name="location" value="<?php if(isset($values['location'])) echo $values['location']?>" id="registrarse-razon-social" placeholder="Ubicación de empresa o firma personal..." class="form-last-name form-control" id="form-last-name" required  oninvalid="setCustomValidity('Debe colocar la Ubicación de empresa o firma personal para poder registrarse.')" 
		oninput="setCustomValidity('')" />
													 <span class="input-group-addon" id="basic-addon2">(*)</span>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
											<div class="input-group">
												<select name="zone_work" class="form-control">
													<option value="Distrito Capital" selected>Distrito Capital</option>
													<option value="Miranda">Miranda</option>
													<option value="Vargas">Vargas</option>
													<option value="Portuguesa">Portuguesa</option>
													<option value="Guarico">Guarico</option>
												</select>
											   <span class="input-group-addon">(*)</span>
											</div>
										</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>¿Pertenece al club Grúas Venezuela?</label>
												<label class="radio-inline"><input type="radio" value="1" name="club_gruas" checked>Si</label>
												<label class="radio-inline"><input type="radio" value="0" name="club_gruas">No</label>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="sr-only" for="num_socio">Indique número de socio en el Club de Grúas Venezuela</label>
												<input type="text" name="num_socio" value="<?php if(isset($values['num_socio'])) echo $values['num_socio']?>" placeholder="Indique número de socio en el Club de Grúas Venezuela..." class="form-google-plus form-control" id="form-google-plus" >
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<h6 class="label label-default" for="file_2">Suba su RIF jurídico o natural.</h6>
												<div class="input-group">
													<input type="file" name="file_2" placeholder="Seleccione..." class="form-google-plus form-control" required>
													<span class="input-group-addon">(*)</span>
											</div>
				                        </div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<h6 class="label label-default" for="file_3">Suba su Licencia de conducir.</h6>
												<div class="input-group">
													<input type="file" name="file_3" placeholder="Seleccione..." class="form-google-plus form-control" required>
													<span class="input-group-addon">(*)</span>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<h6 class="label label-default" for="file_4">Suba su carnet de circulación.</h6>
												<div class="input-group">
													<input type="file" name="file_4" placeholder="Seleccione..." class="form-google-plus form-control" required>
													<span class="input-group-addon">(*)</span>
												</div>
											</div>
										</div>
									</div>
										
				                        <hr>
										<h3>Datos bancarios</h3>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<div class="input-group">
														<select  name="tipo_cuenta" class="form-control" required>
															<option value="" selected>Seleccione si la cuenta es personal o es de la empresa indicada...</option>
															<option value="Personal">Personal</option>
															<option value="Empresa">Empresa</option>
														</select>
													   <span class="input-group-addon">(*)</span>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<div class="input-group">
														<label class="sr-only" for="id_bank">Banco</label>
														<select name="id_bank" class="form-google-plus form-control" required>
															<option value selected>Banco..</option>												
															 <?php foreach($values['bank'] as $bank):?>
																<option value="<?php echo $bank["id"]?>"><?php echo $bank["name"]?></option>
															<?php endforeach;?>
														  </select> 
														<span class="input-group-addon" id="basic-addon2">(*)</span>
													</div>
												</div>
											</div>
										</div>
										
										
										<div class="form-group">
											<div class="input-group">
												<label class="sr-only" for="NumCuenta">Razón social</label>
												<input type="text" name="NumCuenta" value="<?php if(isset($values['NumCuenta'])) echo $values['NumCuenta']?>" id="registrarse-razon-social" placeholder="Número de cuenta..." class="form-last-name form-control" id="form-last-name" required  oninvalid="setCustomValidity('Debe colocar su Número De Cuenta para poder registrarse.')" 
	oninput="setCustomValidity('')" />
												 <span class="input-group-addon" id="basic-addon2">(*)</span>
											</div>
				                        </div>
				                        <button type="submit" class="btn btn-success">Registrarme!</button>
										<a href="<?php echo full_url;?>/ap/index.php"><button type="button" class="btn btn-danger"><i class="fa"></i> Cancelar</button></a>
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