<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container">
	<h1 class="text-center big_title">Respaldo</h1>
	<form class="" action="index.php" method="POST">
	<input autocomplete="off" type="text" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
	<div class="row">
		<div class="col-sm-12"> 		
			<button type="submit">Generar respaldo</button>
		</div>
		
	</div>
		<a class="btn btn-default"  href="<?php echo full_url."/adm/Polizas/index.php"?>"><i class="fa fa-arrow-left  fa-pull-left fa-border"></i> Regresar</a>
		<button type="submit" class="btn btn-default"><i class="fa fa-save fa-pull-left fa-border"></i> Guardar</button>
	</form>
</div>
<?php include('../../view_footer_solicitud.php')?>
