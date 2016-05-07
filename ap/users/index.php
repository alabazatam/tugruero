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
		case "usersOperator_list_json":
			executeUserListJson($values);	
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
	require('users_list_view.php');
	}
	function executeNew($values = null)
	{       
		$userhoistcompany = new UsersHoistCompany();
		$values['hoist'] = $userhoistcompany->getHoistByUserWithout($values);
        $values['status'] = '1';
		$values['action'] = 'add';
		require('users_form_view.php');
	}
	function executeSave($values = null)
	{
		$errors = validaFormularioUser($values);
		if(count($errors)>0)
		{
			$values["errors"] = $errors;
			executeNew($values);
		}
		
		else 
		{
			$Users = new Users();
			$loggin = 'O-'.$values['nationality'].$values['document'];
			$values['login'] = $loggin;
			$values = $Users->saveUserOperator($values);
			$idHoist= array ("id" => $values['id_hoist']);
			$hoist = new Hoist();
			$dataHoist =  $hoist->getHoistById($idHoist);
			$dateGrueros = array('idGrua' => $values['id_user'],
								'Nombre' => $values['first_name'].' '.$values['second_name'],
								'Apellido' => $values['first_last_name'].' '.$values['second_last_name'],
								'Placa' => $dataHoist['registration_plate'],
								'Modelo' => $dataHoist['type_hoist'],
								'Color' => $dataHoist['color'],
								'Celular' => $values['phone'],
								'Cedula' => $values['nationality'].'-'.$values['document'],
								'Clave' => $values['password'],
								'Condicion' => "Activo",
								'NumServicios' => "0",
								'TotalTrato' => "0",
								'TotalPresencia' => "0",
								'TotalVehiculo' => "0",
								'Rating' => "0");
			
			$mail = $values['mail'];
			
			$UsersHoistCompany = new UsersHoistCompany();
			$userhoistcompanydata = array('id_user' => $values['id_user'],
										   'id_company' => $_SESSION["id_company"],
										   'id_hoist' => $idHoist,
										   'status' => $values['status']);
			$UsersHoistCompany->saveUsersHoistCompany($userhoistcompanydata);
			
			$dateGruas = array('idGrua' => $values['id_user'],
								'Disponible' => "NO",
								'Latitud' => "",
								'Longitud' => "",
								'LastUpdate' => null,
								'Token' => null);
			$carpeta = "/var/www/html/tugruero/web/files/operators";
			$fichero_subido = $carpeta."/";
			$nombreArchivo = $loggin."-"."cedula.".pathinfo($_FILES['file_1']['name'],PATHINFO_EXTENSION);
			move_uploaded_file($_FILES['file_1']['tmp_name'], $fichero_subido.$nombreArchivo);
			
			$nombreArchivo = $loggin."-"."certificado.".pathinfo($_FILES['file_2']['name'],PATHINFO_EXTENSION);
			move_uploaded_file($_FILES['file_2']['tmp_name'], $fichero_subido.$nombreArchivo);
				
			$Aws = new Aws();
			$Aws->saveGrueros($dateGrueros);
			$Aws->saveGruas($dateGruas);
			$values['message'] = "se ha creado satisfactoriamente el usuario.";
			$values["action"] = "edit";
			executeEdit($values,message_created);die;
		}
	}
	function executeEdit($values = null,$msg = null)
	{
		$Users = new Users();
		$values = $Users->getUserOperatorById($values);
		$userhoistcompany = new UsersHoistCompany();
		$values['hoist'] = $userhoistcompany->getHoistByUserWithout($values);
		$values['action'] = 'update';
        $values['msg'] = $msg;
		require('users_form_view.php');
	}
	function executeUpdate($values = null)
	{
	
		$idHoist= array ("id" => $values['id_hoist']);
			$hoist = new Hoist();
			$dataHoist =  $hoist->getHoistById($idHoist);
			$dateGrueros = array('idGrua' => $values['id_user'],
								'Placa' => $dataHoist['registration_plate'],
								'Modelo' => $dataHoist['type_hoist'],
								'Color' => $dataHoist['color'],
								'Clave' => $values['password'],
								'Condicion' => "Activo",
								'NumServicios' => "0",
								'TotalTrato' => "0",
								'TotalPresencia' => "0",
								'TotalVehiculo' => "0",
								'Rating' => "0");
		$UsersHoistCompany = new UsersHoistCompany();
		$userhoistcompanydata = array('id_user' => $values['id_user'],
										   'id_company' => $_SESSION["id_company"],
										   'id_hoist' => $idHoist,
										   'status' => $values['status']);
		
		$UsersHoistCompany->updateUsersHoistCompany($userhoistcompanydata);
		$dateGruas = array('idGrua' => $values['id_user'],
								'Disponible' => "NO",
								'Latitud' => "",
								'Longitud' => "",
								'LastUpdate' => null,
								'Token' => null);
		$Aws = new Aws();
		$Aws->updateGrueros($dateGrueros);
		$Aws->updateGruas($dateGruas);
		$Users = new Users();
		$Users->updateUserOperator($values);		
		executeEdit($values,message_updated);die;
	}	
	function executeUserListJson($values)
	{
		$Users = new Users();
		$users_list_json = $Users->getUsersOperatorList($values);
		$users_list_json_cuenta = $Users ->getCountUsersOperatorList($values);
		$array_json = array();
		$array_json['recordsTotal'] = $users_list_json_cuenta;
		$array_json['recordsFiltered'] = $users_list_json_cuenta;
		if(count($users_list_json)>0)
		{
			foreach ($users_list_json as $user) 
			{
				$status = $user['status'];
				if($status == 0)
				{
					$message_status = "<label class='label label-danger'>Desactivado</label>";
				}
				if($status == 1)
				{
					$message_status = "<label class='label label-success'>Activo</label>";
				}
				$id_user = $user['id_user'];
				$array_json['data'][] = array(
					"id_user" => $id_user,
					"login" => $user['login'],
					"password" => "******",
					"status" => $message_status,
                                        "date_created" => $user['date_created'],
                                        "date_updated" => $user['date_updated'],
					"actions" => 
                                       '<form method="POST" action = "'.full_url.'/ap/users/index.php" >'
                                       .'<input type="hidden" name="action" value="edit">  '
                                       .'<input type="hidden" name="id_user" value="'.$id_user.'">  '
                                       .'<button class="btn btn-default btn-sm" type="submit"><i class="fa fa-edit  fa-pull-left fa-border"></i></button>'

					);	
			}	
		}else{
			$array_json['recordsTotal'] = 0;
			$array_json['recordsFiltered'] = 0;
			$array_json['data'][0] = array("id_user"=>null,"login"=>"","password"=>"","status"=>"","date_created"=>"","date_updated"=>"","actions"=>"");
		}

		echo json_encode($array_json);die;
		
	}
	function executeforwardPassword($values)
	{
		$user = new Users();
		$usuario = $user->getUserById($values);
		$mail = $usuario["mail"];
		$password = substr( md5(microtime()), 1, 8);
		unset($values);
		$values = array("id_user" => $usuario["id_user"],"password" => $password);
		$user->updateUser($values);
		$message = "Clave: ".$password;
		$Mail = new Mail();
		$Mail->send(array($mail), array('noreply@frbcomputersgroup.com.ve'),"Asunto",$message);
		$msg = "se ha enviado la clave al correo electrónico del usuario.";
		executeEdit($values,$msg);
	}