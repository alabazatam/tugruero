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
			$columns[1] = 'Grueros.idGrua';
			$columns[2] = 'Grueros.Nombre';
			$columns[3] = 'Grueros.Apellido';
			$columns[4] = 'TimeInicio';
			$columns[5] = 'TimeFin';
            $columns[6] = 'EstatusCliente';
            $columns[7] = 'EstatusGrua';
			$columns[8] = 'Motivo';
			$columns[9] = 'TratoCordial';
			$columns[10] = 'TratoVehiculo';
			$columns[11] = 'Puntual';
			$columns[12] = 'Observacion';
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
				$where = ""
                                        . " upper(nombre) like upper('%$str%') "
										. " or upper(apellido) like upper('%$str%') "
                                        . " or upper(EstatusGrua) like upper('%$str%')"
										. " or upper(Motivo) like upper('%$str%')"
										." or cast(Grueros.idGrua as char(100)) =  '$str' "
										
                                        . "or upper(EstatusCliente) like upper('%$str%')";
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
			->and("$where")
			->limit($limit,$offset);
			return $q; 			
		}
		public function getCountServicesAdministratorsList($values)
		{		
				$where = " 1 = 1";
				if(isset($values['search']['value']) and $values['search']['value'] !='')
				{
				$where = ""
                                        . " upper(nombre) like upper('%$str%') "
										. " or upper(apellido) like upper('%$str%') "
                                        . " or upper(EstatusGrua) like upper('%$str%')"
										. " or upper(Motivo) like upper('%$str%')"
										." or cast(Grueros.idGrua as char(100)) =  '$str' "
										
                                        . "or upper(EstatusCliente) like upper('%$str%')";
				}

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
			->and("$where")
			->fetch();
			return $q['cuenta']; 			
		}
		public function getServicesAdministratorsById($values){
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Servicios
			->select("*, Grueros.Nombre as nombre_gruero, Grueros.Apellido as apellido_gruero,Grueros.Cedula as cedula_gruero,Grueros.Celular as celular_gruero")
			->join("grueros","INNER JOIN Grueros on Grueros.idGrua = Servicios.idGrua")
			->join("solicitudes","INNER JOIN Solicitudes on Solicitudes.idSolicitud = Servicios.idSolicitud")
			->join("polizas","INNER JOIN Polizas on Polizas.idPoliza = Servicios.idPoliza")
			->where("Servicios.idGrua=?",$values['idGrua'])
			->and("Servicios.idSolicitud=?",$values['idSolicitud'])
			->fetch();
			return $q; 				
			
		}
		
		
	}
	