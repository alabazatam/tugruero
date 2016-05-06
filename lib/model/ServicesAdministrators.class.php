<?php

	/*
	 * To change this license header, choose License Headers in Project Properties.
	 * To change this template file, choose Tools | Templates
	 * and open the template in the editor.
	 */

	/**
	 * Description of ServicesAdministrators
	 *
	 * @author marcos
	 */
	class ServicesAdministrators{
		
		public function __construct() 
		{
			
		}
		public function getServicesAdministratorsList($values)
		{	
			$columns = array();
			$columns[0] = 'Grueros.idGrua';
			$columns[1] = 'Grueros.Nombre';
			$columns[2] = 'Grueros.Apellido';
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
			$where = "1 = 1 ";
			$order = 'asc';
			$limit = $values['length'];
			$offset = $values['start'];
			
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->users_company
			->select("id_user")
			->where("id_company=?",$values['id_company']);
			$id_user_company = array();
			foreach($q as $id_user)
			{
				$id_user_company[] = $id_user['id_user'];
			}
			$ConnectionORM->close();			
			
			
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
			->where("Servicios.idGrua ",$id_user_company)
			->limit($limit,$offset);
			return $q; 			
		}
		public function getCountServicesAdministratorsList($values)
		{	
			$where = "1 = 1";

			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->users_company
			->select("id_user")
			->where("id_company=?",$values['id_company']);
			$id_user_company = array();
			foreach($q as $id_user)
			{
				$id_user_company[] = $id_user['id_user'];
			}
			$ConnectionORM->close();
			
            $ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Servicios
			->select("count(*) as cuenta")
			->join("grueros","INNER JOIN Grueros on Grueros.idGrua = Servicios.idGrua")	
			->where("Servicios.idGrua ",$id_user_company)	
			->fetch();
			return $q['cuenta']; 			
		}
		public function getServicesAdministratorsById($values){
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Servicios
			->select("*")
			->join("grueros","INNER JOIN Grueros on Grueros.idGrua = Servicios.idGrua")
			->join("solicitudes","INNER JOIN Solicitudes on Solicitudes.idSolicitud = Servicios.idSolicitud")
			->join("polizas","INNER JOIN Polizas on Polizas.idPoliza = Servicios.idPoliza")
			->where("Servicios.idGrua=?",$values['idGrua'])
			->and("Servicios.idSolicitud=?",$values['idSolicitud'])
			->fetch();
			return $q; 				
			
		}
		
		
	}
	