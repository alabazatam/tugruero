<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container">
	<h1 class="text-center big_title">Operador</h1>
	<form class="" enctype="multipart/form-data" action="index.php" method="POST">
		<input type="hidden" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
		<div class="form-group" style="display:none;">
		<label for="">Id.Usuario</label>
		<input autocomplete="off" readonly="readonly" type="text" class="form-control input-sm" id="" placeholder="" name="id_user" value="<?php if(isset($values['id_user'])) echo $values['id_user']?>">
	  </div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
			<label for="">Placa de grúa</label>
				<div class="input-group">
					<select id="id_hoist" name="id_hoist" class="form-control input-sm" <?php if($values['action'] == "add") echo "required"?> >
					<?php foreach($values['hoist'] as $operador):?>
					

							<option value="<?php echo $operador["id"]?>" <?php if($operador["id"] == @$values['id_hoist']){ echo "selected='selected'"; $placa = $operador["registration_plate"];}?>><?php echo $operador["registration_plate"]?></option>

					
					
					<?php endforeach;?>
					</select>
					<span class="input-group-addon" id="basic-addon2">(*)</span>
				</div>
			</div>
		</div>
	</div>
	<div class="row" <?php if($values['action'] <> "add") echo "style='display:none;'"?>>
		<div class="col-md-6">
	  <div class="form-group">
		  <label for="">Primer Nombre</label>
			<div class="input-group">
				<input type="text" maxlength="50" autocomplete="off" name="first_name" id="registrarse-razon-social"  class="form-last-name form-control" id="form-last-name" required  oninvalid="setCustomValidity('Debe colocar su Primer Nombre para poder registrarse.')" 
