<?php include("../../autoload.php");?>	
<?php //include("validator.php");?>
<?php include("../security/security.php");?>

<?php $action = "";

if(isset($_REQUEST["action"]) and $_REQUEST["action"]!=""){
	$action = $_REQUEST["action"];
}

$values = $_REQUEST;
$values = array_merge($values,$_FILES);
	switch ($action) {
		case "index":
			executeIndex($values);	
		break;
		case "new":
			executeNew($values);	
		break;
		case "add":
			executeSave($values);	
		break;
		case "edit":
			executeEdit($values);	
		break;
		case "update":
			executeUpdate($values);	
		break;		
		case "list_json":
			executeListJson($values);	
		break;		
		default:
			executeIndex($values);
		break;
	}
	function executeIndex($values = null)
	{
		require('list_view.php');
	}
	function executeNew($values = null)
	{       
        $values['status'] = '1';
		$values['action'] = 'add';
		require('form_view.php');
	}
	function executeSave($values = null)
	{
		$SolicitudPlan = new SolicitudPlan();
		$values = $SolicitudPlan->saveSolicitudPlan($values);
		executeEdit($values,message_created);die;
	}
	function executeEdit($values = null,$msg = null)
	{
		
		$SolicitudPlan = new SolicitudPlan();
		//print_r($values);die;
		$values = $SolicitudPlan->getSolicitudPlanById($values);
		
		$values['action'] = 'update';
		$values['msg'] = $msg;
		
		require('form_view.php');
	}
	function executeUpdate($values = null)
	{
		$SolicitudPlan = new SolicitudPlan();
		$SolicitudPlan->updateSolicitudPlan($values);
		executeEdit($values,message_updated);die;
	}	
	function executeListJson($values)
	{
		$SolicitudPlan = new SolicitudPlan();
		$list_json = $SolicitudPlan ->getSolicitudPlanList($values);
		$list_json_cuenta = $SolicitudPlan ->getCountSolicitudPlanList($values);
		$array_json = array();
		$array_json['recordsTotal'] = $list_json_cuenta;
		$array_json['recordsFiltered'] = $list_json_cuenta;
		if(count($list_json)>0)
		{
			foreach ($list_json as $list) 
			{
				$idSolicitudPlan = $list['idSolicitudPlan'];
				$status = $list['status'];
				if($status == 'Desactivado')
				{
					$message_status = "<label class='label label-danger'>Desactivado</label>";
				}
				if($status == 'Activo')
				{
					$message_status = "<label class='label label-success'>Activo</label>";
				}
				
				
				
				$array_json['data'][] = array(
					"idSolicitudPlan" => $idSolicitudPlan,
					"Nombres" => $list['Nombres'],
					"Apellidos" => $list['Apellidos'],
                    "Cedula" => $list['Cedula'],
                    "Plan" => $list['NombrePlanTuGruero']." / ".$list['NombrePlanRcv'],
					"Rif" => $list['Rif'],
					"actions" => 
                                       '<form method="POST" action = "'.full_url.'/adm/solicitud_plan/index.php" >'
                                       .'<input type="hidden" name="action" value="edit">  '
                                       .'<input type="hidden" name="idSolicitudPlan" value="'.$idSolicitudPlan.'">  '
                                       .'<button class="btn btn-default btn-sm" title="Ver detalle" type="submit"><i class="fa fa-edit  fa-pull-left fa-border"></i></button>'                                       
										.'</form>'
					);	
			}		
		}else{
			$array_json['recordsTotal'] = 0;
			$array_json['recordsFiltered'] = 0;
			$array_json['data'][0] = array(
				"idSolicitudPlan"=>null,
				"Nombres"=>"",
				"Apellidos"=>"",
                                "Cedula"=>"",
                                "Rif"=>"",
				"actions"=>"");
		}
		echo json_encode($array_json);die;
		
	}
