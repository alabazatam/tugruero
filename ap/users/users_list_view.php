<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container">
	<h1 class="text-center big_title">Operadores</h1>
	<table id="example" class="table table-striped table-bordered table-responsive" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>Id</th>
					<th>Usuario</th>
					<th>Placa de grúa</th>
					<th>Estatus</th>
					<th>Disponibilidad en vivo</th>
					<th>Detalle</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Id</th>
					<th>Usuario</th>
					<th>Placa de grúa</th>
					<th>Estatus</th>
					<th>Disponibilidad en vivo</th>
					<th>Detalle</th>
				</tr>
			</tfoot>
		</table>
	<a class="btn btn-default"  href="<?php echo full_url."/ap/users/index.php?action=new"?>"><i class="fa fa-file-o fa-pull-left fa-border"></i>Agregar</a>
</div>
	<?php include('../../view_footer.php')?>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ajax": "<?php echo full_url."/ap/users/index.php?action=usersOperator_list_json&company=".$_SESSION["id_company"]?>",
		"language": {
                "url": "<?php echo full_url."/web/js/"?>datatables.spanish.lang"
        },
        "columns": [
            { "data": "id_user" },
            { "data": "login" },
			{ "data": "placa" },
            { "data": "status" },
			{ "data": "disponibilidad"},
            { "data": "actions" }
        ],
      "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 5 ] }
       ]				
    });
} );

</script>
