<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container">
	<h1 class="text-center"><label class="label label-default">Usuarios compañias</label></h1>
	<form class="" action="index.php" method="POST">
		<input type="hidden" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
	  <div class="form-group" style="display:none;">
		<label for="">id_user_hoist_company</label>
		<input autocomplete="off" hidden="readonly" type="text" class="form-control input-sm" id="id_user_hoist_company" placeholder="" name="id_user_hoist_company" value="<?php if(isset($values['id_user_hoist_company'])) echo $values['id_user_hoist_company']?>">
	  </div>
	  <div class="form-group">
		<label for="">Usuario</label>
		<div class="input-group">
			<select id="id_user" name="id_user" class="form-control input-sm" required>
			<option value='<?php if(isset($values['id_user']))echo $values['id_user']; else echo "Seleccione...";?>'><?php if(isset($values['login']))echo $values['login']; else echo "Seleccione...";?></option>
			 <?php foreach($values['operadores'] as $operador) 
				{
					echo '<option value="'.$operador["id_user"].'">'.$operador['login'].'</option>';
				}
			?>
		</select>
		<span class="input-group-addon" id="basic-addon2">(*)</span>
		</div>
	  </div>
	  <div class="form-group">
		<label for="">Clave de usuario</label>
		<div class="input-group">
			<input autocomplete="off" type="password" id="" class="form-control input-sm" name="password" value="" required>
			<span class="input-group-addon" id="basic-addon2">(*)</span>
		</div>
	  </div>
	  <div class="form-group" style="display:none;">
		<label for="">id_company</label>
		<input autocomplete="off" readonly="readonly" type="text" class="form-control input-sm" id="" placeholder="" name="id_company" value="<?php echo $_SESSION['id_company'];?>">
	  </div>
		<div class="form-group" style="display:none;">
		<label for="">id_hoist</label>
		<input autocomplete="off" readonly="readonly" type="text" class="form-control input-sm" id="" placeholder="" name="id_hoist" value="<?php if(isset($values['id_hoist']))echo $values['id_hoist'];?>">
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
		<a class="btn btn-default"  href="<?php echo full_url."/ap/users_hoist_company/index.php?id_hoist=".$values["id_hoist"]?>"><i class="fa fa-arrow-left  fa-pull-left fa-border"></i> Regresar</a>
		<button type="submit" class="btn btn-default"><i class="fa fa-save fa-pull-left fa-border"></i> Guardar</button>
    <?php if(isset($values['msg']) and $values['msg']!=''):?>
        <div class="alert alert-success" role="alert"><?php echo $values['msg'];?></div>
    <?php endif;?>
	</form>
</div>
<?php include('../../view_footer.php')?>