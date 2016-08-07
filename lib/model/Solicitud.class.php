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
	class Solicitud {
		
		public function __construct() 
		{
			
		}
		public function buscaPolizas($values) 
		{       $where = '1 = 1';
                       
                        if(isset($values['Placa']) and $values['Placa']!='')
                        {
                            $str = $values['Placa'];
                            $where.= " or upper(Placa) like upper('%$str%')";
                            
                        }
                        if(isset($values['Cedula']) and $values['Cedula']!='')
                        {
                            $str = $values['Cedula'];
                            $where.= " or upper(Cedula) like upper('%$str%')";
                            
                        }
                        if(isset($values['idPoliza']) and $values['idPoliza']!='')
                        {
                            $str = $values['idPoliza'];
                            $where.= " or cast(idPoliza as char(100)) like upper('%$str%')";
                            
                        }
                        if(isset($values['NumPoliza']) and $values['NumPoliza']!='')
                        {
                            $str = $values['NumPoliza'];
                            $where.= " or upper(NumPoliza) like upper('%$str%')";
                            
                        }
                
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Polizas
			->select("*,DATE_FORMAT(Vencimiento, '%d/%m/%Y') as Vencimiento")
			->where($where);
			return $q;   
			
		}
		public function getSolicitudesActivasList($values)
		{	
			$columns = array();
			$columns[0] = 'Servicios.idSolicitud';
			$columns[1] = 'sol.idPoliza';
			$columns[2] = 'pol.Cedula';
                        $columns[3] = 'pol.Placa';
			$columns[4] = 'Estatus';
                        $columns[5] = 'EstatusCliente';
                        $columns[6] = 'EstatusGrua';
			$columns[7] = 'TimeInicio';
			$column_order = $columns[0];
			$where = " sol.Estatus not in('Completado','Cancelado')"
                                . " AND EstatusCliente not in('Completado','Cancelado')"
                                . " AND EstatusGrua not in('Completado')";
			$order = 'asc';
			$limit = $values['length'];
			$offset = $values['start'];
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				$where.= " OR upper(pol.Cedula) like upper('%$str%')"
                                        . "OR upper(pol.Placa) like upper('%".$str."%')"
					. "OR upper(sol.Estatus) like upper('%".$str."%')"
					. "OR upper(EstatusCliente) like upper('%".$str."%')"
					. "OR upper(EstatusGrua) like upper('%".$str."%')"
					. "OR upper(EstatusGrua) like upper('%".$str."%')";
			}
			
			if(isset($values['columns'][0]['search']['value']) and $values['columns'][0]['search']['value']!='')
			{
				$where.=" AND sol.idSolicitud = ".$values['columns'][0]['search']['value']."";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(pol.idPoliza) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(Cedula) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][3]['search']['value']) and $values['columns'][3]['search']['value']!='')
			{
				$where.=" AND upper(Placa) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}	
			if(isset($values['columns'][4]['search']['value']) and $values['columns'][4]['search']['value']!='')
			{
				$where.=" AND upper(Estatus) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}	
			if(isset($values['columns'][5]['search']['value']) and $values['columns'][5]['search']['value']!='')
			{
				$where.=" AND upper(EstatusCliente) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}	
			if(isset($values['columns'][6]['search']['value']) and $values['columns'][6]['search']['value']!='')
			{
				$where.=" AND upper(EstatusGrua) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][7]['search']['value']) and $values['columns'][7]['search']['value']!='')
			{
				$where.=" AND DATE_FORMAT(TimeInicio, '%d/%m/%Y %h:%m:%s') = '".$values['columns'][6]['search']['value']."'";
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
                        $ConnectionAws = new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Servicios
			->select("*,DATE_FORMAT(TimeInicio, '%d/%m/%Y %h:%m:%s') as TimeInicio,DATE_FORMAT(TimeFin, '%d/%m/%Y') as TimeFin")
			->join('Solicitud','INNER JOIN Solicitudes sol ON sol.idSolicitud = Servicios.idSolicitud')
                        ->join('Polizas','INNER JOIN Polizas pol ON pol.idPoliza = Servicios.idPoliza')
                        ->order("$column_order $order")
			->where("$where")
			->limit($limit,$offset);
			//echo $q;die;
			return $q; 			
		}
		public function getCountSolicitudesActivasList($values)
		{	
			$where = " sol.Estatus not in('Completado','Cancelado')"
                                . " AND EstatusCliente not in('Completado','Cancelado')"
                                . " AND EstatusGrua not in('Completado')";
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				$where.=" ";
			}
                        $ConnectionAws = new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Servicios
			->select("count(*) as cuenta")
			->join('Solicitud','INNER JOIN Solicitudes sol ON sol.idSolicitud = Servicios.idSolicitud')
                        ->join('Polizas','INNER JOIN Polizas pol ON pol.idPoliza = Servicios.idPoliza')
			->where("$where")
                        ->fetch();    
			return $q['cuenta']; 			
		}
		
	}
	