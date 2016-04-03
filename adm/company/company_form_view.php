<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container">
	<h1 class="text-center"><label class="label label-default">Compañias</label></h1>
	<form class="" action="index.php" method="POST">
		<input type="hidden" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
	  <div class="form-group">
		<label for="">Id</label>
		<input autocomplete="off" readonly="readonly" type="text" class="form-control input-sm" id="" placeholder="" name="id" value="<?php if(isset($values['id'])) echo $values['id']?>">
	  </div>
	  <div class="form-group">
		<label for="">responsible_name</label>
		<input autocomplete="off" type="text" class="form-control input-sm" id="" placeholder="" name="responsible_name" value="<?php if(isset($values['responsible_name'])) echo $values['responsible_name']?>">
	  </div>
	  <div class="form-group">
		<label for="">responsible_cedula</label>
		<input autocomplete="off" type="text" class="form-control input-sm" id="" placeholder="" name="responsible_cedula" value="<?php if(isset($values['responsible_cedula'])) echo $values['responsible_cedula']?>">
	  </div>
	  <div class="form-group">
		<label for="">NumCuenta</label>
		<input autocomplete="off" type="text" class="form-control input-sm" id="" placeholder="" name="NumCuenta" value="<?php if(isset($values['NumCuenta'])) echo $values['NumCuenta']?>">
	  </div>
	  <div class="form-group">
		<label for="">RIF</label>
		<input autocomplete="off" type="text" class="form-control input-sm" id="" placeholder="" name="rif" value="<?php if(isset($values['rif'])) echo $values['rif']?>">
	  </div>
	  <div class="form-group">
		<label for="">id_bank</label>
		<input autocomplete="off" type="text" class="form-control input-sm" id="" placeholder="" name="id_bank" value="<?php if(isset($values['id_bank'])) echo $values['id_bank']?>">
	  </div>
	  <div class="form-group">
		<label for="">Razon_social</label>
		<input autocomplete="off" type="text" class="form-control input-sm" id="" placeholder="" name="razon_social" value="<?php if(isset($values['razon_social'])) echo $values['razon_social']?>">
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
		<a class="btn btn-default"  href="<?php echo full_url."/adm/company/index.php"?>"><i class="fa fa-arrow-left  fa-pull-left fa-border"></i> Regresar</a>
		<button type="submit" class="btn btn-default"><i class="fa fa-save fa-pull-left fa-border"></i> Guardar</button>
    <?php if(isset($values['msg']) and $values['msg']!=''):?>
        <div class="alert alert-success" role="alert"><?php echo $values['msg'];?></div>
    <?php endif;?>
	</form>
</div>
<?php include('../../view_footer.php')?>