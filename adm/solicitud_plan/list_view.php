<?php include('../../view_header_app.php')?>
<?php //include('../menu.php')?>
<div class="">
	<h1 class="text-center big_title">Solicitudes de planes</h1>
	<table id="example" class="table table-striped table-bordered table-responsive" width="100%" cellspacing="0">
			<thead>
				<tr>
                                    <th>IdSolicitudPlan</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>	
                                    <th>Cédula</th>	
                                    <th>Rif</th>
                                    <th>Plan</th>
                                    <th>Precio total</th>
                                    <th>Método de pago</th>
                                    <th>Estatus</th>
                                    <th>Fecha Solicitud</th>
                                    <th>Detalle</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th><input id="idSolicitudPlan" name="idSolicitudPlan" type="text"></th>
                                        <th><input id="Nombres" name="Nombres" type="text"></th>
                                        <th><input id="Apellidos" name="Apellidos" type="text"></th>
                                        <th><input id="Cedula" name="Cedula" type="text"></th>
                                        <th><input id="Rif" name="Rif" type="text"></th>	
                                        <th><input id="Plan" name="Plan" type="text"></th>		
                                        <th><input id="PrecioTotal" name="PrecioTotal" type="text"></th>
                                        <th><input id="TipoPago" name="TipoPago" type="text"></th>		
					<th><input id="Estatus" name="Estatus" type="text"></th>		
					<th><input id="FechaSolicitud" name="FechaSolicitud" type="text"></th>		
                                        <th>Detalle</th>
				</tr>
			</tfoot>
		</table>
	<a class="btn btn-default"  href="<?php echo full_url."/adm/solicitud_plan/index.php?action=new"?>"><i class="fa fa-file-o fa-pull-left fa-border"></i>Agregar</a>
</div>
	<?php include('../../view_footer_solicitud.php')?>
<script>

	
$(document).ready(function() {
	
	$('#example tfoot th').each( function () {
		var title = $('#example thead th').eq( $(this).index() ).text();
		
		if(title != 'Detalle')
		{
			$(this).html( '<input size="10" class="input-sm filtros" id="column_'+$(this).index()+'" type="text" placeholder="'+title+'" />' );			
		}
		if(title == 'Detalle')
		{
			$(this).html( '<button id="clear">Limpiar</button>' );	
		}

	} );

	
    var table = $('#example').DataTable({
        "scrollX": true,
        "processing": true,
        "serverSide": true,
		 "sDom": 'ltrip',
        "ajax": "<?php echo full_url."/adm/solicitud_plan/index.php?action=list_json"?>",
		"language": {
                "url": "<?php echo full_url."/web/js/"?>datatables.spanish.lang"
        },
        "order": [[ 8, "desc" ]],
        "columns": [
            { "data": "idSolicitudPlan" },
            { "data": "Nombres" },
            { "data": "Apellidos" },
            { "data": "Cedula" },
            { "data": "Rif" },
            { "data": "Plan" },
            { "data": "PrecioTotal" },
            { "data": "TipoPago" },
            { "data": "Estatus" },
            { "data": "FechaSolicitud" },
            { "data": "actions" }
        ],
      "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ 9 ] }
       ]				
    });

$('#column_0').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(0)).search($(this).val()).draw();
    }
});
$('#column_1').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(1)).search($(this).val()).draw();
    }
});
$('#column_2').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(2)).search($(this).val()).draw();
    }
});
$('#column_3').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(3)).search($(this).val()).draw();
    }
});
$('#column_4').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(4)).search($(this).val()).draw();
    }
});
$('#column_5').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(5)).search($(this).val()).draw();
    }
});
$('#column_6').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(6)).search($(this).val()).draw();
    }
});
$('#column_7').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(7)).search($(this).val()).draw();
    }
});
$('#column_8').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(8)).search($(this).val()).draw();
    }
});
$('#column_9').on ('keypress', function(e){
    if(e.which == 13) {
        table.column(table.column(9)).search($(this).val()).draw();
    }
});
	$('#clear').click(function(){
		table.search( '' ).columns().search( '' ).draw();
		$('.filtros').val('');
	});


} );

</script>