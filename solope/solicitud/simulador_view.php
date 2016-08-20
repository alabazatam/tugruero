


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
		<input autocomplete="off" type="hidden" id='idSolicitud' name='idSolicitud' value='<?php if(isset($values['idSolicitud']))echo $values['idSolicitud'];?>'>
		<input autocomplete="off" type="hidden" id='idPoliza' name='idPoliza' value='<?php if(isset($data['idpoliza']))echo $data['idpoliza'];?>'>
	<?php //if($values['action'] == "add"):?>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel" >
						<div class="panel-heading" role="tab" id="headingOne"  style="background-color: #404040 !important;" >
						  <h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: white !important;">
							  Detalle Cliente
							</a>
						  </h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body" id="parcial_cliente" style="background-color: #ccc !important;">
							
							</div>
						</div>
					  </div>
					  <div class="panel">
						<div class="panel-heading" role="tab" id="headingTwo" style="background-color: #404040 !important;" >
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: white !important;">
							  Detalle Póliza
							</a>
						  </h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body" id="parcial_poliza" style="background-color: #ccc !important;">
						  </div>
						</div>
					  </div>
					  <div class="panel">
						<div class="panel-heading" role="tab" id="headingThree" style="background-color: #404040 !important;" >
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: white !important;">
							  Detalle Solicitud
							</a>
						  </h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						  <div class="panel-body" id="parcial_solicitud" style="background-color: #ccc !important;">
						  </div>
						</div>
					  </div>
					</div>					
					<div class="form-group" >
						<div class="col-sm-12">

							<div class="panel">
								<div class="panel-heading" style="background-color: #404040 !important;" >
									<h3 class="panel-title" style="color: white !important;">Solicitud</h3>
								</div>
								<div class="panel-body" style="background-color: #ccc !important;">
									<!--Parcial de cliente-->

									
									<?php /* Estatus solicitud*/?>
									<label for="estatus">Estatus Solicitud</label>
										<div class="input-group" >
											<input type="hidden" value="<?php echo $data['estatus'];?>" name="estatus" id="estatus">
											<label class="label-warning"><?php echo $data['estatus'];?></label>
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
											<a class="btn btn-danger" onclick="cambiarStatusSolicitud('<?php echo $data['estatus']?>','<?php echo $cambiar_a2;?>',<?php echo $data['idsolicitud']?>);"><i class="fa fa-close"></i> <?php echo $cambiar_a2;?></a>
										<?php endif;?>
									</div>
										
										
									
										
								</div>
							</div>

						</div>
					</div>
		
					<div class="form-group">
						<div class="col-sm-6">
							<div class="panel">
								<div class="panel-heading" style="background-color: #404040;">
									<h3 class="panel-title" style="color: white !important;">Cliente</h3>
								</div>
								<div class="panel-body" style="background-color: #ccc !important;">

									<div class="col-sm-12 ">
									<?php if(isset($data['estatuscliente']) and $data['estatuscliente']!=''):?>
										<label for="estatuscliente">Estatus cliente</label>
										<div class="input-group" >
											<input type="hidden" value="<?php echo $data['estatuscliente'];?>" id="estatuscliente" name="estatuscliente"> 
											<label class="label-warning"><?php echo $data['estatuscliente'];?></label>
										</div>
										<?php if($data['estatusgrua'] == 'Asistiendo' and $data['estatuscliente'] == 'Activo'):?>
												<?php $cambiar_a_cliente = "Asistido";?>
												<?php $cambiar_a2_cliente = "Abandonado";?>
										<?php endif;?>
										<?php if($data['estatusgrua'] == 'Asistiendo' and $data['estatuscliente'] == 'Asistido'):?>
												<?php $cambiar_a_cliente = "Completado";?>
												<?php $cambiar_a2_cliente = "Abandonado";?>
										
										
										<label for="TratoCordial">Trato cordial</label>
										<div class="input-group" >
											<label class="text-muted">1</label> <input type="radio" id="TratoCordial" value="1" name="TratoCordial">
											<label class="text-muted">2</label> <input type="radio" id="TratoCordial" value="2" name="TratoCordial">
											<label class="text-muted">3</label> <input type="radio" id="TratoCordial" value="3" name="TratoCordial">
											<label class="text-muted">4</label> <input type="radio" id="TratoCordial" value="4" name="TratoCordial">
											<label class="text-muted">5</label> <input type="radio" id="TratoCordial" value="5" name="TratoCordial">
										</div>
										
										<label for="Presencia">Presencia</label>
										<div class="input-group" >
											<label class="text-muted">1</label> <input type="radio" id="Presencia" value="1" name="Presencia">
											<label class="text-muted">2</label> <input type="radio" id="Presencia" value="2" name="Presencia">
											<label class="text-muted">3</label> <input type="radio" id="Presencia" value="3" name="Presencia">
											<label class="text-muted">4</label> <input type="radio" id="Presencia" value="4" name="Presencia">
											<label class="text-muted">5</label> <input type="radio" id="Presencia" value="5" name="Presencia">
										</div>
										
										<label for="TratoVehiculo">Trato vehiculo</label>
										<div class="input-group" >
											<label class="text-muted">1</label> <input type="radio" id="TratoVehiculo" value="1" name="TratoVehiculo">
											<label class="text-muted">2</label> <input type="radio" id="TratoVehiculo" value="2" name="TratoVehiculo">
											<label class="text-muted">3</label> <input type="radio" id="TratoVehiculo" value="3" name="TratoVehiculo">
											<label class="text-muted">4</label> <input type="radio" id="TratoVehiculo" value="4" name="TratoVehiculo">
											<label class="text-muted">5</label> <input type="radio" id="TratoVehiculo" value="5" name="TratoVehiculo">
										</div>
										
										<label for="Puntual">Puntual</label>
										<div class="input-group" >
											<label class="text-muted">Si</label> <input type="radio" id="Puntual" value="Si" name="Puntual">
											<label class="text-muted">No</label> <input type="radio" id="Puntual" value="No" name="Puntual">
										</div>
										
										<label for="Observacion">Observación</label>
										<div class="input-group" >
											<textarea class="form-control" id="Observacion" style="max-width: 100%" cols="100"></textarea>
										</div>
										
										<?php endif;?>

												<div class="btn-group" role="group" aria-label="">
													<hr>
													<?php if($cambiar_a_cliente != ""):?>
														<a class="btn btn-default" onclick="cambiarStatusServicioCliente('<?php echo $data['estatuscliente']?>','<?php echo $cambiar_a_cliente;?>',<?php echo $data['idsolicitud']?>);"><i class="fa fa-thumbs-o-up"></i> <?php echo $cambiar_a_cliente;?></a>
													<?php endif;?>
													<?php if($cambiar_a2_cliente != ""):?>

														<a class="btn btn-danger"  onclick="cambiarStatusServicioCliente('<?php echo $data['estatuscliente']?>','<?php echo $cambiar_a2_cliente;?>',<?php echo $data['idsolicitud']?>);"><i class="fa fa-close"></i> <?php echo $cambiar_a2_cliente;?></a>
													<?php endif;?>
												</div>
										<?php endif;?>
									</div>
									<div class="col-sm-12 ">
										<?php if($cambiar_a2_cliente!=''):?>
										<label for="Motivo">Motivo</label>
										<div class="input-group" >
											<textarea id="Motivo" class="form-control input-sm" style="max-width: 100%" cols="100"></textarea>
										</div>
										<?php endif;?>
									</div>
								</div>
							</div>

						</div>
		

						
						
						<div class="col-sm-6">
							<div class="panel">
								<div class="panel-heading" style="background-color: #404040 !important;" >
									<h3 class="panel-title" style="color: white !important;">Gruero</h3>
								</div>
								<div class="panel-body" style="background-color: #ccc !important;">
									
									<!--Parcial de gruero-->
									<div class="col-sm-12 ">
									<div class="col-sm-12 ">
										
									<!--Parcial de gruero-->
									<div id="parcial_gruero">
										
									</div>
									<?php if((!isset($data['estatusgrua']) or $data['estatusgrua']=='') and $data['estatus']=='Localizando'):?>
									<input type="hidden" name="idGrua" id="idGrua" value="">
										<?php if(isset($data['estatus']) and $data['estatus']=='Localizando'):?>
									<a class="btn text-muted" onclick="grueroSelect();" title="Buscar grueros en mapa"><i class="fa fa-map-marker fa-4x" style="color: grey;"></i> Buscar grueros en mapa</a>
									<a class="btn text-muted" onclick="grueroSelectDatatable();" title="Buscar grueros en lista"><i class="fa fa-list-alt fa-4x text-danger" style="color: grey;"> </i> Buscar grueros en lista</a>
									<a type="button" class="btn text-success" name="crearServicio" id="crearServicio" title="Aceptar solicitud"><i class="fa fa-check-circle-o fa-4x text-success"></i> Aceptar Solicitud</a>
											
										<?php endif;?>
									<?php endif;?>
									</div>
									<?php if(isset($data['estatusgrua']) and $data['estatusgrua']!=''):?>
										<label for="estatuscliente">Estatus grua</label>
										<div class="input-group" >
										<input type="hidden" value="<?php echo $data['estatusgrua'];?>" name="estatusgrua"> 
										<label class="label-warning"><?php echo $data['estatusgrua'];?></label><br>

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
												<a class="btn btn-default" onclick="cambiarStatusServicioGrua('<?php echo $data['estatusgrua']?>','<?php echo $cambiar_a_grua;?>',<?php echo $data['idsolicitud']?>);"> <i class="fa fa-thumbs-o-up"></i> <?php echo $cambiar_a_grua;?></a>
												<?php endif;?>
												<?php if($cambiar_a2_grua != ""):?>
													<a class="btn btn-danger" onclick="cambiarStatusServicioGrua('<?php echo $data['estatusgrua']?>','<?php echo $cambiar_a2_grua;?>',<?php echo $data['idsolicitud']?>);"><i class="fa fa-close"></i> <?php echo $cambiar_a2_grua;?></a>
												<?php endif;?>
											</div>
									<?php endif;?>

									</div>
									<div class="col-sm-12 ">
										<?php if($cambiar_a2_grua !=''):?>
										<label for="Motivo">Motivo</label>
										<div class="input-group" >
											<textarea id="Motivo" class="form-control input-sm" style="max-width: 100%" cols="100"></textarea>
										</div>
										<?php endif;?>
									</div>
								
							</div>

						</div>

						
					</div>
