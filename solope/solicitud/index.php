<?php include("../../autoload.php");?>	
<?php //include("validator.php");?>
<?php //include("../security/security.php");?>

<?php $action = "";

if(isset($_REQUEST["action"]) and $_REQUEST["action"]!=""){
	$action = $_REQUEST["action"];
}

$values = $_REQUEST;
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
	function executeListJson($values)
	{
		$Solicitud = new Solicitud();
		$list_json = $Solicitud ->getSolicitudesActivasList($values);
		$list_json_cuenta = $Solicitud ->getCountSolicitudesActivasList($values);
		$array_json = array();
		$array_json['recordsTotal'] = $list_json_cuenta;
		$array_json['recordsFiltered'] = $list_json_cuenta;
		if(count($list_json)>0)
		{
			foreach ($list_json as $list) 
			{
				$idSolicitud = $list['idsolicitud'];
				$array_json['data'][] = array(
					"idSolicitud" => $idSolicitud,
					"idPoliza" => $list['idpoliza'],
					"Cedula" => $list['cedula'],
					"Placa" => $list['placa'],
					"EstatusSolicitud" => $list['estatus'],
                                        "EstatusCliente" => $list['estatuscliente'],
                                        "EstatusGrua" => $list['estatusgrua'],
                                        "TimeInicio" => $list['timeinicio'],
					"actions" => 
                                       '<form method="POST" action = "'.full_url.'/solope/Polizas/index.php" >'
                                       .'<input type="hidden" name="action" value="edit">  '
                                       .'<input type="hidden" name="idSolicitud" value="'.$idSolicitud.'">  '
                                       .'<button class="btn btn-default btn-sm" title="Ver detalle" type="submit"><i class="fa fa-edit  fa-pull-left fa-border"></i></button>'                                       
                                        .'</form>'
					);	
			}		
		}else{
			$array_json['recordsTotal'] = 0;
			$array_json['recordsFiltered'] = 0;
			$array_json['data'][0] = array("idSolicitud"=>null,"idPoliza"=>"","Cedula"=>"","Placa"=>"","EstatusSolicitud"=>"","EstatusCliente"=>"","EstatusGrua"=>"","TimeInicio"=>"","actions"=>"");
		}
		echo json_encode($array_json);die;
		
	}