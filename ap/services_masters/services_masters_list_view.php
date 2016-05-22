<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container">
	<h1 class="text-center big_title">Servicios</h1>
	<table id="example" class="table table-striped table-bordered table-responsive" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>Id.Grúa</th>
					<th>Nombres operador</th>
					<th>Apellidos operador</th>
					<th>Inicio</th>
					<th>Fin</th>
					<th>Status cliente</th>
					<th>Status grúa</th>
					<th>Motivo</th>
					<th>Detalle</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Id.Grúa</th>
					<th>Nombres operador</th>
					<th>Apellidos operador</th>
					<th>Inicio</th>
					<th>Fin</th>
					<th>Status cliente</th>
					<th>Status grúa</th>
					<th>Motivo</th>
					<th>Detalle</th>
				</tr>
			</tfoot>
		</table>
	
</div>
	<?php include('../../view_footer.php')?>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ajax": "<?php echo full_url."/ap/services_masters/index.php?action=services_masters_list_json"?>",
		"language": {
                "url": "<?php echo full_url."/web/js/"?>datatables.spanish.lang"
        },
        "columns": [
            { "data": "idGrua" },
			{ "data": "Nombre" },
			{ "data": "Apellido" },
            { "data": "TimeInicio" },
            { "data": "TimeFin" },
            { "data": "EstatusCliente" },
            { "data": "EstatusGrua" },
            { "data": "Motivo" },
            { "data": "actions" }
        ],
      "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 8] }
       ]				
    });
} );

</script>
