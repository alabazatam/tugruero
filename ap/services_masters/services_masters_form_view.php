<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
	<h1 class="text-center"><label class="label label-default">Servicios</label></h1>
	<form class="form-horizontal" action="index.php" method="POST">
		<input type="hidden" name='action' value='<?php if(isset($values['action']))echo $values['action'];?>'>
		<div class="form-group" style="display:none;">
		<label for="">Id.grua</label>
		<input autocomplete="off" readonly="readonly" type="text" class="form-control input-sm" id="" placeholder="" name="idGrua" value="<?php if(isset($values['idgrua'])) echo $values['idgrua']?>">
		<input autocomplete="off" readonly="readonly" type="text" class="form-control input-sm" id="" placeholder="" name="idSolicitud" value="<?php if(isset($values['idsolicitud'])) echo $values['idsolicitud']?>">
		</div>
		
	<div class="form-group">
		<div class="col-sm-6">
			<h4><label class="label label-default">Datos del solicitante</label></h4>
			<label for="">Documento de Identificación:</label>
			<?php echo $values['cedula'];?><br>
			<label for="">Nombres y apellidos:</label>
			<?php echo $values['nombre'];?><br>
			<label for="">Celular contacto:</label>
			<?php echo $values['cellcontacto'];?>
		</div>	
		<div class="col-sm-6">
			<h4><label class="label label-default">Datos del vehículo</label></h4>
			<label for="">Placa:</label>
			<?php echo $values['placa'];?><br>
			<label for="">Marca:</label>
			<?php echo $values['marca'];?><br>
			<label for="">Modelo:</label>
			<?php echo $values['modelo'];?><br>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-6">
			<h4><label class="label label-default">Detalle del servicio</label></h4>
			<label for="">Estado de origen:</label>
			<?php echo $values['estadoorigen'];?><br>
			<label for="">Dirección:</label>
			<?php echo $values['direccion'];?><br>
			<label for="">Problema o falla:</label>
			<?php echo $values['queocurre'];?><br>
			<label for="">Situación:</label>
			<?php echo $values['situacion'];?><br>
			<label for="">Estatus:</label>
			<?php echo $values['estatus'];?>
		</div>	
		<div class="col-sm-6">
			<h4><label class="label label-default">Calificación</label></h4>
			<label for="">Trato cordial:</label>
			<?php echo $values['tratocordial'];?><br>
			<label for="">Presencia:</label>
			<?php echo $values['presencia'];?><br>
			<label for="">Trato al vehículo:</label>
			<?php echo $values['tratovehiculo'];?><br>
			<label for="">Puntual:</label>
			<?php echo $values['puntual'];?><br>
		</div>
	</div>
		<a class="btn btn-default"  href="<?php echo full_url."/ap/services_masters/index.php"?>"><i class="fa fa-arrow-left  fa-pull-left fa-border"></i> Regresar</a>
		<button type="submit" class="btn btn-default"><i class="fa fa-save fa-pull-left fa-border"></i> Guardar</button>

	</form>
	
</div>
<?php include('../../view_footer.php')?>