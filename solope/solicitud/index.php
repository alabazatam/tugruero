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
		$Hoist = new Hoist();
		$values = $Hoist->saveHoist($values);
		$rcv = $values['id']."-"."rcv.".pathinfo($_FILES['file_1']['name'],PATHINFO_EXTENSION);
		$carpeta = "../../web/files/hoist";
		$fichero_subido = $carpeta."/";
		move_uploaded_file($_FILES['file_1']['tmp_name'], $fichero_subido.$rcv);
		$values['rcv'] = $rcv;
		$Hoist->updateHoist($values);
		executeEdit($values,message_created);die;
	}
	function executeEdit($values = null,$msg = null)
	{
		
		$Hoist = new Hoist();
		$values = $Hoist->getHoistById($values);
		$values['action'] = 'update';
                $values['msg'] = $msg;
		require('hoist_form_view.php');
	}
	function executeUpdate($values = null)
	{
		$rcv = $values['id']."-"."rcv.".pathinfo($_FILES['file_1']['name'],PATHINFO_EXTENSION);
		$carpeta = "../../web/files/hoist";
		$fichero_subido = $carpeta."/";
		move_uploaded_file($_FILES['file_1']['tmp_name'], $fichero_subido.$rcv);
		$values['rcv'] = $rcv;
		$Hoist = new Hoist();
		$Hoist->updateHoist($values);
		
		//cuento que usuarios tienen esa grua asignada para saber si debo actualizar en el aws
		$cuenta_operators_hoists = $Hoist->getCountUserHoistCompanyByIdHoist($values);
		if($cuenta_operators_hoists['cuenta']>0)//si tengo usuarios con esa grua asignada los actualizo en el aws
		{
			//print_r($values);die;
			$Aws = new Aws();
			$users_hoist = $Hoist->getUserHoistCompanyByIdHoist($values);
			
			foreach($users_hoist as $user_hoist)
			{
				$values_hoist_gruero_aws = array(
				'Placa' => $values['registration_plate'],
				'Modelo' => $values['type_hoist'],
				'Color' => $values['color'],
				'Placa' => $values['registration_plate'],
				'idGrua' => $user_hoist['id_user']
				
				);
			
				$Aws->updateGrueros($values_hoist_gruero_aws);
				
				
				//echo $user_hoist['id_user']."<br>";
			}
			
			

		}
		
		
		
		executeEdit($values,message_updated);die;
	}	
	function executeHoistListJson($values)
	{
		$Hoist = new Hoist();
		$hoist_list_json = $Hoist ->getHoistList($values);
		$hoist_list_json_cuenta = $Hoist ->getCountHoistList($values);
		$array_json = array();
		$array_json['recordsTotal'] = $hoist_list_json_cuenta;
		$array_json['recordsFiltered'] = $hoist_list_json_cuenta;
		if(count($hoist_list_json)>0)
		{
			foreach ($hoist_list_json as $hoist) 
			{
				$id_hoist = $hoist['id'];
				$array_json['data'][] = array(
					"id" => $id_hoist,
					"body_serial" => $hoist['body_serial'],
					"registration_plate" => $hoist['registration_plate'],
					"year_vehicle" => $hoist['year_vehicle'],
					"make" => $hoist['make'],
					"actions" => 
                                       '<form method="POST" action = "'.full_url.'/ap/hoist/index.php" >'
                                       .'<input type="hidden" name="action" value="edit">  '
                                       .'<input type="hidden" name="id" value="'.$id_hoist.'">  '
                                       .'<button class="btn btn-default btn-sm" type="submit"><i class="fa fa-edit  fa-pull-left fa-border"></i></button>'
                                       
										.'</form>'
					);	
			}		
		}else{
			$array_json['recordsTotal'] = 0;
			$array_json['recordsFiltered'] = 0;
			$array_json['data'][0] = array("id"=>null,"engine_serial"=>"","body_serial"=>"","registration_plate"=>"","year_vehicle"=>"","make"=>"","actions"=>"");
		}
		echo json_encode($array_json);die;
		
	}