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
			executeIndex($values);	
		break;
		case "add":
			executeAdd($values);	
		break;
		case "precio_plan":
			executePrecioPlan($values);	
		break;
		case "mercadopago":
			executeMercadoPago($values);	
		break;
		case "pago":
			executePago($values);	
		break;
		default:
			executeIndex($values);
		break;
	}
	function executeIndex($values = null,$errors = array())
	{       
        $values['action'] = 'add';
		//print_r($values);die;
		require('form_view.php');
	}
	function executeAdd($values = null,$errors = array())
	{
                $errors = validate($values,$_FILES);
				if(count($errors)>0){
					executeIndex($values,$errors);die;
				}else{
                                        $SolicitudPlan = new SolicitudPlan();
					if($values['MET'] == 'TDC')
					{
                                                $values = $SolicitudPlan->saveSolicitudPlan($values);
						executeMercadoPago($values,$errors);
					}else
					{
                                                
						$values = $SolicitudPlan->saveSolicitudPlan($values);
					}
					die;
				}
                
	}
	function executeMercadoPago($values = null,$errors = array())
	{
      
		require('mercadopago_form.php');
                
	}	
	function executePrecioPlan($values = null,$errors = array())
	{

            $array= array('precio' => '0');
            $Planes = new Planes();
            $Puestos = $values['Puestos'];
            $idPlan = $values['id_plan'];
            $precio_plan = 0;
         
            if($idPlan!=''){
                $precio_plan = ($Planes->getPrecioPlan($idPlan) * 1.10);
               
                
                if(isset($values['RCV']) and $values['RCV']=='SI' ){
                    $precio_plan = ($Planes->getPrecioPlan($idPlan) * 1.10);
                    $precio_rcv = $Planes->getPrecioRCV($Puestos);
                    $precio_plan = $precio_plan + $precio_rcv;
                     
                }
            }

            $precio_plan_formateado = number_format($precio_plan,2,",",".");
            $array= array('precio' => $precio_plan_formateado, 'precio_sin_formato' => $precio_plan);  
            
            
            echo json_encode($array);
            
            
                
	}
        function executePago($values){
          
            $SolicitudPagoDetalle = new SolicitudPagoDetalle();
            $SolicitudPagoDetalle->savePagoDetalle($values);
        }