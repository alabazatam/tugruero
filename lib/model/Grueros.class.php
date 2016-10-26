<?php

	/*
	 * To change this license header, choose License Headers in Project Properties.
	 * To change this template file, choose Tools | Templates
	 * and open the template in the editor.
	 */

	/**
	 * Description of Grueross
	 *
	 * @author marcos
	 */
	class Grueros {
		
		public function __construct() 
		{
			
		}
		public function getGruerosList($values)
		{	
			$columns = array();
			$columns[0] = 'Grueros.idGrua';
			$columns[1] = 'Cedula';
			$columns[2] = 'Nombre';
			$columns[3] = 'Placa';
			$columns[4] = 'Celular';
			$columns[5] = 'Disponible';
			$columns[6] = 'location';
			$columns[7] = 'zone_work';
			$column_order = $columns[0];
			$where = '1 = 1';
			$order = 'asc';
			$limit = $values['length'];
			$offset = $values['start'];
			
			if(isset($values['columns'][0]['search']['value']) and $values['columns'][0]['search']['value']!='')
			{
				$where.=" AND Grueros.idGrua = ".$values['columns'][0]['search']['value']."";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(Grueros.Cedula) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(concat(Nombre,' ', Apellido)) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}					
			if(isset($values['columns'][3]['search']['value']) and $values['columns'][3]['search']['value']!='')
			{
				$where.=" AND upper(Placa) like ('%".$values['columns'][3]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}	
			if(isset($values['columns'][4]['search']['value']) and $values['columns'][4]['search']['value']!='')
			{
				$where.=" AND upper(Celular) like ('%".$values['columns'][4]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}	
			if(isset($values['columns'][5]['search']['value']) and $values['columns'][5]['search']['value']!='')
			{
				$where.=" AND upper(Disponible)  like ('%".$values['columns'][5]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}	
			if(isset($values['columns'][6]['search']['value']) and $values['columns'][6]['search']['value']!='')
			{
				$where.=" AND upper(location)  like ('%".$values['columns'][6]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}				
			if(isset($values['columns'][7]['search']['value']) and $values['columns'][7]['search']['value']!='')
			{
				$where.=" AND upper(zone_work)  like ('%".$values['columns'][7]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
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
			$q = $ConnectionAws->getConnect('tugruero')->Grueros
			->select("*")
			->where("$where")
			->join("Gruas","INNER JOIN Gruas on Gruas.idGrua = Grueros.idGrua")
			->order("$column_order $order")			
			->limit($limit,$offset);
			//echo $q;die;
			return $q; 			
		}
		public function getCountGruerosList($values)
		{	
			$where = '1 = 1';
			if(isset($values['columns'][0]['search']['value']) and $values['columns'][0]['search']['value']!='')
			{
				$where.=" AND Grueros.idGrua = ".$values['columns'][0]['search']['value']."";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(Grueros.Cedula) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(concat(Nombre,' ', Apellido)) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}					
			if(isset($values['columns'][3]['search']['value']) and $values['columns'][3]['search']['value']!='')
			{
				$where.=" AND upper(Placa) like ('%".$values['columns'][3]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}	
			if(isset($values['columns'][4]['search']['value']) and $values['columns'][4]['search']['value']!='')
			{
				$where.=" AND upper(Celular) like ('%".$values['columns'][4]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}	
			if(isset($values['columns'][5]['search']['value']) and $values['columns'][5]['search']['value']!='')
			{
				$where.=" AND upper(Disponible)  like ('%".$values['columns'][5]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}	
			if(isset($values['columns'][6]['search']['value']) and $values['columns'][6]['search']['value']!='')
			{
				$where.=" AND upper(location)  like ('%".$values['columns'][6]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}				
			if(isset($values['columns'][7]['search']['value']) and $values['columns'][7]['search']['value']!='')
			{
				$where.=" AND upper(zone_work)  like ('%".$values['columns'][7]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}		
            $ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Grueros
			->select("count(*) as cuenta")
			->where("$where")
			->join("Gruas","INNER JOIN Gruas on Gruas.idGrua = Grueros.idGrua")
			->fetch();
			return $q['cuenta']; 			
		}
		public function getGruerosById($values){
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Grueros
			->select("*")
			->where("id_seguro=?",$values['id_seguro'])->fetch();
			return $q; 				
			
		}		
		function saveGrueros($values){

			$array_seguro = array(
				'name' => $values['name'],
				'status' => $values['status']
			);
			
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Grueros()->insert($array_seguro);
			$values['id_seguro'] = $ConnectionAws->getConnect()->Grueros()->insert_id();
			$array_seguro['id_seguro'] = $values['id_seguro'];
			
			return $values;	
			
		}
		function reset($values){
			$idGrua = $values['idGrua'];		
			$array_grua = array(
				'Disponible' => "NO",
				'Token' => "",
				'DeviceID' => ""
			);
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Gruas("idGrua", $idGrua)->update($array_grua);
			return $q;
			
		}

		
	}
			

	