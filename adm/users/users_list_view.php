<?php include('../../view_header.php')?>
<link href="<?php echo full_url;?>/web/css/datatables.css" rel="stylesheet">
<script src="<?php echo full_url;?>/web/js/datatables.js"></script>
<table id="example" class="table table-striped table-bordered table-responsive" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Login</th>
                <th>Password</th>
                <th>Status</th>
		<th>Id rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Login</th>
                <th>Password</th>
                <th>Status</th>
                <th>Id role</th>
		<th>Acciones</th>
            </tr>
        </tfoot>
    </table>
<a class="btn btn-success"  href="<?php echo full_url."/adm/users/index.php?action=new"?>">Agregar</a>
<?php include('../../view_footer.php')?>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ajax": "<?php echo full_url."/adm/users/index.php?action=users_list_json"?>",
        "columns": [
            { "data": "id_user" },
            { "data": "login" },
            { "data": "password" },
            { "data": "status" },
            { "data": "id_role" },
            { "data": "actions" }
        ],
      "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 5 ] }
       ]				
    });
} );

</script>
<script src="<?php echo full_url;?>/web/js/datatables.js"></script>