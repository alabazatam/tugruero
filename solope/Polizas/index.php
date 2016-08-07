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
		$Polizas = new Polizas();
		$values = $Polizas->savePolizas($values);
		executeEdit($values,message_created);die;
	}
	function executeEdit($values = null,$msg = null)
	{
		
		$Polizas = new Polizas();
		$values = $Polizas->getPolizasById($values);
		$values['action'] = 'update';
                $values['msg'] = $msg;
		require('form_view.php');
	}
	function executeUpdate($values = null)
	{
		$Polizas = new Polizas();
		$Polizas->updatePolizas($values);
		executeEdit($values,message_updated);die;
	}	
	function executeListJson($values)
	{
		$Polizas = new Polizas();
		$list_json = $Polizas ->getPolizasList($values);
		$list_json_cuenta = $Polizas ->getCountPolizasList($values);
		$array_json = array();
		$array_json['recordsTotal'] = $list_json_cuenta;
		$array_json['recordsFiltered'] = $list_json_cuenta;
		if(count($list_json)>0)
		{
			foreach ($list_json as $list) 
			{
				$idPoliza = $list['idPoliza'];
				$array_json['data'][] = array(
					"idPoliza" => $idPoliza,
					"Seguro" => $list['Seguro'],
					"NumPoliza" => $list['NumPoliza'],
					"Placa" => $list['Placa'],
					"Cedula" => $list['Cedula'],
                    "NombreApellido" => $list['Nombre'].' '.$list['Apellido'],
                    "Vencimiento" => $list['Vencimiento'],
					"actions" => 
                                       '<form method="POST" action = "'.full_url.'/solope/Polizas/index.php" >'
                                       .'<input type="hidden" name="action" value="edit">  '
                                       .'<input type="hidden" name="idPoliza" value="'.$idPoliza.'">  '
                                       .'<button class="btn btn-default btn-sm" title="Ver detalle" type="submit"><i class="fa fa-edit  fa-pull-left fa-border"></i></button>'
									   . '<a class="btn btn-default btn-sm" title="Ver servicios" href="'.full_url.'/solope/ServiciosClientes/index.php?idPoliza='.$idPoliza.'"><i class="fa fa-mobile   fa-pull-left fa-border"></i></a>'
									   .'<a class="btn btn-default btn-sm" title="Generar servicio" href="'.full_url.'/solope/solicitud/index.php?action=new&idPoliza='.$idPoliza.'"><i class="fa fa-map-marker   fa-pull-left fa-border"></i></a>'
                                       
										.'</form>'
					);	
			}		
		}else{
			$array_json['recordsTotal'] = 0;
			$array_json['recordsFiltered'] = 0;
			$array_json['data'][0] = array("idPoliza"=>null,"Seguro"=>"","NumPoliza"=>"","Placa"=>"","Cedula"=>"","NombreApellido"=>"","Vencimiento"=>"","actions"=>"");
		}
		echo json_encode($array_json);die;
		
	}