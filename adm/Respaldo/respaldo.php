<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container">
	<h1 class="text-center">Subir archivo con planes</h1>
	<form class="" action="index.php" method="POST" enctype="multipart/form-data">
	<input type="hidden" autocomplete="off" name='action' value='<?php if(isset($values['action'])) echo $values['action'];?>'>
	<div class="row">
		<div class="col-sm-12 input-sm"> 		
			<input type="file" name="zip">
		</div>		
	</div>
		<button type="submit" class="btn btn-default"><i class="fa fa-save fa-pull-left fa-border"></i> Subir respaldo</button>
	</form>
</div>
