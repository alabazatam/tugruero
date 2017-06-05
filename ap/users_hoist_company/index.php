<?php include("../../autoload.php");?>	
<?php include("validator.php");?>
<?php include("../security/security.php");?>

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
		case "users_hoist_company_list_json":
			executeUsersHoistListJson($values);	
		break;	
		default:
			executeIndex($values);
		break;
	}
	function executeIndex($values = null)
	{
		require('users_hoist_company_list_view.php');
	}
	function executeNew($values = null)
	{       
		$userhoistcompany = new UsersHoistCompany();
        $values['operadores'] = $userhoistcompany->getUsersWithout($values);
		$values['status'] = '1';
		$values['action'] = 'add';
		require('users_hoist_company_form_view.php');
	}
	function executeSave($values = null)
	{
		$password = $values["password"];
		unset($values["password"]);
		$UsersCompany = new UsersHoistCompany();
		$user = new Users();
		$userValues = array("password" => $password, "id_user" => $values["id_user"], "status" => $values["status"]);		
		$user->updateUser($userValues);
		$values = $UsersCompany->saveUsersHoistCompany($values);
		$valuesAws = array('idGrua' => $values['id_hoist']);
		$Aws = new Aws();
		$Aws->saveGrueros($valuesAws);
		$Aws->saveGruas($valuesAws);
		executeEdit($values,message_created);die;
	}
	function executeEdit($values = null,$msg = null)
	{
		$UsersHoist = new UsersHoistCompany();
		$values = $UsersHoist->getUsersHoistCompanyById($values);
		$values['action'] = 'update';
        $values['msg'] = $msg;
		require('users_hoist_company_form_view.php');
	}
	function executeUpdate($values = null)
	{
		$password = $values["password"];
		unset($values["password"]);
		$user = new Users();
		$userValues = array("password" => $password, "id_user" => $values["id_user"], "status" => $values["status"]);
		
		$user->updateUser($userValues);
		$UsersHoist = new UsersHoistCompany();
		$UsersHoist->updateUsersHoistCompany($values);		
		executeEdit($values,message_updated);die;
	}	
	function executeUsersHoistListJson($values)
	{
		$UsersHoist = new UsersHoistCompany();
		$users_hoist_list_json = $UsersHoist ->getUsersHoistCompanyList($values);
		$users_hoist_list_json_cuenta = $UsersHoist ->getCountUsersHoistCompanyList($values);
		$array_json = array();
		$array_json['recordsTotal'] = $users_hoist_list_json;
		$array_json['recordsFiltered'] = $users_hoist_list_json_cuenta;
		if(count($users_hoist_list_json)>0)
		{
			foreach ($users_hoist_list_json as $users_hoist) 
			{
				$status = $users_hoist['status'];
				if($status == 0)
				{
					$message_status = "<label class='label label-danger'>Desactivado</label>";
				}
				if($status == 1)
				{
					$message_status = "<label class='label label-success'>Activo</label>";
				}
				$id = $users_hoist['id_user_hoist_company'];
				$array_json['data'][] = array(
					"id" => $id,
					"login" => $users_hoist['login'],
					"first_name" => $users_hoist['first_name'],
					"first_last_name" => $users_hoist['first_last_name'],
					"status" => $message_status,
					"actions" => 
                                       '<form method="POST" action = "'.full_url.'/ap/users_hoist_company/index.php" >'
                                       .'<input type="hidden" name="action" value="edit">  '
                                       .'<input type="hidden" name="id_user_hoist_company" value="'.$id.'">  '
                                       .'<button class="btn btn-default btn-sm" type="submit"><i class="fa fa-edit  fa-pull-left fa-border"></i></button>'

					);	
			}	
		}else{
			$array_json['recordsTotal'] = 0;
			$array_json['recordsFiltered'] = 0;
			$array_json['data'][0] = array("id"=>null,"login"=>"","first_name"=>"","first_last_name" =>"","status"=>"","actions"=>"");
		}

		echo json_encode($array_json);die;
		
	}