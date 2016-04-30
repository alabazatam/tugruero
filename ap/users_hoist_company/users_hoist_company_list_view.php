<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container">
	<h1 class="text-center"><label class="label label-default">Choferes asociados a la grúa</label></h1>
	<table id="example" class="table table-striped table-bordered table-responsive" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>Id</th>
					<th>Usuario</th>
					<th>primer nombre</th>
					<th>primer apellido</th>
					<th>Status</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Id</th>
					<th>Usuario</th>
					<th>primer nombre</th>
					<th>primer apellido</th>
					<th>Status</th>
					<th>Acciones</th>
				</tr>
			</tfoot>
		</table>
	<a class="btn btn-default"  href="<?php echo full_url."/ap/users_hoist_company/index.php?action=new&id_hoist=".$values["id_hoist"]?>"><i class="fa fa-file-o fa-pull-left fa-border"></i>Agregar</a>
</div>
	<?php include('../../view_footer.php')?>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ajax": "<?php echo full_url."/ap/users_hoist_company/index.php?action=users_hoist_company_list_json&id_hoist=".$values['id_hoist']?>",
		"language": {
                "url": "<?php echo full_url."/web/js/"?>datatables.spanish.lang"
        },
        "columns": [
            { "data": "id" },
            { "data": "login" },
            { "data": "first_name" },
            { "data": "first_last_name" },
			{ "data": "status" },
            { "data": "actions" }		
        ],
      "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 5 ] }
       ]				
    });
} );

</script>
