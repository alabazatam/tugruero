


<?php
//solicitud
$cambiar_a = "";
$cambiar_a2 = "";
//cliente
$cambiar_a_cliente = "";
$cambiar_a2_cliente = "";
//grua
$cambiar_a_grua = "";
$cambiar_a2_grua = "";

?>
<div class="container" id="content_simulador">
	<?php include('../../view_header_app.php')?>
	<h1 class="text-center big_title">Simulador</h1>
	<form class="" enctype="multipart/form-data" action="index.php" method="POST">
		id_solicitud<input autocomplete="off" type="text" id='idSolicitud' name='idSolicitud' value='<?php if(isset($values['idSolicitud']))echo $values['idSolicitud'];?>'>
		id_poliza<input autocomplete="off" type="text" id='idPoliza' name='idPoliza' value='<?php if(isset($data['idpoliza']))echo $data['idpoliza'];?>'>
	<?php //if($values['action'] == "add"):?>
	
		
					<div class="form-group" >
						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Solicitud</h3>
								</div>
								<div class="panel-body">
									<!--Parcial de cliente-->
									
									<?php /* Estatus solicitud*/?>
									<label for="estatus">Estatus Solicitud</label>
										<div class="input-group" >
											<input type="text" value="<?php echo $data['estatus'];?>" name="estatus" id="estatus">
										</div>
									<?php if(isset($data['estatus']) and $data['estatus']=='Desierto'):?>
										<?php $cambiar_a = "Localizando"?>
										<?php $cambiar_a2 = "Cancelado"?>
									<?php endif;?>
									<?php if(isset($data['estatus']) and $data['estatus']=='Localizando'):?>
										<?php $cambiar_a = ""?>
										<?php $cambiar_a2 = "Cancelado"?>
									<?php endif;?>
									<?php if(isset($data['estatus']) and $data['estatus']=='Cancelado'):?>
										<?php $cambiar_a = "Localizando"?>
										<?php $cambiar_a2 = ""?>
									<?php endif;?>
									<?php if(isset($data['estatus']) and $data['estatus']=='Asignado'):?>
										<?php $cambiar_a = ""?>
										<?php $cambiar_a2 = ""?>
									<?php endif;?>
									<div class="btn-group" role="group" aria-label="">
										<?php if($cambiar_a != ""):?>
											<input type="button" class="btn btn-default" value="<?php echo $cambiar_a;?>" onclick="cambiarStatusSolicitud('<?php echo $data['estatus']?>','<?php echo $cambiar_a;?>',<?php echo $data['idsolicitud']?>);">
										<?php endif;?>
										<?php if($cambiar_a2 != ""):?>
											<input type="button" class="btn btn-danger" value="<?php echo $cambiar_a2;?>" onclick="cambiarStatusSolicitud('<?php echo $data['estatus']?>','<?php echo $cambiar_a2;?>',<?php echo $data['idsolicitud']?>);">
										<?php endif;?>
									</div>
										
										
									
										
								</div>
							</div>

						</div>
					</div>
		
					<div class="form-group">
						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Servicio</h3>
								</div>
								<div class="panel-body">
									<div class="col-sm-12 ">
									<!--Parcial de gruero-->
									<?php if((!isset($data['estatusgrua']) or $data['estatusgrua']=='') and $data['estatus']=='Localizando'):?>
									<input type="text" name="idGrua" id="idGrua" value="2">
										<?php if(isset($data['estatus']) and $data['estatus']=='Localizando'):?>
											<input type="button" class="btn btn-default" name="crearServicio" id="crearServicio"  value="Crear servicio">
										<?php endif;?>
									<?php endif;?>
									</div>
									<div class="col-sm-12 ">
									<?php if(isset($data['estatuscliente']) and $data['estatuscliente']!=''):?>
										<label for="estatuscliente">Estatus cliente</label>
										<div class="input-group" >
											<input type="text" value="<?php echo $data['estatuscliente'];?>" id="estatuscliente" name="estatuscliente"> 
										</div>
										<?php if($data['estatusgrua'] == 'Asistiendo' and $data['estatuscliente'] == 'Activo'):?>
												<?php $cambiar_a_cliente = "Completado";?>
												<?php $cambiar_a2_cliente = "Abandonado";?>
											<?php endif;?>

												<div class="btn-group" role="group" aria-label="">
													<?php if($cambiar_a_cliente != ""):?>
														<input type="button" class="btn btn-default" value="<?php echo $cambiar_a_cliente;?>" onclick="cambiarStatusServicioCliente('<?php echo $data['estatuscliente']?>','<?php echo $cambiar_a_cliente;?>',<?php echo $data['idsolicitud']?>);">
													<?php endif;?>
													<?php if($cambiar_a2_cliente != ""):?>

														<input type="button" class="btn btn-danger" value="<?php echo $cambiar_a2_cliente;?>" onclick="cambiarStatusServicioCliente('<?php echo $data['estatuscliente']?>','<?php echo $cambiar_a2_cliente;?>',<?php echo $data['idsolicitud']?>);">
													<?php endif;?>
												</div>
										<?php endif;?>
									</div>
									<!-- estatus grua-->
									<div class="col-sm-12 ">

									<?php if(isset($data['estatusgrua']) and $data['estatusgrua']!=''):?>
										<label for="estatuscliente">Estatus grua</label>
										<div class="input-group" >
										<input type="text" value="<?php echo $data['estatusgrua'];?>" name="estatusgrua"> 
										</div>
										<?php if($data['estatusgrua'] == 'Activo'):?>
											<?php $cambiar_a_grua = "Asistiendo";?>
											<?php $cambiar_a2_grua = "Abandonado";?>
										<?php endif;?>
										<?php if($data['estatusgrua'] == 'Asistiendo' and $data['estatuscliente'] == 'Completado'):?>
											<?php $cambiar_a_grua = "Completado";?>
											<?php $cambiar_a2_grua = "";?>
										<?php endif;?>										
											<div class="btn-group" role="group" aria-label="">
												<?php if($cambiar_a_grua != ""):?>
													<input type="button" class="btn btn-default" value="<?php echo $cambiar_a_grua;?>" onclick="cambiarStatusServicioGrua('<?php echo $data['estatusgrua']?>','<?php echo $cambiar_a_grua;?>',<?php echo $data['idsolicitud']?>);">
												<?php endif;?>
												<?php if($cambiar_a2_grua != ""):?>
													<input type="button" class="btn btn-danger" value="<?php echo $cambiar_a2_grua;?>" onclick="cambiarStatusServicioGrua('<?php echo $data['estatusgrua']?>','<?php echo $cambiar_a2_grua;?>',<?php echo $data['idsolicitud']?>);">
												<?php endif;?>
											</div>
									<?php endif;?>

									</div>
									<div class="col-sm-12 ">
										<?php if($cambiar_a2_grua !='' or $cambiar_a2_cliente!=''):?>
										<label for="Motivo">Motivo</label>
										<div class="input-group" >
											<textarea id="Motivo" class="form-control input-sm"></textarea>
										</div>
										<?php endif;?>

									</div>
											
											
											
											
											
											
											
											
											
								</div>
							</div>

						</div>
		<a class="btn btn-default"  href="<?php echo full_url."/solope/solicitud/index.php"?>"><i class="fa fa-arrow-left  fa-pull-left fa-border"></i> Regresar</a>

					</div>
