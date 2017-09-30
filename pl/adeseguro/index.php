<?php include("../../autoload.php");?>	
<?php include("validator.php");?>
<?php include("../security/security.php");?>

<?php $action = "";
setlocale(LC_NUMERIC,"es_ES.UTF8");
if(isset($_REQUEST["action"]) and $_REQUEST["action"]!=""){
	$action = $_REQUEST["action"];
}
$values = $_REQUEST;

$values = array_merge($values,$_FILES);
	switch ($action) {
		case "index":
			executeMercadoPago($values);	
		break;
		case "mercadopago":
			executeMercadoPago($values);	
		break;
		case "pago":
			executePago($values);	
		break;
		case "pagado":
			executePagado($values);	
		break;
		default:
			executeMercadoPago($values);
		break;
	}


	function executeMercadoPago($values = null,$errors = array())
	{
      
		require('mercadopago_form.php');
                
	}	

        function executePago($values){
          
            $SolicitudPlan  = new SolicitudPlan();
            $SolicitudPlan -> updatePagoRealizado($values['idSolicitudPlan'],'S');
            $SolicitudPagoDetalle = new SolicitudPagoDetalle();
            $SolicitudPagoDetalle->savePagoDetalle($values);
            $array = array('OK');
            $Mail = new Mail();
            $Mail->sendMessageMercadopagoVendedor($values);
            echo json_encode($array);die;
        }
        function executeCuadroTugruero($values){
          
            $PDFPagos = new PDFPagos();
            $pdf = $PDFPagos->cuadroTUGRUERO($values);
        }
        function executePagado($values){
          
            require('pagado.php');
        }
