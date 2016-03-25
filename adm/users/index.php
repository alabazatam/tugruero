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
		case "users_list_json":
			executeUserListJson($values);	
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
	require('users_form_view.php');
	}
	function executeUserListJson($values)
	{
		$Users = new Users();
		$users_list_json = $Users ->getUsersList($values);
		$users_list_json_cuenta = $Users ->getCountUsersList($values);
		$array_json = array();
		$array_json['recordsTotal'] = $users_list_json_cuenta;
		$array_json['recordsFiltered'] = $users_list_json_cuenta;
		if(count($users_list_json)>0)
		{
			foreach ($users_list_json as $user) 
			{
				$array_json['data'][] = array(
					"id_user" => $user['id_user'],
					"login" => $user['login'],
					"password" => "******",
					"status" => $user['status'],
					"id_role" => $user['id_role']

					);	
			}	
		}else{
			$array_json['recordsTotal'] = 0;
			$array_json['recordsFiltered'] = 0;
			$array_json['data'][0] = array("id_user"=>null,"login"=>"","password"=>"","status"=>"","id_role"=>"");
		}

		echo json_encode($array_json);die;
		
	}