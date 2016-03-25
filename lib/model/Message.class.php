<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Message
 *
 * @author Marcos
 */
class Message {
		public function getMessageList($values)
		{	
			$columns = array();
			$columns[0] = 'id_message';
			$columns[1] = 'names';
			$columns[2] = 'email';
			$columns[3] = 'phone';
			$columns[4] = 'message';
                        $columns[5] = 'date_added';
                        $columns[6] = 'status';
			$column_order = $columns[0];
			$where = '1 = 1';
			$order = 'asc';
			$limit = $values['length'];
			$offset = $values['start'];
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				$where = "upper(names) like upper('%$str%') ";
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
			$q = $ConnectionORM->getConnect()->message
			->select("*")
			->order("$column_order $order")
			->where("$where")
			->limit($limit,$offset);
			return $q; 			
		}
		public function getCountMessageList($values)
		{	
			$where = '1 = 1';
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				$where = "upper(names) like upper('%$str%') ";
			}
            $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->message
			->select("count(*) as cuenta")->where("$where")->fetch();
			return $q['cuenta']; 			
		}
		public function getMessageById($values){
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->message
			->select("*")
			->where("id_message=?",$values['id_message'])->fetch();
			return $q; 				
			
		}
		function deleteMessage($id_message){
			unset($values['action']);
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->message("id_message", $id_message)->delete();
			
			
		}        
    function saveMessage($values) {
	unset($values['action']);
	$ConnectionORM = new ConnectionORM();
        $values['status'] = 1;
        $values['date_added'] = date('Y-m-d h:i:s');
        $values['date_updated'] = date('Y-m-d h:i:s');
	$q = $ConnectionORM->getConnect()->message()->insert($values);
	$values['id_message'] = $ConnectionORM->getConnect()->message()->insert_id();
	return $values;	        
    }
}
