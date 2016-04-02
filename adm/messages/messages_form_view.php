<?php include('../../view_header.php')?>
<?php include('../menu.php')?>
<div class="container">
	<h1 class="text-center"><label class="label label-default">Contáctenos</label></h1>
	<form class="" action="index.php" method="POST">
		<input type="hidden" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
	  <div class="form-group">
		<label for="">Id</label>
		<input readonly="readonly" type="text" class="form-control input-sm" id="" placeholder="" name="id_message" value="<?php if(isset($values['id_message'])) echo $values['id_message']?>">
	  </div>
	  <div class="form-group">
		<label for="">Contacto</label>
		<input readonly="readonly" type="text" class="form-control input-sm" id="" placeholder="" name="names" value="<?php if(isset($values['names'])) echo $values['names']?>">
	  </div>
	  <div class="form-group">
		<label for="">Email</label>
		<input readonly="readonly" type="text" id="" class="form-control input-sm" name="email" value="<?php if(isset($values['email'])) echo $values['email']?>">
	  </div>
	  <div class="form-group">
		<label for="">Teléfono</label>
		<input readonly="readonly" type="text" id="" class="form-control input-sm" name="phone" value="<?php if(isset($values['phone'])) echo $values['phone']?>">
	  </div>
	  <div class="form-group">
		<label for="">Mensaje</label>
		<input readonly="readonly" type="text" id="" class="form-control input-sm" name="message" value="<?php if(isset($values['message'])) echo $values['message']?>">
	  </div>
		<div class="form-group">
		  <label class="label label-success">
			<input  type="radio" name="status" id="status" value="0" <?php if(isset($values['status']) and $values['status'] =='0' ) echo "checked=checked"?>>
			Visualizado
		  </label>
		</div>
		<div class="form-group">
		  <label class="label label-danger">
			<input type="radio" name="status" id="status" value="1" <?php if(isset($values['status']) and $values['status'] =='1' ) echo "checked=checked"?>>
			No visualizado
		  </label>
		</div>	
	  <div class="form-group">
		<label for="">Fecha envio</label>
		<input readonly="readonly" type="text" id="" class="form-control input-sm" name="date_added" value="<?php if(isset($values['date_added'])) echo $values['date_added']?>">
	  </div>
	  <div class="form-group">
		<label for="">Fecha visto</label>
		<input readonly="readonly" type="text" id="" class="form-control input-sm" name="date_updated" value="<?php if(isset($values['date_updated'])) echo $values['date_updated']?>">
	  </div>
		<a class="btn btn-default"  href="<?php echo full_url."/adm/messages/index.php"?>"><i class="fa fa-arrow-left  fa-pull-left fa-border"></i>Regresar</a>
		<button type="submit" class="btn btn-default"><i class="fa fa-save  fa-pull-left fa-border"></i>Guardar</button>

	</form>
</div>
<?php include('../../view_footer.php')?>