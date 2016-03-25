<?php include('../view_header.php')?>
<table id="example" class="table table-striped table-bordered table-responsive" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Login</th>
                <th>Password</th>
                <th>Status</th>
                <th>Id role</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Login</th>
                <th>Password</th>
                <th>Status</th>
                <th>Id role</th>
            </tr>
        </tfoot>
    </table>
<?php include('../view_footer.php')?>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "<?php echo full_url."/adm/users.php?action=users_list_json"?>",
        "columns": [
            { "data": "id_user" },
            { "data": "login" },
            { "data": "password" },
            { "data": "status" },
            { "data": "id_role" }
        ]		
    });
} );

</script>
