<?php include('../../view_header_app.php')?>
<?php include('../menu.php')?>
<div class="container">
	<h1 class="text-center">Servicios del Cliente</h1>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel" >
						<div class="panel-heading" role="tab" id="headingOne"  style="background-color: #404040 !important;" >
						  <h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: white !important;">
							  Detalle Cliente
							</a>
						  </h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body" id="parcial_cliente" style="background-color: #ccc !important;">
							
							</div>
						</div>
					  </div>
					  <div class="panel">
						<div class="panel-heading" role="tab" id="headingTwo" style="background-color: #404040 !important;" >
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: white !important;">
							  Detalle Póliza
							</a>
						  </h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body" id="parcial_poliza" style="background-color: #ccc !important;">
						  </div>
						</div>
					  </div>
					  <div class="panel">
						<div class="panel-heading" role="tab" id="headingThree" style="background-color: #404040 !important;" >
						  <h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: white !important;">
							  Tips de Condicionado
							</a>
						  </h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						  <div class="panel-body" id="parcial_tips" style="background-color: #ccc !important;">
						  </div>
						</div>
					  </div>
					</div>	
	<table id="example" class="table table-striped table-bordered table-responsive" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>IdServicio</th>
					<th>Origen</th>
					<th>Destino</th>
                    <th>Inicio</th>
                    <th>Fin</th>
					<th>Cédula gruero</th>
					<th>Gruero</th>
					<th>Status cliente</th>
					<th>Status gruero</th>		
					<th>Detalle</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>IdServicio</th>
					<th>Origen</th>
					<th>Destino</th>
                    <th>Inicio</th>
                    <th>Fin</th>
					<th>Cédula gruero</th>
					<th>Gruero</th>
					<th>Status cliente</th>
					<th>Status gruero</th>		
					<th>Detalle</th>
				</tr>
			</tfoot>
		</table>
		<a class="btn btn-default"  href="<?php echo full_url."/adm/Polizas/index.php";?>"><i class="fa fa-arrow-left  fa-pull-left fa-border"></i> Regresar</a>

	<!--<a class="btn btn-default"  href="<?php echo full_url."/adm/ServiciosClientes/index.php?action=new"?>"><i class="fa fa-file-o fa-pull-left fa-border"></i>Agregar</a>-->
</div>
	<?php include('../../view_footer_solicitud.php')?>
<script>

	
$(document).ready(function() {
					//parcial cliente
					$.ajax({
					  type: "GET",
					  url: '<?php echo full_url?>/adm/Parciales/index.php',
					  data: { action: "parcial_cliente",idPoliza: <?php echo $values['idPoliza']?>},
					  success: function(html){
							$('#parcial_cliente').html(html);
					  },
					  //dataType: dataType
					});
		//carga parcial de Poliza
					$.ajax({
					  type: "GET",
					  url: '<?php echo full_url?>/adm/Parciales/index.php',
					  data: { action: "parcial_poliza",idPoliza: <?php echo $values['idPoliza']?>},
					  success: function(html){
							$('#parcial_poliza').html(html);
					  },
					  //dataType: dataType
					});	
		//carga parcial de tips
					$.ajax({
					  type: "GET",
					  url: '<?php echo full_url?>/adm/Parciales/index.php',
					  data: { action: "parcial_tips",idPoliza: <?php echo $values['idPoliza']?>},
					  success: function(html){
							$('#parcial_tips').html(html);
					  },
					  //dataType: dataType
					});	
		
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
		"sDom": 'ltrip',
        "serverSide": true,
        "ajax": "<?php echo full_url."/adm/ServiciosClientes/index.php?action=list_json&idPoliza=".$values['idPoliza']?>",
		"language": {
                "url": "<?php echo full_url."/web/js/"?>datatables.spanish.lang"
        },
        "columns": [
            { "data": "idServicio" },
            { "data": "EstadoOrigen" },
            { "data": "Direccion" },
            { "data": "TimeInicio" },
            { "data": "TimeFin" },
            { "data": "Cedula" },
            { "data": "Nombre" },
			{ "data": "EstatusCliente" },
			{ "data": "EstatusGrua" },
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