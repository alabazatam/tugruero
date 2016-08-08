<?php include('../../view_header_app.php')?>
<?php //include('../menu.php')?>

	<h1 class="text-center">Solicitudes/Servicios Activos</h1>
	<table id="example" class="table table-striped table-bordered table-responsive" width="100%" cellspacing="0">
            <thead>
                    <tr>
                        <th>IdSolicitud/Servicio</th>
                        <th>IdPoliza</th>
						<th>Origen</th>
                        <th>Cedula</th>
                        <th>Placa</th>
                        <th>Status solicitud</th>
                        <th>Status cliente</th>
                        <th>Status gruero</th>
						<th>Abierto</th>
                        <th>Inicio</th>						
                        <th>Detalle</th>
                    </tr>
            </thead>
            <tfoot>
                    <tr>
                        <th>IdSolicitud/Servicio</th>
                        <th>IdPoliza</th>
						<th>Origen</th>
                        <th>Cedula</th>
                        <th>Placa</th>
                        <th>Status solicitud</th>
                        <th>Status cliente</th>
                        <th>Status gruero</th>
						<th>Inicio/Solicitud</th>	
                        <th>Inicio/Servicio</th>				
                        <th>Detalle</th>
                    </tr>
            </tfoot>
        </table>
	<?php include('../../view_footer.php')?>
<script>

	
$(document).ready(function() {
	$('#example tfoot th').each( function () {
		var title = $('#example thead th').eq( $(this).index() ).text();
		
		if(title != 'Detalle')
		{
			$(this).html( '<input size="10" class="input-sm" id="column_'+$(this).index()+'" type="text" placeholder="'+title+'" />' );			
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
		"cache": false,
        "ajax": "<?php echo full_url."/solope/solicitud/index.php?action=list_json"?>",
		"language": {
                "url": "<?php echo full_url."/web/js/"?>datatables.spanish.lang"
        },"rowCallback": function( row, data, index ) {
            //alert(data.Status);
            /*if ( data.idSolicitud == "10" ) {
				$(row).css("background-color","red");
				$("td:eq(3)", row).css("background-color","red");
			 
            }*/
            if ( data.EstatusSolicitud == "Desierto" ) {
				$("td:eq(5)", row).css("background-color","red");
			 
            }
            if ( data.StatusDesierto == "1" ) {
				$("td:eq(5)", row).css("background-color","yellow");
			 
            }
        },
        "columns": [
            { "data": "idSolicitud" },
            { "data": "idPoliza" },
			{ "data": "Origen" },
            { "data": "Cedula" },
            { "data": "Placa" },
            { "data": "EstatusSolicitud" },
            { "data": "EstatusCliente" },
            { "data": "EstatusGrua" },
			{ "data": "TimeOpen" },
            { "data": "TimeInicio" },
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
	$('#clear').click(function(){
		table.search( '' ).columns().search( '' ).draw();
	});
setInterval( function () {
    table.ajax.reload();
},10000 );

} );

   
</script>