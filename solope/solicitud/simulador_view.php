<?php include('../../view_header_app.php')?>


<div class="container">
	
<div class="container">
	<h1 class="text-center big_title">Pólizas</h1>
	<form class="" enctype="multipart/form-data" action="index.php" method="POST">
		<input autocomplete="off" type="text" name='idSolicitud' value='<?php if(isset($values['idSolicitud']))echo $values['idSolicitud'];?>'>
	<?php //if($values['action'] == "add"):?>
	
		
					<div class="form-group" >
						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Cliente</h3>
								</div>
								<div class="panel-body">
									<!--Parcial de cliente-->
									<?php if(isset($data['estatus']) and $data['estatus']=='Desierto'):?>
										
									<?php endif;?>
									<?php echo $data['estatus'];?>
								</div>
							</div>

						</div>
					</div>
		
					<div class="form-group">
						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Gruero</h3>
								</div>
								<div class="panel-body">
									<!--Parcial de gruero-->
									<?php if(!isset($data['estatusgrua']) or $data['estatusgrua']==''):?>
									<input type="text" name="idGrua" id="idGrua">
									<?php endif;?>
									<?php if(isset($data['estatusgrua']) and $data['estatusgrua']!=''):?>
										<?php echo $data['estatusgrua'];?>
									<?php endif;?>
								</div>
							</div>

						</div>
					</div>
</div>




<?php include('../../view_footer_solicitud.php')?>
