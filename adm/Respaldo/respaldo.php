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
<?php include('../../view_footer_solicitud.php');?>
<script>
$(document).ready(function(){
    <?php if(isset($values['error']) and $values['error']!=''):?>
			$('.modal-body').html('<div class="alert alert-danger" role="alert"><?php echo $values['error'];?></div>');
			$('#myModal').modal('show');
    <?php endif;?>
    <?php if(isset($values['msg']) and $values['msg']!=''):?>
			$('.modal-body').html('<div class="alert alert-success" role="alert"><?php echo $values['msg'];?></div>');
			$('#myModal').modal('show');
    <?php endif;?>
});  
</script>
