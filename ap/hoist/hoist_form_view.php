<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container">
	<h1 class="text-center"><label class="label label-default">Usuarios</label></h1>
	<form class="" action="index.php" method="POST">
		<input type="hidden" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
	  <div class="form-group">
		<label for="">Id.Grua</label>
		<input readonly="readonly" type="text" class="form-control input-sm" id="" placeholder="" name="id" value="<?php if(isset($values['id'])) echo $values['id']?>">
	  </div>
	  <div class="form-group">
		<label for="">Serial de motor</label>
		<input type="text" class="form-control input-sm" id="" placeholder="" name="engine_serial" value="<?php if(isset($values['engine_serial'])) echo $values['engine_serial']?>">
	  </div>
	  <div class="form-group">
		<label for="">Serial de carroceria</label>
		<input type="body_serial" id="" class="form-control input-sm" name="body_serial" value="<?php if(isset($values['body_serial'])) echo $values['body_serial']?>">
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
		<label for="">Matricula</label>
		<input type="text" id="" class="form-control input-sm" name="registration_plate" value="<?php if(isset($values['registration_plate'])) echo $values['registration_plate']?>">
	  </div>
	  <div class="form-group">
		<label for="">Año del Vehiculo</label>
		<input type="text" id="" class="form-control input-sm" name="year_vehicle" value="<?php if(isset($values['year_vehicle'])) echo $values['year_vehicle']?>">
	  </div>
	 <div class="form-group">
		<label for="">Marca</label>
		<input type="text" id="" class="form-control input-sm" name="make" value="<?php if(isset($values['make'])) echo $values['make']?>">
	  </div>
	  <div class="form-group">
		<label for="">Fecha creado</label>
		<input type="text" class="form-control input-sm" id="" placeholder="" name="date_created" value="<?php if(isset($values['date_created'])) echo $values['date_created']?>">
	  </div>
	  <div class="form-group">
		<label for="">Fecha modificado</label>
		<input type="text" class="form-control input-sm" id="" placeholder="" name="date_updated" value="<?php if(isset($values['date_updated'])) echo $values['date_updated']?>">
	  </div>
		<a class="btn btn-default"  href="<?php echo full_url."/ap/hoist/index.php"?>"><i class="fa fa-arrow-left  fa-pull-left fa-border"></i> Regresar</a>
		<button type="submit" class="btn btn-default"><i class="fa fa-save fa-pull-left fa-border"></i> Guardar</button>
    <?php if(isset($values['msg']) and $values['msg']!=''):?>
        <div class="alert alert-success" role="alert"><?php echo $values['msg'];?></div>
    <?php endif;?>
	</form>
</div>
<?php include('../../view_footer.php')?>