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
			$estatus = $values['status'];
			$Users = new Users();
			$loggin = $values['nationality'].'-'.$values['document'];
			$values['login'] = $loggin;
			$DocumentFile = $loggin."-"."cedula.".pathinfo($_FILES['file_1']['name'],PATHINFO_EXTENSION);
			$values['document_file'] = $DocumentFile;
			$values = $Users->saveUserOperator($values);
			$idHoist= array ("id" => $values['id_hoist']);
			$hoist = new Hoist();
			$dataHoist =  $hoist->getHoistById($idHoist);
			if($estatus == 1)
			{
				$estatus = "Activo";
			}
			else
			{
				$estatus = "Inactivo";
			}
			$dateGrueros = array('idGrua' => $values['id_user'],
								'Nombre' => $values['first_name'].' '.$values['second_name'],
								'Apellido' => $values['first_last_name'].' '.$values['second_last_name'],
								'Placa' => $dataHoist['registration_plate'],
								'Modelo' => $dataHoist['type_hoist'],
								'Color' => $dataHoist['color'],
								'Celular' => $values['phone'],
								'Cedula' => $values['nationality'].'-'.$values['document'],
								'Clave' => $values['password'],
								'Condicion' => $estatus,
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
			$carpeta = "../../web/files/operators";
			$fichero_subido = $carpeta."/";
			
			move_uploaded_file($_FILES['file_1']['tmp_name'], $fichero_subido.$DocumentFile);
			
			
				
			$Aws = new Aws();
			$Aws->saveGrueros($dateGrueros);
			$Aws->saveGruas($dateGruas);
			$Aws->activarGruero($_SESSION['id_user']);//activo el gruero master
			$values['message'] = "se ha creado satisfactoriamente el usuario.";
			$values["action"] = "edit";
			executeEdit($values,message_created);die;
		}
	}
	function executeEdit($values = null,$msg = null)
	{
		$Aws = new Aws();
		$Users = new Users();
		$values = $Users->getUserOperatorById($values);
		$password = $Aws->getGruerosClave($values);
		$password = $password['clave'];
		$userhoistcompany = new UsersHoistCompany();
		$values['hoist'] = $userhoistcompany->getHoistByUserWithout($values);
		$values['action'] = 'update';
        $values['msg'] = $msg;
		require('users_form_view.php');
	}
	function executeUpdate($values = null)
	{
			

			$idHoist= array ("id" => @$values['id_hoist']);
			$hoist = new Hoist();
			$dataHoist =  $hoist->getHoistById($idHoist);
			
			$estatus = "";
			if($values['status'] == 0)
			{
				$estatus = "Activo";
			}
			else
			{
				$estatus = "Inactivo";
			}
			
			
			$dateGrueros = array('idGrua' => $values['id_user'],
								'Placa' => $dataHoist['registration_plate'],
								'Modelo' => $dataHoist['type_hoist'],
								'Color' => $dataHoist['color'],
								'Clave' => $values['password'],
								'Condicion' => $estatus,
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
		
		
			$userdata = array(
				'id_user' => $values['id_user'],
				'password' => hash('sha256',$values['password'])
			);
			
			
		$UsersHoistCompany->updateUser($userdata);
		
		$dateGruas = array('idGrua' => $values['id_user'],
								'Disponible' => "NO",
								'Latitud' => "",
								'Longitud' => "",
								'LastUpdate' => null,
								'Token' => null);
		$Aws = new Aws();
		$Aws->updateGrueros($dateGrueros);
		$Aws->updateGruas($dateGruas);
		
			if($values['status']==0)
			{
				$Aws->desactivarGruero($values['id_user']);
			}
			if($values['status']==1)
			{
				$Aws->activarGruero($values['id_user']);
			}		
		
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
		$Aws = new Aws();
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
				$disponibilidad = $Aws->getDisponibilidad($user);
				$id_user = $user['id_user'];
				$array_json['data'][] = array(
					"id_user" => $id_user,
					"login" => $user['login'],
					"placa" => $user['registration_plate'],
					"disponibilidad" => $disponibilidad,
					"status" => $message_status,
					"actions" => 
                                       '<form method="POST" action = "'.full_url.'/ap/users/index.php" >'
                                       .'<input type="hidden" name="action" value="edit">  '
                                       .'<input type="hidden" name="id_user" value="'.$id_user.'">  '
                                       .'<button class="btn btn-default btn-sm" type="submit"><i class="fa fa-edit  fa-pull-left fa-border"></i></button>'
									   .'<a class="btn btn-default btn-sm" href="'.full_url.'/ap/services_operator/index.php?action=index&idGrua='.$id_user.'&id_user='.$id_user.'"><i class="fa fa-book  fa-pull-left fa-border"></i></a>  '

					);	
			}	
		}else{
			$array_json['recordsTotal'] = 0;
			$array_json['recordsFiltered'] = 0;
			$array_json['data'][0] = array("id_user"=>null,"login"=>"","status"=>"","actions"=>"");
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