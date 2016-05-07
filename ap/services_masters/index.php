<?php include("../../autoload.php");?>	
<?php include("validator.php");?>	
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
		case "services_masters_list_json":
			executeServicesMastersListJson($values);	
		break;
		case "forwardPassword":
			executeforwardPassword($values);	
		break;
		default:
			executeIndex($values);
		break;
	}
	function executeIndex($values = null)
	{
	require('services_masters_list_view.php');
	}
	function executeNew($values = null)
	{       
        $values['status'] = '1';
		$values['action'] = 'add';
		require('services_masters_form_view.php');
	}
	function executeSave($values = null)
	{
		$errors = validaFormularioUsers($values);
		if(count($errors)>0)
		{
			$values["errors"] = $errors;
			executeNew($values);
		}
		
		else 
		{
			$password = substr( md5(microtime()), 1, 8);
			$loggin = 'O-'.$values['nationality'].$values['document'];
			$mail = $values['mail'];
			$ServicesMasters = new Users();
			$values['login'] = $loggin;
			$values['password'] = $password;
			$values = $ServicesMasters->saveUserOperator($values);
			$message = "Usuario: ".$loggin." Clave: ".$password;
			$Mail = new Mail();
			$Mail->send(array($mail), array('noreply@frbcomputersgroup.com.ve'),"Asunto",$message);
			$values['message'] = "se ha enviado la clave a su correo electrónico.";
			$values["action"] = "edit";
			executeEdit($values,message_created);die;
		}
	}
	function executeEdit($values = null,$msg = null)
	{
		
		$ServicesMasters = new ServicesMasters();
		$values = $ServicesMasters->getServicesMastersById($values);
		$values['action'] = 'update';
        $values['msg'] = $msg;
		require('services_masters_form_view.php');
	}
	function executeUpdate($values = null)
	{
		
		$ServicesMasters = new Users();
		$ServicesMasters->updateUserOperator($values);		
		executeEdit($values,message_updated);die;
	}	
	function executeServicesMastersListJson($values)
	{
		$ServicesMasters = new ServicesMasters();
		$services_masters_list_json = $ServicesMasters->getServicesMastersList($values);
		$services_masters_list_json_cuenta = $ServicesMasters ->getCountServicesMastersList($values);
		$array_json = array();
		$array_json['recordsTotal'] = $services_masters_list_json_cuenta;
		$array_json['recordsFiltered'] = $services_masters_list_json_cuenta;
		if(count($services_masters_list_json)>0)
		{
			foreach ($services_masters_list_json as $services_masters) 
			{
				
				$idGrua = $services_masters['idgrua'];
				$idSolicitud = $services_masters['idsolicitud'];
				$array_json['data'][] = array(
					"idGrua" => $idGrua,
					"Nombre" => $services_masters['nombre'],
					"Apellido" => $services_masters['apellido'],
					"TimeInicio" => $services_masters['timeinicio'],
					"TimeFin" => $services_masters['timefin'],
					"EstatusCliente" => $services_masters['estatuscliente'],
					"EstatusGrua" => $services_masters['estatusgrua'],
					"Motivo" => $services_masters['motivo'],
					"actions" => 
                                       '<form method="POST" action = "'.full_url.'/ap/services_masters/index.php" >'
                                       .'<input type="hidden" name="action" value="edit">  '
									   .'<input type="hidden" name="idSolicitud" value="'.$idSolicitud.'">  '
                                       .'<input type="hidden" name="idGrua" value="'.$idGrua.'">  '
                                       .'<button class="btn btn-default btn-sm" type="submit"><i class="fa fa-mobile fa-2x  fa-pull-left fa-border"></i></button>'

					);	
			}	
		}else{
			$array_json['recordsTotal'] = 0;
			$array_json['recordsFiltered'] = 0;
			$array_json['data'][0] = array("idGrua"=>null,"Nombre"=>"","Apellido"=>"","TimeInicio"=>"","TimeFin"=>"","EstatusCliente"=>"","EstatusGrua"=>"","Motivo"=>"","actions"=>"");
		}

		echo json_encode($array_json);die;
		
	}
	function executeforwardPassword($values)
	{
		$services_masters = new Users();
		$usuario = $services_masters->getUserById($values);
		$mail = $usuario["mail"];
		$password = substr( md5(microtime()), 1, 8);
		unset($values);
		$values = array("id_user" => $usuario["id_user"],"password" => $password);
		$services_masters->updateUser($values);
		$message = "Clave: ".$password;
		$Mail = new Mail();
		$Mail->send(array($mail), array('noreply@frbcomputersgroup.com.ve'),"Asunto",$message);
		$msg = "se ha enviado la clave al correo electrónico del usuario.";
		executeEdit($values,$msg);
	}