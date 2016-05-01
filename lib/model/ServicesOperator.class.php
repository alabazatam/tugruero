<?php

	/*
	 * To change this license header, choose License Headers in Project Properties.
	 * To change this template file, choose Tools | Templates
	 * and open the template in the editor.
	 */

	/**
	 * Description of ServicesOperator
	 *
	 * @author marcos
	 */
	class ServicesOperator {
		
		public function __construct() 
		{
			
		}
		public function getServicesOperatorList($values)
		{	
			$columns = array();
			$columns[0] = 'idSolicitud';
			$columns[1] = 'idGrua';
			$columns[2] = 'idPoliza';
			$columns[3] = 'TimeInicio';
			$columns[4] = 'TimeFin';
            $columns[5] = 'EstatusCliente';
            $columns[6] = 'EstatusGrua';
			$columns[7] = 'Motivo';
			$columns[8] = 'TratoCordial';
			$columns[9] = 'TratoVehiculo';
			$columns[10] = 'Puntual';
			$columns[11] = 'Observacion';
			$column_order = $columns[0];
			$where = " Grueros.Cedula = 'V-123456' ";
			$order = 'asc';
			$limit = $values['length'];
			$offset = $values['start'];
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				$where.= " and 1 = 1 ";
			}
			if(isset($values['order'][0]['column']) and $values['order'][0]['column']!='0')
			{
				$column_order = $columns[$values['order'][0]['column']];
			}
			if(isset($values['order'][0]['dir']) and $values['order'][0]['dir']!='0')
			{
				$order = $values['order'][0]['dir'];//asc o desc
			}
			//echo $column_order;die;
            $ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Servicios
			->select("*")
			->order("$column_order $order")
			->join("grueros","INNER JOIN Grueros on Grueros.idGrua = Servicios.idGrua")	
			->where("$where")
			->limit($limit,$offset);
			return $q; 			
		}
		public function getCountServicesOperatorList($values)
		{	
			$where = " Grueros.Cedula = 'V-123456' ";
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				//$where.= "upper(login) like upper('%$str%') ";
			}
            $ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Servicios
			->select("count(*) as cuenta")
			->join("grueros","INNER JOIN Grueros on Grueros.idGrua = Servicios.idGrua")	
			->where("$where")->fetch();
			return $q['cuenta']; 			
		}
		public function getServiceOperatorById($values){
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Servicios
			->select("*, DATE_FORMAT(date_created, '%d/%m/%Y %H:%i:%s') as date_created,DATE_FORMAT(date_updated, '%d/%m/%Y %H:%i:%s') as date_updated")
			->where("idGrua=?",$values['idGrua'])->fetch();
			return $q; 				
			
		}
		function deleteServiceOperator($idGrua){
			unset($values['action']);
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Servicios("idGrua", $idGrua)->delete();
			
			
		}		
		function saveServiceOperator($values){
			
			unset($values['PHPSESSID']);
			unset($values['action']);
			$values['password'] = hash('sha256', $values['password']);
                        $values['date_created'] = new NotORM_Literal("NOW()");
                        $values['date_updated'] = new NotORM_Literal("NOW()");
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Servicios()->insert($values);
			$values['idGrua'] = $ConnectionAws->getConnect()->Servicios()->insert_id();
			return $values;	
			
		}
		function updateServiceOperator($values){
			unset($values['PHPSESSID']);
			unset($values['action'],$values['date_created']);
                        $values['date_updated'] = new NotORM_Literal("NOW()");
			if(isset($values['password']) and $values['password']!='')
			{
				$values['password'] = hash('sha256', $values['password']);
			}else
			{
				unset($values['password']);
			}
			$idGrua = $values['idGrua'];
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Servicios("idGrua", $idGrua)->update($values);
			return $q;
			
		}
		function activeServiceOperatorMasterCompany($id_company){		
			$ConnectionAws= new ConnectionAws();
			$status = 1;
			$date_updated = new NotORM_Literal("NOW()");
			//obtengo el usuario master
			$q = $ConnectionAws->getConnect()->Servicios_company
			->select("idGrua")->where("id_company=?",$id_company)->fetch();			
			$idGrua =  $q['idGrua'];
			
			//obtengo datos de la compañia
			$q = $ConnectionAws->getConnect()->company
			->select("*")->where("id=?",$id_company)->fetch();			
			$rif =  $q['rif'];			

			//actualizo el status del usuario master a 1 activo
			$q = $ConnectionAws->getConnect()->Servicios("idGrua", $idGrua)->update(array('status'=>$status,'date_updated'=>$date_updated));

			//actualizo el status de la permisologia master a 1 activo
			$q = $ConnectionAws->getConnect()->Servicios_perms("idGrua", $idGrua)->update(array('status'=>$status,'date_updated'=>$date_updated));
			
			//actualizo el Servicios_company  a 1 activo
			$q = $ConnectionAws->getConnect()->Servicios_company->where("idGrua=?", $idGrua)->and("id_company=?", $id_company)->update(array('status'=>$status,'date_updated'=>$date_updated));
			
			//actualizo el status de la compañia a 1 activo
			$q = $ConnectionAws->getConnect()->company->where("id", $id_company)->update(array('status'=>$status,'date_updated'=>$date_updated));			
			
			//actualizo el status de la company_validation_ve a 1 activo
			$q = $ConnectionAws->getConnect()->company_validation_ve->where("rif", $rif)->update(array('status'=>$status,'validate'=>$status));			

                        //actualizo el status de los arcivos a 1 activo
			$q = $ConnectionAws->getConnect()->company_files->where("id_company", $id_company)->update(array('status'=>$status,'date_updated'=>$date_updated,'validate'=>$status));			
			
		}
		function inactiveServiceOperatorMasterCompany($id_company){		
			$ConnectionAws= new ConnectionAws();
			$status = 0;
			$date_updated = new NotORM_Literal("NOW()");
			//obtengo el usuario master
			$q = $ConnectionAws->getConnect()->Servicios_company
			->select("idGrua")->where("id_company=?",$id_company)->fetch();			
			$idGrua =  $q['idGrua'];
			
			//obtengo datos de la compañia
			$q = $ConnectionAws->getConnect()->company
			->select("*")->where("id=?",$id_company)->fetch();			
			$rif =  $q['rif'];			

			//actualizo el status del usuario master a 1 activo
			$q = $ConnectionAws->getConnect()->Servicios("idGrua", $idGrua)->update(array('status'=>$status,'date_updated'=>$date_updated));

			//actualizo el status de la permisologia master a 1 activo
			$q = $ConnectionAws->getConnect()->Servicios_perms("idGrua", $idGrua)->update(array('status'=>$status,'date_updated'=>$date_updated));
			
			//actualizo el Servicios_company  a 1 activo
			$q = $ConnectionAws->getConnect()->Servicios_company->where("idGrua=?", $idGrua)->and("id_company=?", $id_company)->update(array('status'=>$status,'date_updated'=>$date_updated));
			
			//actualizo el status de la compañia a 1 activo
			$q = $ConnectionAws->getConnect()->company->where("id", $id_company)->update(array('status'=>$status,'date_updated'=>$date_updated));			
			

		}		
		public function getServicesOperatorOperatorList($values)
		{	
			$columns = array();
			$columns[0] = 'idGrua';
			$columns[1] = 'login';
			$columns[2] = 'password';
			$columns[3] = 'status';
                        $columns[4] = 'date_created';
                        $columns[5] = 'date_updated';
			$column_order = $columns[0];
			$where = '1 = 1';
			$order = 'asc';
			$limit = $values['length'];
			$offset = $values['start'];
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				$where = "upper(login) like upper('%$str%')";
			}
			if(isset($values['order'][0]['column']) and $values['order'][0]['column']!='0')
			{
				$column_order = $columns[$values['order'][0]['column']];
			}
			if(isset($values['order'][0]['dir']) and $values['order'][0]['dir']!='0')
			{
				$order = $values['order'][0]['dir'];//asc o desc
			}
			//echo $column_order;die;
            $ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Servicios
			->select("Servicios.*, DATE_FORMAT(Servicios.date_created, '%d/%m/%Y %H:%i:%s') as date_created,DATE_FORMAT(Servicios.date_updated, '%d/%m/%Y %H:%i:%s') as date_updated")
			->join("Servicios_company","INNER JOIN Servicios_company on Servicios_company.idGrua = Servicios.idGrua")
			->join("Servicios_perms","INNER JOIN Servicios_perms on Servicios_perms.idGrua = Servicios.idGrua")
			->order("$column_order $order")
			->where("$where")
			->and("Servicios_company.id_company =?",$values["company"])
			->and("Servicios_perms.id_perms =?",4)
			->limit($limit,$offset);
			return $q; 			
		}
		public function getCountServicesOperatorOperatorList($values)
		{	
			$where = '1 = 1';
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				$where = "upper(login) like upper('%$str%') ";
			}
            $ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Servicios
			->select("count(*) as cuenta")
			->join("Servicios_company","INNER JOIN Servicios_company on Servicios_company.idGrua = Servicios.idGrua")
			->join("Servicios_perms","INNER JOIN Servicios_perms on Servicios_perms.idGrua = Servicios.idGrua")
			->where("$where")
			->and("Servicios_company.id_company =?",$values["company"])
			->and("Servicios_perms.id_perms =?",4)
			->fetch();
			return $q['cuenta']; 			
		}
		function saveServiceOperatorOperator($values){
			unset($values['PHPSESSID']);
			$user = array("login" => $values["login"],
						  "password" => hash('sha256', $values['password']),
						  "status" => $values["status"],
						  "mail"=>$values["mail"]);
			$user["date_created"] = date("Y-m-d H:i:s");
			$user["date_updated"] = date("Y-m-d H:i:s");
			unset($values['action']);
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Servicios()->insert($user);
			$values['idGrua'] = $ConnectionAws->getConnect()->Servicios()->insert_id();
			
			$userData = array("first_name"=>$values["first_name"],
							  "second_name"=>$values["second_name"],
							  "first_last_name"=>$values["first_last_name"],
							  "second_last_name"=>$values["second_last_name"],
							  "gender"=>$values["gender"],
							  "nationality"=>$values["nationality"],
							  "document"=>$values["document"],
							  "phone"=>$values["phone"],
							  "id_Servicios" => $values['idGrua']);
			$userData['date_created'] = date("Y-m-d H:i:s");
			$userData['date_updated'] = date("Y-m-d H:i:s");
			
			$userPerms = array("idGrua" => $values['idGrua'],
							   "id_perms" => 4);
			$userCompany = array("id_company" => $_SESSION["id_company"],
								 "idGrua" => $values['idGrua']);
			$q = $ConnectionAws->getConnect()->Servicios_data()->insert($userData);
			$q = $ConnectionAws->getConnect()->Servicios_perms()->insert($userPerms);
			$q = $ConnectionAws->getConnect()->Servicios_company()->insert($userCompany);
			
			return $values;	
			
		}
		public function getServiceOperatorOperatorById($values){
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Servicios
			->select("*, DATE_FORMAT(Servicios.date_created, '%d/%m/%Y %H:%i:%s') as date_created,DATE_FORMAT(Servicios.date_updated, '%d/%m/%Y %H:%i:%s') as date_updated")
			->join("Servicios_data","INNER JOIN Servicios_data on Servicios_data.id_Servicios = Servicios.idGrua")		
			->where("Servicios.idGrua=?",$values['idGrua'])->fetch();
			return $q; 				
			
		}
		function updateServiceOperatorOperator($values){
			unset($values['PHPSESSID']);
			unset($values['action'],$values['date_created']);
            $user = array("status" => $values["status"]);
			$user["date_updated"] = date("Y-m-d H:i:s");
			$idGrua = $values['idGrua'];
			$ConnectionAws= new ConnectionAws();
			
			
			$userData = array("status"=>$values["status"],
							  "idGrua" => $values['idGrua']);
			$userData['date_updated'] = date("Y-m-d H:i:s");
			
			
			$q = $ConnectionAws->getConnect()->Servicios("idGrua", $idGrua)->update($userData);
			return $q;
			
		}
	}
	