<?php include('../../view_footer_solicitud.php')?>
<script>
	$(document).ready(function(){
		
		$('#crearServicio').click(function(){
				var idSolicitud = $('#idSolicitud').val();
				var idPoliza = $('#idPoliza').val();
				var idGrua = $('#idGrua').val();
				//alert(idSolicitud + ' poliza' +idPoliza + 'grua ' + idGrua);
				//return false;
				if(confirm("¿Está seguro(a) de crear el servicio para la solicitud #" + idSolicitud + "?"))
				{
					$.ajax({
					  type: "POST",
					  url: '<?php echo full_url?>/solope/solicitud/index.php',
					  data: { action: "simulador_view",idSolicitud: idSolicitud,ind: "2",idPoliza: idPoliza,idGrua: idGrua},
					  success: function(html){
							$("#content_simulador").html(html);
							$('.modal-body').html('<div class="alert alert-success" role="alert">Servicio creado satisfactoriamente</div>');
							$('#myModalMessage').modal('show');
					  },
					  //dataType: dataType
					});	
				}else
				{
					return false;
				}
			
		});
		
		
	});

function cambiarStatusSolicitud(estatus,estatus_cambiar,idSolicitud){
	
	//alert(estatus_cambiar);
		//$("#content_simulador").html('');
	if(confirm("¿Está seguro(a) de cambiar el estatus de la solicitud #" + idSolicitud +" a " + estatus_cambiar + "?")){
		$.ajax({
		  type: "POST",
		  url: '<?php echo full_url?>/solope/solicitud/index.php',
		  data: { action: "simulador_view",idSolicitud: idSolicitud,ind: "1",estatus: estatus, estatus_cambiar: estatus_cambiar},
		  success: function(html){
							$("#content_simulador").html(html);
							$('.modal-body').html('<div class="alert alert-success" role="alert">Estatus cambiado satisfactoriamente</div>');
							$('#myModalMessage').modal('show');
		  },
		  //dataType: dataType
		});					
	}else{
		return false;
	}

	
}
function cambiarStatusServicioCliente(estatuscliente,estatuscliente_cambiar,idSolicitud){
	
	//alert(estatus_cambiar);
		//$("#content_simulador").html('');
		if(confirm("¿Está seguro(a) de cambiar el estatus del cliente en el servicio #" + idSolicitud +" a " + estatuscliente_cambiar + "?")){
			$.ajax({
			  type: "POST",
			  url: '<?php echo full_url?>/solope/solicitud/index.php',
			  data: { action: "simulador_view",idSolicitud: idSolicitud,ind: "1",estatuscliente: estatuscliente, estatuscliente_cambiar: estatuscliente_cambiar},
			  success: function(html){
							$("#content_simulador").html(html);
							$('.modal-body').html('<div class="alert alert-success" role="alert">Estatus cambiado satisfactoriamente</div>');
							$('#myModalMessage').modal('show');
			  },
			  //dataType: dataType
			});
		}else
		{
			return false;
		}
	
}
function cambiarStatusServicioGrua(estatusgrua,estatusgrua_cambiar,idSolicitud){
	
	//alert(estatus_cambiar);
		//$("#content_simulador").html('');
		if(confirm("¿Está seguro(a) de cambiar el estatus del Gruero en el servicio #" + idSolicitud +" a " + estatusgrua_cambiar + "?")){
			$.ajax({
			  type: "POST",
			  url: '<?php echo full_url?>/solope/solicitud/index.php',
			  data: { action: "simulador_view",idSolicitud: idSolicitud,ind: "1",estatusgrua: estatusgrua, estatusgrua_cambiar: estatusgrua_cambiar},
			  success: function(html){
							$("#content_simulador").html(html);
							$('.modal-body').html('<div class="alert alert-success" role="alert">Estatus cambiado satisfactoriamente</div>');
							$('#myModalMessage').modal('show');
			  },
			  //dataType: dataType
			});
		}else{
			return false;
		}
	
}

</script>
</div>




