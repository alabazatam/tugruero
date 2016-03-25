<?php include('../../view_header.php')?>
<form class="" action="index.php" method="POST">
	<input type="text" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
  <div class="form-group">
    <label for="">Id.Usuario</label>
    <input readonly="readonly" type="text" class="form-control input-sm" id="" placeholder="" name="id_user" value="<?php if(isset($values['id_user'])) echo $values['id_user']?>">
  </div>
  <div class="form-group">
    <label for="">Login</label>
    <input type="text" class="form-control input-sm" id="" placeholder="" name="login" value="<?php if(isset($values['login'])) echo $values['login']?>">
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" id="" class="form-control input-sm" name="password" value="">
  </div>
  <div class="form-group">
    <label for="">Status</label>
    <input type="text" id="" class="form-control input-sm" name="status" value="<?php if(isset($values['status'])) echo $values['status']?>">
  </div>
  <div class="form-group">
    <label for="">Rol</label>
    <input type="text" id="" class="form-control input-sm" name="id_role" value="<?php if(isset($values['id_role'])) echo $values['id_role']?>">
  </div>
	<a class="btn btn-success"  href="<?php echo full_url."/adm/users/index.php"?>">Regresar</a>
	<button type="submit" class="btn btn-default">Guardar</button>
  
</form>

<?php include('../../view_footer.php')?>