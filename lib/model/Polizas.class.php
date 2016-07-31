<?php

	/*
	 * To change this license header, choose License Headers in Project Properties.
	 * To change this template file, choose Tools | Templates
	 * and open the template in the editor.
	 */

	/**
	 * Description of Polizass
	 *
	 * @author marcos
	 */
	class Polizas {
		
		public function __construct() 
		{
			
		}
		public function getPolizasList($values)
		{	
			$columns = array();
			$columns[0] = 'idPoliza';
			$columns[1] = 'Placa';
			$columns[2] = 'Cedula';
			$columns[3] = 'Nombre';
			$columns[4] = 'Apellido';
                        $columns[5] = 'Vencimiento';
                        $columns[6] = 'Seguro';
			$column_order = $columns[0];
			$where = '1 = 1';
			$order = 'asc';
			$limit = $values['length'];
			$offset = $values['start'];
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				$where = "upper(Placa) like upper('%$str%')";
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
            $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect('tugruero')->Polizas
			->select("*")
			->order("$column_order $order")
			->where("$where")
			->limit($limit,$offset);
			return $q; 			
		}
		public function getCountPolizasList($values)
		{	
			$where = '1 = 1';
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				$where = " ";
			}
            $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Polizas
			->select("count(*) as cuenta")
			->where("$where")->fetch();
			return $q['cuenta']; 			
		}
		public function getPolizasById($values){
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Polizas
			->select("*")
			->where("idPoliza=?",$values['idPoliza'])->fetch();
			return $q; 				
			
		}
		function deletePolizas($id){
			unset($values['action']);
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Polizas("idPoliza", $id)->delete();
			
			
		}		
		function savePolizas($values){
			unset($values['PHPSESSID'],$values['action']);
                        $values['date_created'] = new NotORM_Literal("NOW()");
                        $values['date_updated'] = new NotORM_Literal("NOW()");
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Polizas()->insert($values);
			$values['idPoliza'] = $ConnectionORM->getConnect()->Polizas()->insert_id();
			return $values;	
			
		}
		function updatePolizas($values){
			unset($values['PHPSESSID']);
			unset($values['action'],$values['date_created']);
                       
                        $values['date_updated'] = new NotORM_Literal("NOW()");
			$idPoliza = $values['idPoliza'];
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Polizas("idPoliza", $idPoliza)->update($values);
			return $q;
			
		}
		public function getPolizasByIdCompany($values){
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Polizas
			->select("*")
			->join("Polizas_company","INNER JOIN Polizas_company on Polizas_company.id_Polizas = Polizas.id")
			->where("Polizas_company.id_company=?",$values['id']);
			return $q; 				
			
		}
		public function getCountUserPolizasCompanyByIdPolizas($values){
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Polizas
			->select("count(*) as cuenta")
			->where("users_Polizas_company.id_Polizas=?",$values['idPoliza'])->fetch();
			return $q; 				
			
		}		
	}
	