<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container">
	<?php echo $_SESSION['id_company'];?>
	<h1 class="text-center"><label class="label label-default">Grúas</label></h1>
	<table id="example" class="table table-striped table-bordered table-responsive" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>Id</th>
					<th>engine motor</th>
					<th>body serial</th>
					<th>registration plate</th>
					<th>Year vehicle</th>
					<th>make</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Id</th>
					<th>engine motor</th>
					<th>body serial</th>
					<th>registration plate</th>
					<th>Year vehicle</th>
					<th>make</th>
					<th>Acciones</th>
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
        "ajax": "<?php echo full_url."/ap/hoist/index.php?action=hoist_list_json"?>",
		"language": {
                "url": "<?php echo full_url."/web/js/"?>datatables.spanish.lang"
        },
        "columns": [
            { "data": "id" },
            { "data": "engine_serial" },
            { "data": "body_serial" },
            { "data": "registration_plate" },
            { "data": "year_vehicle" },
            { "data": "make" },
            { "data": "actions" }
        ],
      "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 6 ] }
       ]				
    });
} );

</script>
