<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
	<h1 class="text-center">Cambio de clave</h1>
	<form class="" action="index.php" method="POST">
		<input type="hidden" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
		<input autocomplete="off" readonly="readonly" type="hidden" class="form-control input-sm" id="" placeholder="" name="id_user" value="<?php echo $_SESSION['id_user']?>">
	  <div class="form-group">
											<div class="input-group">
												<label class="sr-only" for="password">Clave</label>
												<input type="password" name="password" placeholder="Clave actual" class="form-control" id=""/>
												 <span class="input-group-addon" id="basic-addon2">(*)</span>
											</div>
	  </div>
	  <div class="form-group">
											<div class="input-group">
												<label class="sr-only" for="new_password">Clave nueva</label>
												<input type="password" name="new_password" placeholder="Clave nueva" class="form-control" id=""/>
												 <span class="input-group-addon" id="basic-addon2">(*)</span>
											</div>
	  </div>
	  <div class="form-group">
											<div class="input-group">
												<label class="sr-only" for="retype_password">Repetir clave nueva</label>
												<input type="password" name="retype_password" placeholder="Repetir clave nueva" class="form-control" id=""/>
												 <span class="input-group-addon" id="basic-addon2">(*)</span>
											</div>
	  </div>
	  <div class="form-group">
			<label class="text-danger">Campos requeridos (*)</label>
	  </div>
		
		<button type="submit" class="btn btn-default"><i class="fa fa-save fa-pull-left fa-border"></i> Guardar</button>
    <?php if(isset($values['msg']) and $values['msg']!=''):?>
        <div class="alert alert-success" role="alert"><?php echo $values['msg'];?></div>
    <?php endif;?>
    <?php if(isset($values['error']) and $values['error']!=''):?>
        <div class="alert alert-danger" role="alert"><?php echo $values['error'];?></div>
    <?php endif;?>
	</form>
</div>
<?php include('../../view_footer.php')?>