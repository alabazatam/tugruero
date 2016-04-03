<?php

	/*
	 * To change this license header, choose License Headers in Project Properties.
	 * To change this template file, choose Tools | Templates
	 * and open the template in the editor.
	 */

	/**
	 * Description of Hoists
	 *
	 * @author marcos
	 */
	class Hoist {
		
		public function __construct() 
		{
			
		}
		public function getHoistList($values)
		{	
			$columns = array();
			$columns[0] = 'id';
			$columns[1] = 'engine_serial';
			$columns[2] = 'body_serial';
			$columns[3] = 'registration_plate';
			$columns[4] = 'year_vehicle';
            $columns[5] = 'make';
			$column_order = $columns[0];
			$where = '1 = 1';
			$order = 'asc';
			$limit = $values['length'];
			$offset = $values['start'];
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				$where = "upper(registration_plate) like upper('%$str%')";
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
			$q = $ConnectionORM->getConnect('tugruero')->hoist
			->select("*")
			->order("$column_order $order")
			->where("$where")
			->limit($limit,$offset);
			return $q; 			
		}
		public function getCountHoistList($values)
		{	
			$where = '1 = 1';
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				$where = "upper(registration_plate) like upper('%$str%') ";
			}
            $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->hoist
			->select("count(*) as cuenta")->where("$where")->fetch();
			return $q['cuenta']; 			
		}
		public function getHoistById($values){
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->hoist
			->select("*")
			->where("id=?",$values['id'])->fetch();
			return $q; 				
			
		}
		function deleteHoist($id){
			unset($values['action']);
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->hosit("id", $id)->delete();
			
			
		}		
		function saveHoist($values){
			unset($values['action']);
                        $values['date_created'] = new NotORM_Literal("NOW()");
                        $values['date_updated'] = new NotORM_Literal("NOW()");
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->users()->insert($values);
			$values['id_hoist'] = $ConnectionORM->getConnect()->users()->insert_id();
			return $values;	
			
		}
		function updateHoist($values){
			unset($values['action'],$values['date_created']);
            $values['date_updated'] = new NotORM_Literal("NOW()");
			$id_hoist = $values['id_hoist'];
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->users("id_hoist", $id_hoist)->update($values);
			return $q;
			
		}
	}
	