oninput="setCustomValidity('')" value="<?php if(isset($values['first_name'])) echo $values['first_name']?>"/>
				 <span class="input-group-addon" id="basic-addon2">(*)</span>
			</div>
		</div>
		</div>
			<div class="col-md-6">
				<div class="form-group">
				<label for="">Segundo Nombre</label>
				<input autocomplete="off" maxlength="50" type="text" class="form-control input-sm" id="" placeholder="" name="second_name" value="<?php if(isset($values['second_name'])) echo $values['second_name']?>" >
			  </div>
			</div>
		</div>
		<div class="row" <?php if($values['action'] <> "add") echo "style='display:none;'"?>>
			<div class="col-md-6">
				<div class="form-group">
					<label for="">Primer Apellido</label>
					<div class="input-group">
					<input type="text" maxlength="50" name="first_last_name" id="first_last_name"  class="form-last-name form-control" id="form-last-name" required  oninvalid="setCustomValidity('Debe colocar su Primer Apellido para poder registrarse.')" 
					oninput="setCustomValidity('')" value="<?php if(isset($values['first_last_name'])) echo $values['first_last_name']?>"/>
					<span class="input-group-addon" id="basic-addon2">(*)</span>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				 <div class="form-group">
					<label for="">Segundo Apellido</label>
					<input autocomplete="off" maxlength="50" type="text" class="form-control input-sm" id="" placeholder="" name="second_last_name" value="<?php if(isset($values['second_last_name'])) echo $values['second_last_name']?>">
				  </div>
			</div>
		</div>
		<div class="row" <?php if($values['action'] <> "add") echo "style='display:none;'"?>>
			<div class="col-md-6">
				<div class="form-group">
					<label for="">Cedula</label>
					<div class="input-group">
						<span class="input-group-btn">
						<select name="nationality" class="btn btn-secondary" required>
						<option value="V" selected>V</option>
						<option value="E">E</option>
						</select>
						</span>
						<input type="text" maxlength="8" autocomplete="off" class="form-control" name="document" value="<?php if(isset($values['document'])) echo $values['document']?>" required  oninvalid="setCustomValidity('Debe colocar su Cédula para poder registrarse.')" 
						oninput="setCustomValidity('')" />
						</span>
						<span class="input-group-addon" id="basic-addon2">(*)</span>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label class="radio-inline"><input type="radio" value="M" name="gender" <?php if(isset($values['gender']) and $values['gender'] =='M' ) echo "checked=checked"?> checked>Masculino</label>
					<label class="radio-inline"><input type="radio" value="F" name="gender" <?php if(isset($values['gender']) and $values['gender'] =='F' ) echo "checked=checked"?>>Femenino</label>
				</div>
			</div>
		</div>
		<div class="row" <?php if($values['action'] <> "add") echo "style='display:none;'"?>>
			<div class="col-md-6">
				<div class="form-group">
					<label for="">Correo Electrónico</label>
					
					<input type="text" autocomplete="off" maxlength="100" name="mail" id="first_last_name"  class="form-last-name form-control" id="form-last-name" value="<?php if(isset($values['mail'])) echo $values['mail']?>"/>
					
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="">Teléfono</label>
					<div class="input-group">
						<input type="text" autocomplete="off" maxlength="11" name="phone" id=""  class="form-last-name form-control" id="form-last-name" required  oninvalid="setCustomValidity('Debe colocar su Teléfono para poder registrarse.')" 
					oninput="setCustomValidity('')" value="<?php if(isset($values['phone'])) echo $values['phone']?>"/>
					<span class="input-group-addon" id="basic-addon2">(*)</span>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="">Usuario</label>
					<input autocomplete="off" type="text" readonly="readonly" class="form-control input-sm" id="" placeholder="" name="login" value="<?php if(isset($values['login'])) echo $values['login']?>">
				</div>
			</div>
			<div class="col-md-6">
				
				 <div class="form-group">
					 <label for="">Password</label>
					 <div class="input-group">
						 <input autocomplete="off" maxlength="12" type="password" id="" class="form-control input-sm" name="password" value="<?php if(isset($password) and $password!='') echo $password; ?>" 
							   required="" oninvalid="setCustomValidity('Debe colocar la Clave para poder continuar.')" 
							   oninput="setCustomValidity('')"
						/>
						<span class="input-group-addon" id="basic-addon2">(*)</span>
						
					 </div>
				  </div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				 <div class="form-group">
					<label autocomplete="off" for="">Fecha creado</label>
					<input autocomplete="off"  type="text" readonly="readonly" class="form-control input-sm" id="" placeholder="" name="date_created" value="<?php if(isset($values['date_created'])) echo $values['date_created']?>">
				  </div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
				<label for="">Fecha modificado</label>
				<input autocomplete="off" readonly="readonly" type="text" class="form-control input-sm" id="" placeholder="" name="date_updated" value="<?php if(isset($values['date_updated'])) echo $values['date_updated']?>">
			  </div>
			</div>
		</div>
		<?php if($values['action'] == "add"):?>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<h6 class="label label-default" for="file_1">Suba la cédula de identidad.</h6>
					<input type="file" name="file_1" placeholder="Cedula..." class="form-google-plus form-control" <?php if($values['action'] == "add") echo "required";?>>
				</div>
				
			</div>
		</div>
		<?php else:?>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<h6 class="label label-default" for="file_1">Suba la cédula de identidad.</h6>
					<input type="file" name="file_1" placeholder="Cedula..." class="form-google-plus form-control" <?php if($values['action'] == "add") echo "required";?>>
				</div>
				
			</div>
		</div>
		<?php endif;?>
		<?php if(isset($values['document_file']) && $values['document_file'] != ""):?>
		<div class="row">
			 <div class="alert alert-success" role="alert">
                <a target="blank" href="<?php echo full_url?>/web/files/operators/<?php echo $values['document_file'];?>"><i class="fa fa-eye fa-pull-left fa-border"></i> <?php echo $values['document_file'];?></a>
             </div>
		</div>
		<?php endif;?>
		<div class="form-group">
		  <label class="label label-danger">
			<input type="radio" name="status" id="status" value="0" <?php if(isset($values['status']) and $values['status'] =='0' ) echo "checked=checked"?>>
			Desactivar
		  </label>
		</div>
		<div class="form-group">
		  <label class="label label-success">
			<input type="radio" name="status" id="status" value="1" <?php if(isset($values['status']) and $values['status'] =='1' ) echo "checked=checked"?>>
			Activar
		  </label>
		</div>	
		<div class="row">
			<div class="col-md-offset-6 col-md-6">
				<div class="form-group">
					<h6 class="alert alert-info">Datos para inicio de sesión en Aplicación Móvil del Operador</h6>
					<strong>Usuario</strong>: <?php if(isset($values['login'])) echo $values['login']?><br>
					<strong>Clave</strong>: <?php if(isset($password)) echo $password?><br>
					<strong>Placa</strong>: <?php if(isset($placa)) echo $placa?><br>
				</div>
				
			</div>
		</div>
		<a class="btn btn-default"  href="<?php echo full_url."/ap/users/index.php"?>"><i class="fa fa-arrow-left  fa-pull-left fa-border"></i> Regresar</a>
		<button type="submit" class="btn btn-default"><i class="fa fa-save fa-pull-left fa-border"></i> Guardar</button>
    <?php if(isset($values['msg']) and $values['msg']!=''):?>
        <div class="alert alert-success" role="alert"><?php echo $values['msg'];?></div>
    <?php endif;?>
	<?php if(isset($values['errors']) and count($values['errors'])>0):?>
		<?php foreach($values['errors'] as $errors):?>
			<div class="alert alert-danger" role="alert"><?php echo $errors;?></div>
		<?php endforeach;?>
	<?php endif;?>
	</form>
	
</div>
<?php include('../../view_footer.php')?>