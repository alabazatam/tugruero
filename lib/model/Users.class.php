<?php

	/*
	 * To change this license header, choose License Headers in Project Properties.
	 * To change this template file, choose Tools | Templates
	 * and open the template in the editor.
	 */

	/**
	 * Description of Users
	 *
	 * @author marcos
	 */
	class Users {
		
		public function __construct() 
		{
			
		}
		public function getUsersList($values)
		{	
			$columns = array();
			$columns[0] = 'id_user';
			$columns[1] = 'login';
			$columns[2] = 'password';
			$columns[3] = 'status';
			$columns[4] = 'id_role';
			$column_order = $columns[0];
			$where = '1 = 1';
			$order = 'asc';
			$limit = $values['length'];
			$offset = $values['start'];
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				$where = "upper(login) like upper('%$str%') ";
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
			$q = $ConnectionORM->getConnect('tugruero')->users
			->select("*")
			->order("$column_order $order")
			->where("$where")
			->limit($limit,$offset);
			return $q; 			
		}
		public function getCountUsersList($values)
		{	
			$where = '1 = 1';
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				$where = "upper(login) like upper('%$str%') ";
			}
            $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->users
			->select("count(*) as cuenta")->where("$where")->fetch();
			return $q['cuenta']; 			
		}
		public function getUserById($values){
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->users
			->select("*")
			->where("id_user=?",$values['id_user'])->fetch();
			return $q; 				
			
		}
		function deleteUser($id_user){
			unset($values['action']);
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->users("id_user", $id_user)->delete();
			
			
		}		
		function saveUser($values){
			unset($values['action']);
			$values['password'] = hash('sha256', $values['password']);
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->users()->insert($values);
			$values['id_user'] = $ConnectionORM->getConnect()->users()->insert_id();
			return $values;	
			
		}
		function updateUser($values){
			unset($values['action']);
			if(isset($values['password']) and $values['password']!='')
			{
				$values['password'] = hash('sha256', $values['password']);
			}else
			{
				unset($values['password']);
			}
			$id_user = $values['id_user'];
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->users("id_user", $id_user)->update($values);
			return $q;
			
		}
	}
	