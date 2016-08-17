<div class="bg-primary"><label>Detalle Póliza</label></div>
<div class="col-sm-12">
	<div class="col-sm-2">
		<label>Seguro: </label> <?php echo $data['Seguro'];?> 
	</div>
	<div class="col-sm-2">
		<label>Id.Póliza: </label> <?php echo $data['idPoliza'];?> 
	</div>
	<div class="col-sm-2">
		<label>Número de Póliza: </label> <?php echo $data['NumPoliza'];?> 
	</div>
	<div class="col-sm-2">
		<label>Vencimiento: </label> <?php echo $data['Vencimiento'];?> 
	</div>
	<div class="col-sm-4">
		<label>Placa:</label> <?php echo $data['Placa'];?>
	</div>

</div>
<div class="col-sm-12 ">
	<div class="col-sm-2">
		<label>Modelo:</label> <?php echo $data['Modelo'];?>
	</div>
	<div class="col-sm-2">
		<label>Tipo:</label> <?php echo $data['Tipo'];?>
	</div>
	<div class="col-sm-2">
		<label>Color:</label> <?php echo $data['Color'];?>
	</div>
	<div class="col-sm-6">
		<label>Año:</label> <?php echo $data['Año'];?>
	</div>
</div>
<div class="col-sm-12">
	<div class="col-sm-2">
		<label>Estado: </label> <?php echo $data['DireccionEDO'];?> 
	</div>
	<div class="col-sm-6">
		<label>Domicilio:</label> <?php echo $data['Domicilio'];?>
	</div>
	<div class="col-sm-6">
		<label>Dirección fiscal:</label> <?php echo $data['DireccionFiscal'];?>
	</div>
	</div>
</div>



<?php //print_r($data);?>