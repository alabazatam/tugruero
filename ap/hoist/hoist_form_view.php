<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container">
	<h1 class="text-center"><label class="label label-default">Grúas</label></h1>
	<form class="" action="index.php" method="POST">
		<input type="hidden" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
	  <div class="form-group">
		<label for="">Id.Grua</label>
		<input readonly="readonly" type="text" class="form-control input-sm" id="" placeholder="" name="id" value="<?php if(isset($values['id'])) echo $values['id']?>">
	  </div>
	  <div class="form-group">
		<label for="">Serial de motor</label>	
		<div class="input-group">
			<input type="text" class="form-control input-sm" id="" placeholder="" name="engine_serial" required  oninvalid="setCustomValidity('Debe colocar el Serial del motor para poder registrarla.')" 
	oninput="setCustomValidity('')" value="<?php if(isset($values['engine_serial'])) echo $values['engine_serial']?>">
		<span class="input-group-addon" id="basic-addon2">(*)</span>
		</div>
	  </div>
	  <div class="form-group">
		<label for="">Serial de carroceria</label>
		<div class="input-group">
			<input type="body_serial" id="" class="form-control input-sm" name="body_serial" required  oninvalid="setCustomValidity('Debe colocar el Serial de la carroceria para poder registrarla.')" 
			oninput="setCustomValidity('')"  value="<?php if(isset($values['body_serial'])) echo $values['body_serial']?>">
			<span class="input-group-addon" id="basic-addon2">(*)</span>
		</div>
	  </div>
	   <div class="form-group">
		<label for="">Color</label>
		<div class="input-group">
			<input type="body_serial" id="" class="form-control input-sm" name="color" required  oninvalid="setCustomValidity('Debe colocar el color para poder registrarla.')" 
			oninput="setCustomValidity('')"  value="<?php if(isset($values['color'])) echo $values['color']?>">
			<span class="input-group-addon" id="basic-addon2">(*)</span>
		</div>
	  </div>
	  <div class="form-group">
		<label for="">Tipo de Grúa</label>
		<div class="input-group">
			<select type="body_serial" id="type_hoist" class="form-control input-sm" name="type_hoist" required  oninvalid="setCustomValidity('Debe colocar el Serial de la carroceria para poder registrarla.')" 
			oninput="setCustomValidity('')">
				<option value="Plataforma" <?php if(isset($values['body_serial'])) echo "selected"?>>Plataforma</option>
				<option value="Gancho" <?php if(isset($values['body_serial'])) echo "selected"?>>Gancho</option>
			</select>
			<span class="input-group-addon" id="basic-addon2">(*)</span>
		</div>
	  </div>
			  <div class="form-group">
		<label for="">Placa</label>
		<div class="input-group">
			<input type="text" id="" class="form-control input-sm" name="registration_plate" value="<?php if(isset($values['registration_plate'])) echo $values['registration_plate']?>"
			   required  oninvalid="setCustomValidity('Debe colocar la Matricula para poder registrarla.')" oninput="setCustomValidity('')"  >
			<span class="input-group-addon" id="basic-addon2">(*)</span>
		</div>
	  </div>
	  <div class="form-group">
		<label for="">Año del Vehiculo</label>
		<div class="input-group">
			<input type="text" id="" class="form-control input-sm" name="year_vehicle" value="<?php if(isset($values['year_vehicle'])) echo $values['year_vehicle']?>"
				   required  oninvalid="setCustomValidity('Debe colocar el Año del vehiculo para poder registrarla.')" oninput="setCustomValidity('')"  >
			<span class="input-group-addon" id="basic-addon2">(*)</span>
		</div>
	  </div>
	 <div class="form-group">
		<label for="">Marca</label>
		<div class="input-group">
			<input type="text" id="" class="form-control input-sm" name="make" value="<?php if(isset($values['make'])) echo $values['make']?>"
				   required  oninvalid="setCustomValidity('Debe colocar la Marca para poder registrarla.')" oninput="setCustomValidity('')"  >
			<span class="input-group-addon" id="basic-addon2">(*)</span>
		</div>
	  </div>
	  <div class="form-group">
		<label for="">Modelo</label>
		<div class="input-group">
			<input type="text" id="" class="form-control input-sm" name="model" value="<?php if(isset($values['model'])) echo $values['model']?>"
				   required  oninvalid="setCustomValidity('Debe colocar la Marca para poder registrarla.')" oninput="setCustomValidity('')"  >
			<span class="input-group-addon" id="basic-addon2">(*)</span>
		</div>
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
		<label for="">Fecha creado</label>
		<input type="text" readonly="readonly" class="form-control input-sm" id="" placeholder="" name="date_created" value="<?php if(isset($values['date_created'])) echo $values['date_created']?>">
	  </div>
	  <div class="form-group">
		<label for="">Fecha modificado</label>
		<input type="text" readonly="readonly" class="form-control input-sm" id="" placeholder="" name="date_updated" value="<?php if(isset($values['date_updated'])) echo $values['date_updated']?>">
	  </div>
		<a class="btn btn-default"  href="<?php echo full_url."/ap/hoist/index.php"?>"><i class="fa fa-arrow-left  fa-pull-left fa-border"></i> Regresar</a>
		<button type="submit" class="btn btn-default"><i class="fa fa-save fa-pull-left fa-border"></i> Guardar</button>
    <?php if(isset($values['msg']) and $values['msg']!=''):?>
        <div class="alert alert-success" role="alert"><?php echo $values['msg'];?></div>
    <?php endif;?>
	</form>
</div>
<?php include('../../view_footer.php')?>