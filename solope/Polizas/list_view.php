<?php include('../../view_header_app.php')?>
<?php //include('../menu.php')?>
<div class="container">
	<h1 class="text-center big_title">Grúas</h1>
	<h2 class="text-center">Agregue su grúa en nuestra plataforma</h2>
	<table id="example" class="table table-striped table-bordered table-responsive" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>IdPoliza</th>
                                        <th>Seguro</th>
                                        <th>Número póliza</th>
                                        <th>Placa</th>
					<th>Cédula</th>
					<th>Nombre y apellido</th>
					<th>Vencimiento</th>				
					<th>Detalle</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>IdPoliza</th>
                                        <th>Seguro</th>
                                        <th>Número póliza</th>
                                        <th>Placa</th>
					<th>Cédula</th>
					<th>Nombre y apellido</th>
					<th>Vencimiento</th>				
					<th>Detalle</th>
				</tr>
			</tfoot>
		</table>
	<a class="btn btn-default"  href="<?php echo full_url."/ap/hoist/index.php?action=new"?>"><i class="fa fa-file-o fa-pull-left fa-border"></i>Agregar</a>
</div>
	<?php include('../../view_footer.php')?>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ajax": "<?php echo full_url."/solope/Polizas/index.php?action=list_json"?>",
		"language": {
                "url": "<?php echo full_url."/web/js/"?>datatables.spanish.lang"
        },
        "columns": [
            { "data": "idPoliza" },
            { "data": "Seguro" },
            { "data": "NumPoliza" },
            { "data": "Placa" },
            { "data": "Cedula" },
            { "data": "NombreApellido" },
            { "data": "Vencimiento" },
            { "data": "actions" }
        ],
      "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 7 ] }
       ]				
    });
} );

</script>