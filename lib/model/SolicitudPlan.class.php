<?php

	/*
	 * To change this license header, choose License Headers in Project Properties.
	 * To change this template file, choose Tools | Templates
	 * and open the template in the editor.
	 */

	/**
	 * Description of SolicitudPlans
	 *
	 * @author marcos
	 */
	class SolicitudPlan {
		
		public function __construct() 
		{
			
		}
		public function getSolicitudPlanListSelect(){
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->SolicitudPlan
			->select("*")
			->where("status=?",1);
			return $q; 				
			
		}
		public function getSolicitudPlanListSelect2(){
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->SolicitudPlan
			->select("*")
			->order('name');
			
			return $q; 				
			
		}
		public function getSolicitudPlanList($values)
		{	
			$columns = array();
			$columns[0] = 'idSolicitudPlan';
			$columns[1] = 'SolicitudPlan.name';
			$columns[2] = 'status.name';
			$column_order = $columns[0];
			$where = '1 = 1';
			$order = 'asc';
			$limit = $values['length'];
			$offset = $values['start'];
			
			if(isset($values['columns'][0]['search']['value']) and $values['columns'][0]['search']['value']!='')
			{
				$where.=" AND idSolicitudPlan = ".$values['columns'][0]['search']['value']."";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(SolicitudPlan.name) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(status.name) like ('%".$values['columns'][2]['search']['value']."%')";
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
            $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect('tugruero')->SolicitudPlan
			->select("*, status.name as status, SolicitudPlan.name as name")
			->where("$where")
			->join("status","INNER JOIN status on status.id_status = SolicitudPlan.status")
			->order("$column_order $order")			
			->limit($limit,$offset);
			//echo $q;die;
			return $q; 			
		}
		public function getCountSolicitudPlanList($values)
		{	
			$where = '1 = 1';
			if(isset($values['columns'][0]['search']['value']) and $values['columns'][0]['search']['value']!='')
			{
				$where.=" AND idSolicitudPlan = ".$values['columns'][0]['search']['value']."";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(SolicitudPlan.name) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(status.name) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
            $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->SolicitudPlan
			->select("count(*) as cuenta")
			->where("$where")
			->join("status","INNER JOIN status on status.id_status = SolicitudPlan.status")
			->fetch();
			return $q['cuenta']; 			
		}
		public function getSolicitudPlanById($values){
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->SolicitudPlan
			->select("*")
			->where("idSolicitudPlan=?",$values['idSolicitudPlan'])->fetch();
			return $q; 				
			
		}		
		function saveSolicitudPlan($values){

			$array_solicitud_plan = array(
				'name' => $values['name'],
				'status' => $values['status']
			);
			
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->SolicitudPlan()->insert($array_solicitud_plan);
			$values['idSolicitudPlan'] = $ConnectionORM->getConnect()->SolicitudPlan()->insert_id();
			$array_solicitud_plan['idSolicitudPlan'] = $values['idSolicitudPlan'];
			
			return $values;	
			
		}
		function updateSolicitudPlan($values){			
			$array_solicitud_plan = array(
				'name' => $values['name'],
				'status' => $values['status']
			);
			$idSolicitudPlan = $values['idSolicitudPlan'];
			
			//busco el nombre que tenia antes de la actualizacion para poder hacer update en las polizas
			$solicitud_plan_antiguo = $this->getSolicitudPlanById($values);
			$nombre_solicitud_plan_anterior = $solicitud_plan_antiguo['name'];
				
			
			
			$ConnectionORM = new ConnectionORM();
			$ConnectionAws = new ConnectionAws();
			$q = $ConnectionORM->getConnect()->SolicitudPlan("idSolicitudPlan", $idSolicitudPlan)->update($array_solicitud_plan);	
			
			if($values['status']==0)
			{
				$status = 'Desactivado';
			}else
			{
				$status = 'Activo';
			}
			
			
			//modifico en todas las polizas			

			$q = $ConnectionORM->ejecutarPreparado("UPDATE Polizas set Seguro = '".$values['name']."', EstatusPoliza = '".$status."' where Seguro = '$nombre_solicitud_plan_anterior'");
			$q = $ConnectionAws->ejecutarPreparado("UPDATE Polizas set Seguro = '".$values['name']."', EstatusPoliza = '".$status."' where Seguro = '$nombre_solicitud_plan_anterior'");
			
			
			return $q;
			
		}

		
	}
			

	