<div class="bg-primary"><label>Detalle Solicitud</label></div>
<div class="col-sm-12">
	<div class="col-sm-2">
		<label>Id.Solicitud: </label> <?php echo $data['idsolicitud'];?> 
	</div>
	<div class="col-sm-2">
		<label>Estado Origen:</label> <?php echo $data['estadoorigen'];?>
	</div>
	<div class="col-sm-2">
		<label>Destino:</label> <?php echo $data['direccion'];?>
	</div>
	<div class="col-sm-2">
		<label>Monto sin iva:</label> <?php echo $data['monto'];?>
	</div>
	<div class="col-sm-4">
		<label>Contacto:</label> <?php echo $data['cellcontacto'];?>
	</div>
</div>
<div class="col-sm-12">
	<div class="col-sm-2">
		<label>¿Qué ocurre?:</label> <?php echo $data['queocurre'];?>
	</div>
	<div class="col-sm-2">
		<label>Neumáticos:</label> <?php echo $data['neumaticos'];?>
	</div>
	<div class="col-sm-2">
		<label>Situación:</label> <?php echo $data['situacion'];?>
	</div>

	<div class="col-sm-2">
		<label>Información adicional:</label> <?php echo $data['cellcontacto'];?>
	</div>
	<div class="col-sm-2">
		<label>Abierto:</label> <?php echo $data['timeopen'];?>
	</div>
	<div class="col-sm-2">
		<label>Origen:</label> <?php echo $data['proviene'];?>
	</div>
</div>