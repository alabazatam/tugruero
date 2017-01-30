<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container">
	<h1 class="text-center big_title">Grúas</h1>
	<h2 class="text-center">Agregue su grúa en nuestra plataforma</h2>

	<form class="" enctype="multipart/form-data" action="index.php" method="POST">
		<input type="hidden" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
		<input type="hidden" name="status" id="status" value="1">
		<input type="hidden" class="form-control input-sm" id="" placeholder="" name="engine_serial" value="<?php if(isset($values['engine_serial'])) echo $values['engine_serial']?>">
	<div class="row">
		<div class="col-md-6"> 
			<div class="form-group">
				<label for="">Id.Grua</label>
				<input readonly="readonly" type="hidden" class="form-control input-sm" id="" placeholder="" name="id" value="<?php if(isset($values['id'])) echo $values['id']?>">
			<?php if(isset($values['id'])) echo $values['id']?>
			</div>
		</div>
	</div>
	<?php //if($values['action'] == "add"):?>
	<div class="row">
		<div class="col-md-6"> 
			<div class="form-group">
			<label for="">Serial de carroceria</label>
			<div class="input-group">
				<input type="body_serial" id="" class="form-control input-sm" name="body_serial" maxlength="50" required  oninvalid="setCustomValidity('Debe colocar el Serial de la carroceria para poder registrarla.')" 
				oninput="setCustomValidity('')"  value="<?php if(isset($values['body_serial'])) echo $values['body_serial']?>">
				<span class="input-group-addon" id="basic-addon2">(*)</span>
			</div>
		  </div>
		</div>
		<div class="col-md-6"> 
			<div class="form-group">
				<label for="">Color</label>
				<div class="input-group">
					<input type="body_serial" id="" class="form-control input-sm" name="color" maxlength="20" required  oninvalid="setCustomValidity('Debe colocar el color para poder registrarla.')" 
					oninput="setCustomValidity('')"  value="<?php if(isset($values['color'])) echo $values['color']?>">
					<span class="input-group-addon" id="basic-addon2">(*)</span>
				</div>
			  </div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Tipo de Grúa</label>
				<div class="input-group">
					<select type="body_serial" id="type_hoist" class="form-control input-sm"  name="type_hoist" required  oninvalid="setCustomValidity('Debe colocar el Serial de la carroceria para poder registrarla.')" 
					oninput="setCustomValidity('')">
						<option value="Plataforma criolla" <?php if(isset($values['type_hoist']) && $values['type_hoist']== "Plataforma criolla") echo "selected"?>>Plataforma criolla</option>
						<option value="Plataforma hidráulica" <?php if(isset($values['type_hoist']) && $values['type_hoist']== "Plataforma hidráulica") echo "selected"?>>Plataforma hidráulica</option>
						<option value="Gancho normal" <?php if(isset($values['type_hoist']) && $values['type_hoist']== "Gancho normal") echo "selected"?>>Gancho normal</option>
						<option value="Wheel Lift" <?php if(isset($values['type_hoist']) && $values['type_hoist']== "Wheel Lift") echo "selected"?>>Wheel Lift</option>
						<option value="Gancho con Wheel Lift" <?php if(isset($values['type_hoist']) && $values['type_hoist']== "Gancho con Wheel Lift") echo "selected"?>>Gancho con Wheel Lift</option>
						<option value="Gancho para carga pesada" <?php if(isset($values['type_hoist']) && $values['type_hoist']== "Gancho para carga pesada") echo "selected"?>>Gancho para carga pesada</option>
					</select>
					<span class="input-group-addon" id="basic-addon2">(*)</span>
				</div>
			</div>
		</div>
		<div class="col-md-6"> 
			<div class="form-group">
				<label for="">Placa</label>
				<div class="input-group">
					<input type="text" id="" class="form-control input-sm" name="registration_plate" maxlength="8" value="<?php if(isset($values['registration_plate'])) echo $values['registration_plate']?>"
					   required  oninvalid="setCustomValidity('Debe colocar la Matricula para poder registrarla.')" oninput="setCustomValidity('')"  >
					<span class="input-group-addon" id="basic-addon2">(*)</span>
				</div>
			  </div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			 <div class="form-group">
				<label for="">Año del Vehiculo</label>
				<div class="input-group">
					<input type="text" id="" class="form-control input-sm" name="year_vehicle" maxlength="4" value="<?php if(isset($values['year_vehicle'])) echo $values['year_vehicle']?>"
						   required  oninvalid="setCustomValidity('Debe colocar el Año del vehiculo para poder registrarla.')" oninput="setCustomValidity('')"  >
					<span class="input-group-addon" id="basic-addon2">(*)</span>
				</div>
			  </div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Marca</label>
				<div class="input-group">
					<input type="text" id="" class="form-control input-sm" name="make" maxlength="20" value="<?php if(isset($values['make'])) echo $values['make']?>"
						   required  oninvalid="setCustomValidity('Debe colocar la Marca para poder registrarla.')" oninput="setCustomValidity('')"  >
					<span class="input-group-addon" id="basic-addon2">(*)</span>
				</div>
			  </div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Modelo</label>
				<div class="input-group">
					<input type="text" id="" class="form-control input-sm" maxlength="20" name="model" value="<?php if(isset($values['model'])) echo $values['model']?>"
						   required  oninvalid="setCustomValidity('Debe colocar la Marca para poder registrarla.')" oninput="setCustomValidity('')"  >
					<span class="input-group-addon" id="basic-addon2">(*)</span>
				</div>
			  </div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<h6 class="label label-default" for="file_1">Suba su RCV.</h6>
				<input type="file" name="file_1" placeholder="RCV..." class="form-google-plus form-control" <?php if($values['action'] == "add") echo "required";?>>
			</div>

		</div>
	</div>
	<?php if(isset($values['rcv']) && $values['rcv'] != ""):?>
	<div class="row">
		 <div class="alert alert-success" role="alert">
			<a target="blank" href="<?php echo full_url?>/web/files/hoist/<?php echo $values['rcv'];?>"><i class="fa fa-eye fa-pull-left fa-border"></i> <?php echo $values['rcv'];?></a>
		 </div>
	</div>
	<?php endif;?>
	 <div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Fecha creado</label>
				<input type="hidden" readonly="readonly" class="form-control input-sm" id="" placeholder="" name="date_created" value="<?php if(isset($values['date_created'])) echo $values['date_created']?>">
				<?php if(isset($values['date_created'])) echo $values['date_created']?>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="">Fecha modificado</label>
				<input type="hidden" readonly="readonly" class="form-control input-sm" id="" placeholder="" name="date_updated" value="<?php if(isset($values['date_updated'])) echo $values['date_updated']?>">
				<?php if(isset($values['date_updated'])) echo $values['date_updated']?>
			</div>
		</div>
	</div>
		<a class="btn btn-default"  href="<?php echo full_url."/ap/hoist/index.php"?>"><i class="fa fa-arrow-left  fa-pull-left fa-border"></i> Regresar</a>
		<button type="submit" class="btn btn-default"><i class="fa fa-save fa-pull-left fa-border"></i> Guardar</button>
    <?php if(isset($values['msg']) and $values['msg']!=''):?>
		
		<script>
			$(document).ready(function(){
			$('.modal-body').html('<div class="alert alert-success" role="alert"><?php echo $values['msg'];?></div>');
			$('#myModal').modal('show');	
			});

		
		</script>
        
    <?php endif;?>
	</form>
</div>
<?php include('../../view_footer.php')?>