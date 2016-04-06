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
                $values['status'] = '1';
		$values['action'] = 'add';
		require('users_hoist_company_form_view.php');
	}
	function executeSave($values = null)
	{
		
		$UsersCompany = new UsersHoistCompany();
		$values = $UsersHoist->saveUsersHoistCompany($values);
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
					"id_users" => $users_hoist['id_users'],
					"first_name" => $users_hoist['first_name'],
					"first_last_name" => $users_hoist['first_name'],
					"id_hoist" => $users_hoist['id_hoist'],
					"status" => $message_status,
					"date_created" => $users_hoist['date_created'],
					"date_updated" => $users_hoist['date_updated'],
					"actions" => 
                                       '<form method="POST" action = "'.full_url.'/ap/users_hoist_company/index.php" >'
                                       .'<input type="hidden" name="action" value="edit">  '
                                       .'<input type="hidden" name="id" value="'.$id.'">  '
                                       .'<button class="btn btn-default btn-sm" type="submit"><i class="fa fa-edit  fa-pull-left fa-border"></i></button>'

					);	
			}	
		}else{
			$array_json['recordsTotal'] = 0;
			$array_json['recordsFiltered'] = 0;
			$array_json['data'][0] = array("id"=>null,"id_user"=>"","document"=>"","first_name"=>"","first_last_name" =>"","id_hoist"=>"","status"=>"","date_created"=>"","date_updated"=>"","actions"=>"");
		}

		echo json_encode($array_json);die;
		
	}