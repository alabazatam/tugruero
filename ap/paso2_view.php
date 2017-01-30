<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo full_url;?>/web/img/favicon.png">
    <title>TU/GRUERO® - Registro 2/2</title>
    <link href="<?php echo full_url;?>/web/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo full_url;?>/web/css/freelancer_app.css" rel="stylesheet">
	<link href="<?php echo full_url;?>/web/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo full_url;?>/web/css/caroussel.css" rel="stylesheet">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
	<link href="<?php echo full_url;?>/web/css/datatables.css" rel="stylesheet">
	<script src="<?php echo full_url;?>/web/js/datatables.js"></script>
 </head>
<body>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 form-box">
							<form role="form" enctype="multipart/form-data" action="registrarse.php" method="post" class="registration-form">
								<input type="text" name="token" value="<?php echo $values['token'];?>" style="display:none;">
			                    <fieldset>
									<input type="text" name="action" id="formulario" value="validaFormulario2" style="display:none;">
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
												<label  for="first_name">Primer nombre</label>
												<div class="input-group">
													<input autocomplete="off" type="text" maxlength="100" name="first_name" value="<?php if(isset($values['first_name'])) echo $values['first_name']?>" id="registrarse-razon-social" placeholder="Primer nombre..." class="form-last-name form-control" id="form-last-name" required  oninvalid="setCustomValidity('Debe colocar su Primer Nombre para poder registrarse.')" 
		oninput="setCustomValidity('')" />
													 <span class="input-group-addon" id="basic-addon2">(*)</span>
												</div>
				                        </div>
										</div>
										<div class="col-sm-6">	
										 <div class="form-group">
											 <label for="second_name">Segundo nombre</label>
				                        	<input type="text" autocomplete="off" maxlength="100" name="second_name" value="<?php if(isset($values['second_name'])) echo $values['second_name']?>" placeholder="Segundo nombre..." class="form-twitter form-control" id="form-twitter">
				                        </div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
											<label  for="first_name">Primer apellido</label>
											<div class="input-group">
												<input type="text" autocomplete="off"  maxlength="100" name="first_lastname" value="<?php if(isset($values['first_lastname'])) echo $values['first_lastname']?>" id="registrarse-razon-social" placeholder="Primer apellido..." class="form-last-name form-control" id="form-last-name" required  oninvalid="setCustomValidity('Debe colocar su Primer Apellido para poder registrarse.')" 
	oninput="setCustomValidity('')" />
												 <span class="input-group-addon" id="basic-addon2">(*)</span>
											</div>
				                        </div>
										</div>
										<div class="col-sm-6">
											<label for="second_lastname">Segundo apellido</label>
											<div class="form-group">
												<input type="text" autocomplete="off" maxlength="100" name="second_lastname" value="<?php if(isset($values['second_lastname'])) echo $values['second_lastname']?>" placeholder="Segundo apellido..." class="form-google-plus form-control" id="form-google-plus" >
											</div>
										</div>
									</div>
				                    <div class="row">
										<div class="col-sm-6">   
											<div class="form-group">
											<label for="">Cédula</label>
											<div class="input-group">
											  <span class="input-group-btn">
												<select name="nationality" id="nationality" class="btn btn-secondary">
													<option value="V" selected>V</option>
													<option value="E">E</option>
												</select>
											  </span>
												<input type="text" autocomplete="off" maxlength="8" class="form-control" value="<?php if(isset($values['cedula'])) echo $values['cedula']?>" placeholder="Cédula..." name="cedula" id="cedula" required  oninvalid="setCustomValidity('Debe colocar su Cédula para poder registrarse.')" oninput="setCustomValidity('')"  onblur="setLogin()"/>
											  </span>
											  <span class="input-group-addon" id="basic-addon2">(*)</span>
											</div>
										</div>
										</div>
										<div class="col-sm-6">  
											<div class="form-group">
											<label for="">Sexo</label>
											<div class="form-group">
											<label class="radio-inline"><input type="radio" value="M" name="gender" checked>Masculino</label>
											<label class="radio-inline"><input type="radio" value="F" name="gender">Femenino</label>
											</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6"> 	
											<div class="form-group">
												<label for="phone">Número Fijo/Número móvil principal</label>
											<div class="input-group">
												<input type="text" autocomplete="off" name="phone" maxlength="11" value="<?php if(isset($values['phone'])) echo $values['phone']?>" id="registrarse-razon-social" placeholder="Número Fijo/Número móvil principal..." class="form-last-name form-control" id="form-last-name" required  oninvalid="setCustomValidity('Debe colocar su Número fijo o Número movil principal para poder registrarse.')" 
	oninput="setCustomValidity('')" />
												 <span class="input-group-addon" id="basic-addon2">(*)</span>
											</div>
				                        </div>
										</div>
										<div class="col-sm-6"> 	
											<label  for="phone1">Número móvil secundario</label>
											<div class="form-group">
												
												<input type="text" autocomplete="off" maxlength="11" name="phone1" value="<?php if(isset($values['phone1'])) echo $values['phone1']?>" placeholder="Número móvil secundario..." class="form-google-plus form-control" id="form-google-plus" oninput="setCustomValidity('')" />
										 </div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											 <div class="form-group">
				                        	<h6 class="label label-default" for="file_1">Suba su cédula de identidad.</h6>
				                        	<input type="file" name="file_1" placeholder="Cedula..." class="form-google-plus form-control" required />
				                        </div>
										</div>
										<div class="col-sm-6"> 	
										</div>
									</div>
										
										
										
									<hr>
									<h3>Datos empresariales</h3>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label  for="company_name">Nombre de empresa o firma personal</label>
												<div class="input-group">
													<input type="text" autocomplete="off" maxlength="100" value="<?php if(isset($values['company_name'])) echo $values['company_name']?>" name="company_name" id="registrarse-razon-social" placeholder="Nombre de empresa o firma personal..." class="form-last-name form-control" id="form-last-name" required  oninvalid="setCustomValidity('Debe colocar el Nombre de empresa o firma personal para poder registrarse.')" 
		oninput="setCustomValidity('')" />
													 <span class="input-group-addon" id="basic-addon2">(*)</span>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label  for="company_name">Rif de empresa o firma personal</label>
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
													<input type="text" autocomplete="off" maxlength="11" class="form-control" placeholder="Rif de empresa o firma personal" value="<?php if(isset($values['rif'])) echo $values['rif']?>" name="rif" required oninvalid="setCustomValidity('Debe colocar el Rif de empresa o firma personal para poder registrarse.')" 
		   oninput="setCustomValidity('')" />
												   <span class="input-group-addon">(*)</span>
												</div>
												</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label for="location">Ubicación de empresa o firma personal</label>
												<div class="input-group">
													
													<input type="text" autocomplete="off" name="location" value="<?php if(isset($values['location'])) echo $values['location']?>" id="registrarse-razon-social" placeholder="Ubicación de empresa o firma personal..." class="form-last-name form-control" id="form-last-name" required  oninvalid="setCustomValidity('Debe colocar la Ubicación de empresa o firma personal para poder registrarse.')" 
		oninput="setCustomValidity('')" />
													 <span class="input-group-addon" id="basic-addon2">(*)</span>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label for="location">Estado</label>
											<div class="input-group">
												<select name="zone_work" class="form-control">
													<option value="">Seleccione</option>
													<option value="AMAZONAS">AMAZONAS</option>
													<option value="ANZOATEGUI">ANZOATEGUI</option>
													<option value="APURE">APURE</option>
													<option value="ARAGUA">ARAGUA</option>
													<option value="BARINAS">BARINAS</option>
													<option value="BOLIVAR">BOLIVAR</option>
													<option value="CARABOBO">CARABOBO</option>
													<option value="COJEDES">COJEDES</option>
													<option value="DELTA AMACURO">DELTA AMACURO</option>
													<option value="DEPENDENCIAS FEDERALES">DEPENDENCIAS FEDERALES</option>
													<option value="DISTRITO CAPITAL">DISTRITO CAPITAL</option>
													<option value="FALCON">FALCON</option>
													<option value="GUARICO">GUARICO</option>
													<option value="LARA">LARA</option>
													<option value="MERIDA">MERIDA</option>
													<option value="MIRANDA">MIRANDA</option>
													<option value="MONAGAS">MONAGAS</option>
													<option value="NUEVA ESPARTA">NUEVA ESPARTA</option>
													<option value="PORTUGUESA">PORTUGUESA</option>
													<option value="SUCRE">SUCRE</option>
													<option value="TACHIRA">TACHIRA</option>
													<option value="TRUJILLO">TRUJILLO</option>
													<option value="VARGAS">VARGAS</option>
													<option value="YARACUY">YARACUY</option>
													<option value="ZULIA">ZULIA</option>
												</select>
											   <span class="input-group-addon">(*)</span>
											</div>
										</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>¿Pertenece al Club Grúas Venezuela?</label>
												<label class="radio-inline"><input type="radio" value="1" name="club_gruas" checked onchange="makeCheckBoxes()">Si</label>
												<label class="radio-inline"><input type="radio" value="0" name="club_gruas" onchange="makeCheckBoxes()">No</label>
											</div>
										</div>
										<div class="col-sm-6">
											<label  for="num_socio">Indique número de socio en el Club de Grúas Venezuela</label>
											<div class="form-group">
												
												<input type="text" autocomplete="off" id="num_socio" name="num_socio" value="<?php if(isset($values['num_socio'])) echo $values['num_socio']?>" placeholder="Indique número de socio en el Club de Grúas Venezuela..." class="form-google-plus form-control" id="form-google-plus" required>
											</div>
										</div>
									</div>
									<div class="row">
										
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<h6 class="label label-default" for="file_2">Suba su RIF jurídico o natural.</h6>
												<div class="input-group">
													<input type="file" name="file_2" placeholder="Seleccione..." class="form-google-plus form-control" required />
													<span class="input-group-addon">(*)</span>
											</div>
				                        </div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<h6 class="label label-default" for="file_3">Suba su Licencia de conducir.</h6>
												<div class="input-group">
													<input type="file" name="file_3" placeholder="Seleccione..." class="form-google-plus form-control" required />
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
													<input type="file" name="file_4" placeholder="Seleccione..." class="form-google-plus form-control" required />
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
													<label  for="placa">Tipo de cuenta</label>
													<div class="input-group">
														<select  name="tipo_cuenta" class="form-control" required>
															<option value="" selected>Seleccione si la cuenta es personal o es de la empresa indicada...</option>
															<option value="Personal" <?php if(isset($values['tipo_cuenta']) && $values['tipo_cuenta'] == "Personal") echo "selected";?>>Personal</option>
															<option value="Empresa" <?php if(isset($values['tipo_cuenta']) && $values['tipo_cuenta'] == "Empresa") echo "selected";?>>Empresa</option>
														</select>
													   <span class="input-group-addon">(*)</span>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label  for="id_bank">Banco</label>
													<div class="input-group">
														<select name="id_bank" class="form-google-plus form-control" required>
															<option value selected>Banco...</option>												
															 <?php foreach($values['bank'] as $bank):?>
																<option value="<?php echo $bank["id"]?>" 
																		<?php if(isset($values['id_bank']) && $values['id_bank'] == $bank["id"]) echo "selected";?>>
																<?php echo $bank["name"]?></option>
															<?php endforeach;?>
														  </select> 
														<span class="input-group-addon" id="basic-addon2">(*)</span>
													</div>
												</div>
											</div>
										</div>
										
										
										<div class="form-group">
											<label  for="NumCuenta">Número de cuenta</label>
											<div class="input-group">
												<input type="text" autocomplete="off" maxlength="20" name="NumCuenta" value="<?php if(isset($values['NumCuenta'])) echo $values['NumCuenta']?>" id="registrarse-razon-social" placeholder="Número de cuenta..." class="form-last-name form-control" id="form-last-name" required  oninvalid="setCustomValidity('Debe colocar su Número De Cuenta para poder registrarse.')" 
	oninput="setCustomValidity('')" />
												 <span class="input-group-addon" id="basic-addon2">(*)</span>
											</div>
				                        </div>
									
									<h3>Datos de inicio de sesión GRUERO MASTER</h3>
										<div class="row">
											<div class="col-sm-6">
												<label for="placa">Usuario</label>
												<div class="form-group">
													<input type="text" autocomplete="off" readonly="true" id="login" name="login" value="<?php if(isset($values['login'])) echo $values['login']?>" id="registrarse-razon-social" placeholder="Usuario..." class="form-last-name form-control" />
												</div>
											</div>
											<div class="col-sm-6">
												<label  for="placa">Indique la placa de su grúa</label>
												<div class="input-group">
													
													<input type="text" autocomplete="off" maxlength="8" id="num_socio" name="placa" value="<?php if(isset($values['placa'])) echo $values['placa']?>" placeholder="Indique la placa de su grúa..." class="form-google-plus form-control" id="form-google-plus" required>
													<span class="input-group-addon" id="basic-addon2">(*)</span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="form-group">
													<label for="placa">Clave</label>
													<div class="input-group">
														<input type="password" name="password" class="form-control" placeholder="Clave" minlength="6" maxlength="12" required oninvalid="setCustomValidity('Debe colocar una Clave para poder registrarse.')" 
		oninput="setCustomValidity('')" />
														<span class="input-group-addon" id="basic-addon2">(*)</span>
													</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label  for="placa">Repita Clave</label>
													<div class="input-group">
														<input type="password" name="repeat_password" class="form-control" placeholder="Repita Clave" minlength="6" maxlength="12" required oninvalid="setCustomValidity('repetir Clave.')" 
		oninput="setCustomValidity('')" />
														<span class="input-group-addon" id="basic-addon2">(*)</span>
													</div>
												</div>
											</div>
										</div>
										
				                        <button type="submit" class="btn btn-success">¡Registrarme!</button>
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

<script>
function makeCheckBoxes()
{
	var ele = document.getElementsByName('club_gruas');
	var i = ele.length;
	for (var j = 0; j < i; j++) {
			if (ele[j].checked) { //index has to be j.
				if(j == 1 && ele[j].checked)
				{
					var x = $('#num_socio');
					x.prop('required',false);
					x.hide();
				}
				else
				{
					var x = $('#num_socio');
					x.prop('required',true);
					x.show();
				}
		}
	}
}
function setLogin()
{
	var usuario = $('#nationality').val() +'-'+ $('#cedula').val();
	$('#login').val(usuario);
}
</script>