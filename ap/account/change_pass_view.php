<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
	<h1 class="text-center"><label class="label label-default">Cambio de clave</label></h1>
	<form class="" action="index.php" method="POST">
		<input type="hidden" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
		<input autocomplete="off" readonly="readonly" type="hidden" class="form-control input-sm" id="" placeholder="" name="id_user" value="<?php echo $_SESSION['id_user']?>">
	  <div class="form-group">
			<label for="">Clave actual</label>									
			<div class="input-group">
				<input type="password" class="form-control input-sm" id="" placeholder="" name="password" required>
				<span class="input-group-addon" id="basic-addon2">(*)</span>
			</div>											
	  </div>
	  <div class="form-group">
			<label for="">Clave nueva</label>									
			<div class="input-group">
				<input type="password" class="form-control input-sm" id="" placeholder="" name="new_password" required>
				<span class="input-group-addon" id="basic-addon2">(*)</span>
			</div>											
	  </div>
	  <div class="form-group">
			<label for="">Repetir clave nueva</label>									
			<div class="input-group">
				<input type="password" class="form-control input-sm" id="" placeholder="" name="retype_password" required>
				<span class="input-group-addon" id="basic-addon2">(*)</span>
			</div>											
	  </div>

		
		<button type="submit" class="btn btn-default"><i class="fa fa-save fa-pull-left fa-border"></i> Guardar</button>
    <?php if(isset($values['msg']) and $values['msg']!=''):?>
        <div class="alert alert-success" role="alert"><?php echo $values['msg'];?></div>
    <?php endif;?>
    <?php if(isset($values['error']) and $values['error']!=''):?>
        <div class="alert alert-danger" role="alert"><?php echo $values['error'];?></div>
    <?php endif;?>
	</form>
		                    <div class="form-top-right">
											<h6 class="text-danger">(*) Campos obligatorios.</h6>
							</div>
	
</div>
<?php include('../../view_footer.php')?>