<a class="btn btn-default"  href="<?php echo full_url."/solope/solicitud/index.php"?>"><i class="fa fa-arrow-left  fa-pull-left fa-border"></i> Regresar</a>
<?php include('../../view_footer_solicitud.php')?>
<script>
	$(document).ready(function(){
		
		/*Carga de parciales*/
		var idPoliza = $('#idPoliza').val();
		var idSolicitud = $('#idSolicitud').val();
		//carga parcial de cliente
					$.ajax({
					  type: "GET",
					  url: '<?php echo full_url?>/solope/Parciales/index.php',
					  data: { action: "parcial_cliente",idPoliza: idPoliza},
					  success: function(html){
							$('#parcial_cliente').html(html);
					  },
					  //dataType: dataType
					});		
		//carga parcial de Poliza
					$.ajax({
					  type: "GET",
					  url: '<?php echo full_url?>/solope/Parciales/index.php',
					  data: { action: "parcial_poliza",idPoliza: idPoliza},
					  success: function(html){
							$('#parcial_poliza').html(html);
					  },
					  //dataType: dataType
					});			
		//carga parcial de Solicitud
					$.ajax({
					  type: "GET",
					  url: '<?php echo full_url?>/solope/Parciales/index.php',
					  data: { action: "parcial_solicitud",idSolicitud: idSolicitud},
					  success: function(html){
							$('#parcial_solicitud').html(html);
					  },
					  //dataType: dataType
					});		
		$('#crearServicio').click(function(){
				var idSolicitud = $('#idSolicitud').val();
				var idPoliza = $('#idPoliza').val();
				var idGrua = $('#idGrua').val();
				if(idGrua == '')
				{				
					alert('Debe seleccionar un gruero');
					return false;
				}
				
				if(confirm("¿Está seguro(a) de crear el servicio para la solicitud #" + idSolicitud + "?"))
				{
					var arr = {
						idSolicitud: idSolicitud,
						idGrua: idGrua

					};	
					$.ajax({
						type: "POST",
						url: 'http://localhost/grueroapp/tomarSolicitud.php',
						data: JSON.stringify(arr),
						contentType: 'application/json; charset=utf-8',
						async: false,
						success: function(data){
							//alert('ready');
						},
						crossDomain: true,
						dataType: 'json',
						success: function() { 
						}
					});
					$.ajax({
					  type: "POST",
					  url: '<?php echo full_url?>/solope/solicitud/index.php',
					  data: { action: "simulador_view",idSolicitud: idSolicitud},
					  success: function(html){
										$("#content_simulador").html(html);
										$('.modal-body').html('<div class="alert alert-success" role="alert">Servicio aceptado satisfactoriamente</div>');
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
	
	if(confirm("¿Está seguro(a) de cambiar el estatus de la solicitud #" + idSolicitud +" a " + estatus_cambiar + "?")){
		$.ajax({
		  type: "POST",
		  url: '<?php echo full_url?>/solope/solicitud/index.php',
		  data: { action: "simulador_view",idSolicitud: idSolicitud,ind: "1",estatus: estatus, estatus_cambiar: estatus_cambiar},
		  success: function(html){
							$("#content_simulador").html(html);
							$('.modal-body').html('<div class="alert alert-success" role="alert">Estatus cambiado satisfactoriamente</div>');
							$('#myModalMessage').modal('show');
		  }
		});					
	}else{
		return false;
	}

	
}
function cambiarStatusServicioCliente(estatuscliente,estatuscliente_cambiar,idSolicitud){
	
		if(confirm("¿Está seguro(a) de cambiar el estatus del cliente en el servicio #" + idSolicitud +" a " + estatuscliente_cambiar + "?")){
			
			var TratoCordial = $('input:radio[name=TratoCordial]:checked').val();
			var Presencia = $('input:radio[name=Presencia]:checked').val();
			var TratoVehiculo = $('input:radio[name=TratoVehiculo]:checked').val();
			var Puntual = $('input:radio[name=Puntual]:checked').val();
			var Observacion = $("#Observacion").val();
			
			if(estatuscliente_cambiar == 'Asistido')//servicio completado
			{
				var arr = {
					idSolicitud: idSolicitud,
					idGrua: 2,
					Time: '<?php echo date(gmdate('Y-m-d H:i:s', time() - (4 * 3600)));?>',
					
				};	
				$.ajax({
					type: "POST",
					url: 'http://localhost/clienteapp/confirmarAsistencia.php',
					//url: 'http://52.25.178.106/clienteapp/solicitudCliente.php',
					data: JSON.stringify(arr),
					contentType: 'application/json; charset=utf-8',
					async: false,
					success: function(data){
						//alert('ready');
					},
					crossDomain: true,
					dataType: 'json',
				});
			}
			if(estatuscliente_cambiar == 'Completado')//servicio completado
			{
				
				var arr = {
					idSolicitud: idSolicitud,
					TratoCordial: TratoCordial,
					Presencia: Presencia,
					TratoVehiculo: TratoVehiculo,
					Puntual: Puntual,
					Observacion: Observacion
				};
				$.ajax({
					type: "POST",
					url: 'http://localhost/clienteapp/finalizarServicio.php',
					data: JSON.stringify(arr),
					contentType: 'application/json; charset=utf-8',
					async: false,
					success: function(data){
						//alert('ready');
					},
					crossDomain: true,
					dataType: 'json',
				});
				
				
			}//fin completado




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
function grueroSelect(){
			var idSolicitud = $("#idSolicitud").val();
			$('.modal-body').html('');
			$.ajax({
			  type: "POST",
			  url: '<?php echo full_url?>/solope/solicitud/index.php',
			  data: { action: "gruero_select", idSolicitud: idSolicitud},
			  success: function(html){
							
							$('.modal-body').html(html);
							$('#myModal').modal('show');
			  },
			  //dataType: dataType
			});

}
function grueroSelectDatatable(){
			var idSolicitud = $("#idSolicitud").val();
			$('.modal-body').html('');
			$.ajax({
			  type: "POST",
			  url: '<?php echo full_url?>/solope/solicitud/index.php',
			  data: { action: "gruero_select_datatable_index", idSolicitud: idSolicitud},
			  success: function(html){
							
							$('.modal-body').html(html);
							$('#myModal').modal('show');
			  },
			  //dataType: dataType
			});

}
</script>
</div>




