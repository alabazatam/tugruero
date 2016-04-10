<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container">
	<h1 class="text-center"><label class="label label-default">Operador</label></h1>
	<form class="" action="index.php" method="POST">
		<input type="hidden" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
		<div class="form-group" style="display:none;">
		<label for="">Id.Usuario</label>
		<input autocomplete="off" readonly="readonly" type="text" class="form-control input-sm" id="" placeholder="" name="id_user" value="<?php if(isset($values['id_user'])) echo $values['id_user']?>">
	  </div>
		<?php if(isset($values['action']) and $values['action'] =="add" ):?>
	  <div class="form-group">
		<label for="">Primer Nombre</label>
		<input autocomplete="off" type="text" class="form-control input-sm" id="" placeholder="" name="first_name" value="<?php if(isset($values['first_name'])) echo $values['first_name']?>" required>
	  </div>
	  <div class="form-group">
		<label for="">Segundo Nombre</label>
		<input autocomplete="off" type="text" class="form-control input-sm" id="" placeholder="" name="second_name" value="<?php if(isset($values['second_name'])) echo $values['second_name']?>" >
	  </div>
	  <div class="form-group">
		<label for="">Primer Apellido</label>
		<input autocomplete="off" type="text" class="form-control input-sm" id="" placeholder="" name="first_last_name" value="<?php if(isset($values['first_last_name'])) echo $values['first_last_name']?>" required>
	  </div>
	  <div class="form-group">
		<label for="">Segundo Apellido</label>
		<input autocomplete="off" type="text" class="form-control input-sm" id="" placeholder="" name="second_last_name" value="<?php if(isset($values['second_last_name'])) echo $values['second_last_name']?>">
	  </div>
	 <div class="form-group">
		<label for="">Cedula</label>
		<div class="input-group">
		  <span class="input-group-btn">
			<select name="nationality" class="btn btn-secondary" required>
				<option value="V" selected>V</option>
				<option value="E">E</option>
			</select>
		  </span>
			<input type="text" class="form-control" name="document" value="<?php if(isset($values['document'])) echo $values['document']?>" required>
		  </span>
		</div>
	</div>
	<div class="form-group">
	 
			<label class="radio-inline"><input type="radio" value="M" name="gender" <?php if(isset($values['gender']) and $values['gender'] =='M' ) echo "checked=checked"?>>Masculino</label>
			<label class="radio-inline"><input type="radio" value="F" name="gender" <?php if(isset($values['gender']) and $values['gender'] =='F' ) echo "checked=checked"?>>Femenino</label>
	</div>
	<div class="form-group">
		<label for="">Correo</label>
		<input autocomplete="off" type="text" class="form-control input-sm" id="" placeholder="" name="mail" value="<?php if(isset($values['mail'])) echo $values['mail']?>" required>
	  </div>
	 <div class="form-group">
		<label for="">Telefono</label>
		<input autocomplete="off" type="text" class="form-control input-sm" id="" placeholder="" name="phone" value="<?php if(isset($values['phone'])) echo $values['phone']?>" required>
	  </div>
	  <div class="form-group">
		<label for="">Login</label>
		<input autocomplete="off" type="text" readonly="readonly" class="form-control input-sm" id="" placeholder="" name="login" value="<?php if(isset($values['login'])) echo $values['login']?>">
	  </div>
	  <div class="form-group" style="display:none;">
		<label for="">Password</label>
		<input autocomplete="off" type="password" readonly="readonly" id="" class="form-control input-sm" name="password" value="">
	  </div>
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
	  <div class="form-group">
		<label autocomplete="off" for="">Fecha creado</label>
		<input autocomplete="off"  type="text" readonly="readonly" class="form-control input-sm" id="" placeholder="" name="date_created" value="<?php if(isset($values['date_created'])) echo $values['date_created']?>">
	  </div>
	  <div class="form-group">
		<label for="">Fecha modificado</label>
		<input autocomplete="off" readonly="readonly" type="text" class="form-control input-sm" id="" placeholder="" name="date_updated" value="<?php if(isset($values['date_updated'])) echo $values['date_updated']?>">
	  </div>
		<?php else:?>
		<div class="form-group">
		<div class="form-group">
			<label for="">Login</label>
			<input autocomplete="off" type="text" readonly="readonly" class="form-control input-sm" id="" placeholder="" name="login" value="<?php if(isset($values['login'])) echo $values['login']?>">
		</div>
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
	  <div class="form-group">
		<label for="">Fecha modificado</label>
		<input autocomplete="off" readonly="readonly" type="text" class="form-control input-sm" id="" placeholder="" name="date_updated" value="<?php if(isset($values['date_updated'])) echo $values['date_updated']?>">
	  </div>
	  <a class="btn btn-default"  href="<?php echo full_url."/ap/users/index.php?action=forwardPassword&id_user=".$values['id_user']?>"><i class="fa fa-arrow-right  fa-pull-right fa-border"></i> Reenviar contraseña</a>
		<?php endif;?>
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