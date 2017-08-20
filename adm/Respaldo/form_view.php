<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<?php 
        $Respaldar = new Respaldar();
        $respaldos_list = $Respaldar->listarRespaldos();
    
?>

<div class="container">
	<h1 class="text-center">Generar respaldo</h1>

<table class="table table-hover">
    <thead>
    <tr>
        <th>Archivo</th>
        <th>Fecha</th>  
    </tr>
    <?php if(count($respaldos_list)>0):?>
    <?php foreach($respaldos_list as $list):?>
    <tr>
        <th><a target="_blank" href="<?php echo full_url."/web/files/Respaldos/".$list['Nombre']?>"><?php echo $list['Nombre'];?></a></th>
        <th><?php echo $list['Fecha'];?></th>  
    </tr>   
    <?php endforeach;?>
    <?php endif;?>
    </thead>
</table>
	<form class="" action="index.php" method="POST" id="Form">
	<input autocomplete="off" type="hidden" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
		<button type="submit" class="btn btn-default"><i class="fa fa-file-archive-o fa-pull-left fa-border"></i> Generar respaldo</button>
	</form>
</div>
<?php include('../../view_footer_solicitud.php');?>
<script>
$(document).ready(function(){
    
    $('#Form').on('submit', function(e){
        e.preventDefault();
        if(!confirm("¿Está seguro(a) de generar el archivo de respaldo?")){
            return false;
        }else{
            this.submit();
        }
    });
    <?php if(isset($values['msg']) and $values['msg']!=''):?>
			$('.modal-body').html('<div class="alert alert-success" role="alert"><?php echo $values['msg'];?></div>');
			$('#myModal').modal('show');
    <?php endif;?>
});  
</script>

		<script>
			$(document).ready(function(){
	
			});

		
		</script>
    

