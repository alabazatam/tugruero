<?php include('../../view_header.php')?>
<form class="" action="index.php" method="POST">
	<input type="text" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
  <div class="form-group">
    <label for="">Titulo</label>
    <input readonly="readonly" type="text" class="form-control input-sm" id="" placeholder="" name="title" value="<?php if(isset($values['title'])) echo $values['title']?>">
  </div>
  <div class="form-group">
    <label for="">Contenido</label>
    <textarea class="form-control input-sm" id="" placeholder="" name="html"><?php if(isset($values['html'])) echo $values['html']?></textarea>
  </div>
	<a class="btn btn-success"  href="<?php echo full_url."/adm/about/index.php"?>">Regresar</a>
	<button type="submit" class="btn btn-default">Guardar</button>
  
</form>

<?php include('../../view_footer.php')?>