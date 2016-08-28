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
			$columns[0] = 'Solicitudes.idSolicitud';
			$columns[1] = 'Solicitudes.idPoliza';
			$columns[2] = 'Solicitudes.Proviene';
			$columns[3] = 'pol.Cedula';
            $columns[4] = 'pol.Placa';
			$columns[5] = 'Estatus';
            $columns[6] = 'EstatusCliente';
            $columns[7] = 'EstatusGrua';
			$columns[8] = 'TimeOpen';
			$columns[9] = 'TimeInicio';
			$column_order = $columns[0];
			$where = " Estatus NOT IN('Completado','Cancelado') 
						AND (EstatusCliente IS NULL OR EstatusCliente = 'Asignado' OR EstatusCliente = 'Activo' OR EstatusCliente = 'Asistido' OR EstatusCliente = 'Completado') 
						AND (EstatusGrua  IS NULL OR EstatusGrua = 'Asignado' OR EstatusGrua = 'Activo' OR EstatusGrua = 'Asistiendo')  ";
			$order = 'asc';
			$limit = $values['length'];
			$offset = $values['start'];
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				$where.= " OR upper(pol.Cedula) like upper('%$str%')"
                    . "OR upper(pol.Placa) like upper('%".$str."%')"
					. "OR upper(Estatus) like upper('%".$str."%')"
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
				$where.=" AND DATE_FORMAT(TimeOpen, '%d/%m/%Y %H:%i:%s') = '".$values['columns'][7]['search']['value']."'";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][8]['search']['value']) and $values['columns'][8]['search']['value']!='')
			{
				$where.=" AND DATE_FORMAT(TimeInicio, '%d/%m/%Y %H:%i:%s') = '".$values['columns'][8]['search']['value']."'";
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
			$q = $ConnectionAws->getConnect()->Solicitudes
			->select("*,Solicitudes.idSolicitud as idSolicitud,DATE_FORMAT(TimeInicio, '%d/%m/%Y %H:%i:%s') as TimeInicio,DATE_FORMAT(TimeFin, '%d/%m/%Y') as TimeFin,DATE_FORMAT(TimeOpen, '%d/%m/%Y %H:%i:%s') as TimeOpen,DATE_FORMAT(LastStatusSolicitud, '%d/%m/%Y %H:%i:%s') as LastStatusSolicitud,DATE_FORMAT(LastStatusSolicitud, '%d-%m-%Y %H:%i:%s') as LastStatusSolicitudn,DATE_FORMAT(LastStatusGrua, '%d/%m/%Y %H:%i:%s') as LastStatusGrua,DATE_FORMAT(LastStatusGrua, '%d-%m-%Y %H:%i:%s') as LastStatusGruan")
			->join('Servicios','LEFT JOIN Servicios ser ON ser.idSolicitud = Solicitudes.idSolicitud')
            ->join('Polizas','INNER JOIN Polizas pol ON pol.idPoliza = Solicitudes.idPoliza')
            ->order("$column_order $order")
			->where("$where")
			->limit($limit,$offset);
			//echo $q;die;
			return $q; 			
		}
		public function getCountSolicitudesActivasList($values)
		{	
			$where = " Estatus NOT IN('Completado','Cancelado') 
						AND (EstatusCliente IS NULL OR EstatusCliente = 'Asignado' ) 
						AND (EstatusGrua  IS NULL OR EstatusGrua = 'Asignado' )  ";
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				$where.=" ";
			}
            $ConnectionAws = new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Solicitudes
			->select("count(*) as cuenta")
			->join('Servicios','LEFT JOIN Servicios ser ON ser.idSolicitud = Solicitudes.idSolicitud')
            ->join('Polizas','INNER JOIN Polizas pol ON pol.idPoliza = Solicitudes.idPoliza')
			->where("$where")
                        ->fetch();    
			return $q['cuenta']; 			
		}
		function updateStatusDesierto($values){			

 			$idSolicitud =  $values['idsolicitud'];
			$array_solicitud = array(
				'Estatus' => 'Desierto'
			);
			
			$ConnectionAws = new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Solicitudes("idSolicitud", $idSolicitud)->update($array_solicitud);
			return $q;
			
		}
		public function getGruerosOnline(){
			$ConnectionAws = new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Gruas
			->select("*")
			->join("Grueros","INNER JOIN Grueros on Grueros.idGrua = Gruas.idGrua");
			//->where("Disponible=?","SI");
			return $q; 				
			
		}
		public function getDatosSolicitud($values){
			$ConnectionAws = new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Solicitudes
			->select("*,Solicitudes.Direccion as direccion,Solicitudes.idSolicitud as idSolicitud,"
                                . "DATE_FORMAT(TimeInicio, '%d/%m/%Y %H:%i:%s') as TimeInicio,"
                                . "DATE_FORMAT(TimeFin, '%d/%m/%Y') as TimeFin,"
                                . "DATE_FORMAT(TimeOpen, '%d/%m/%Y %H:%i:%s') as TimeOpen,"
                                . "Solicitudes.latOrigen as latOrigen,Solicitudes.lngOrigen as lngOrigen,"
                                . "Solicitudes.latDestino as latDestino,Solicitudes.lngDestino as lngDestino,"
                                . "DATE_FORMAT(LastStatusSolicitud, '%d/%m/%Y %H:%i:%s') as LastStatusSolicitud,"
                                . "DATE_FORMAT(LastStatusSolicitud, '%d-%m-%Y %H:%i:%s') as LastStatusSolicitudn,"
                                . "DATE_FORMAT(LastStatusGrua, '%d/%m/%Y %H:%i:%s') as LastStatusGrua,"
                                . "DATE_FORMAT(LastStatusGrua, '%d-%m-%Y %H:%i:%s') as LastStatusGruan,"
                                . "gr.Latitud as latGrua,gr.Longitud as lngGrua,"
                                . "pol.Nombre as NombreCliente, pol.Apellido as ApellidoCliente, pol.Placa as PlacaCliente, pol.Cedula as CedulaCliente,"
                                . "grs.Nombre as NombreGruero, grs.Apellido as ApellidoGruero, grs.Placa as PlacaGruero, grs.Cedula as CedulaGruero")
						->join('Servicios','LEFT JOIN Servicios ser ON ser.idSolicitud = Solicitudes.idSolicitud')
                        ->join('Gruas','LEFT JOIN Gruas gr ON gr.idGrua = ser.idGrua')
                        ->join('Grueros','LEFT JOIN Grueros grs ON grs.idGrua = gr.idGrua')
                        ->join('Polizas','INNER JOIN Polizas pol ON pol.idPoliza = Solicitudes.idPoliza')
						->where("Solicitudes.idSolicitud=?",$values['idSolicitud'])
			->fetch();
			return $q; 				
			
		}
		public function getDatosSolicitudesActivas($values){
			$where = " Estatus NOT IN('Completado','Cancelado') 
						AND (EstatusCliente IS NULL OR EstatusCliente = 'Asignado' OR EstatusCliente = 'Activo' OR EstatusCliente = 'Asistido' OR EstatusCliente = 'Completado') 
						AND (EstatusGrua  IS NULL OR EstatusGrua = 'Asignado' OR EstatusGrua = 'Activo' OR EstatusGrua = 'Asistiendo')  ";

            $ConnectionAws = new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Solicitudes
			->select("*,Solicitudes.Direccion as direccion,Solicitudes.idSolicitud as idSolicitud,"
                                . "DATE_FORMAT(TimeInicio, '%d/%m/%Y %H:%i:%s') as TimeInicio,"
                                . "DATE_FORMAT(TimeFin, '%d/%m/%Y') as TimeFin,"
                                . "DATE_FORMAT(TimeOpen, '%d/%m/%Y %H:%i:%s') as TimeOpen,"
                                . "Solicitudes.latOrigen as latOrigen,Solicitudes.lngOrigen as lngOrigen,"
                                . "Solicitudes.latDestino as latDestino,Solicitudes.lngDestino as lngDestino,"
                                . "DATE_FORMAT(LastStatusSolicitud, '%d/%m/%Y %H:%i:%s') as LastStatusSolicitud,"
                                . "DATE_FORMAT(LastStatusSolicitud, '%d-%m-%Y %H:%i:%s') as LastStatusSolicitudn,"
                                . "DATE_FORMAT(LastStatusGrua, '%d/%m/%Y %H:%i:%s') as LastStatusGrua,"
                                . "DATE_FORMAT(LastStatusGrua, '%d-%m-%Y %H:%i:%s') as LastStatusGruan,"
                                . "gr.Latitud as latGrua,gr.Longitud as lngGrua,"
                                . "pol.Nombre as NombreCliente, pol.Apellido as ApellidoCliente, pol.Placa as PlacaCliente, pol.Cedula as CedulaCliente,"
                                . "grs.Nombre as NombreGruero, grs.Apellido as ApellidoGruero, grs.Placa as PlacaGruero, grs.Cedula as CedulaGruero")
			->join('Servicios','LEFT JOIN Servicios ser ON ser.idSolicitud = Solicitudes.idSolicitud')
                        ->join('Gruas','LEFT JOIN Gruas gr ON gr.idGrua = ser.idGrua')
                        ->join('Grueros','LEFT JOIN Grueros grs ON grs.idGrua = gr.idGrua')
                        ->join('Polizas','INNER JOIN Polizas pol ON pol.idPoliza = Solicitudes.idPoliza')
			->where("$where");
			return $q; 				
			
		}
		public function updateEstatusSolicitud($values){
			
			$idSolicitud = $values['idSolicitud'];
			$array_solicitud = array(
				"Estatus" => $values['estatus_cambiar']
			);
			$ConnectionAws = new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Solicitudes("idSolicitud", $idSolicitud)->update($array_solicitud);
			return $q;			
			
		}
		public function updateEstatusServicioCliente($values){
			
			$idSolicitud = $values['idSolicitud'];
			$array_solicitud = array(
				"EstatusCliente" => $values['estatuscliente_cambiar']
			);
			$ConnectionAws = new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Servicios("idSolicitud", $idSolicitud)->update($array_solicitud);
			return $q;			
			
		}
		public function updateEstatusServicioGrua($values){
			
			$idSolicitud = $values['idSolicitud'];
			$array_solicitud = array(
				"EstatusGrua" => $values['estatusgrua_cambiar']
			);
			$ConnectionAws = new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Servicios("idSolicitud", $idSolicitud)->update($array_solicitud);
			return $q;			
			
		}
		public function insertServicio($values){
			$hora = date(gmdate('Y-m-d H:i:s', time() - (4 * 3600)));
			$idSolicitud = $values['idSolicitud'];
			$array = array(
				"idSolicitud" => $idSolicitud,
				"idPoliza" => $values['idPoliza'],
				"idGrua" => $values['idGrua'],
				"TimeInicio" => $hora
				
			);
			$ConnectionAws = new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Servicios()->insert($array);


			//actualizo el status de la solicitud a asignado
			$array_solicitud = array(
				"Estatus" => "Asignado"
			);			
			$ConnectionAws = new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Solicitudes("idSolicitud", $idSolicitud)->update($array_solicitud);
		}
		
		public function getGruerosList($values){
			$columns = array();
			$columns[0] = 'Grueros.idGrua';
			$columns[1] = 'Grueros.Cedula';
			$columns[2] = 'Grueros.Nombre';
			$columns[3] = 'Grueros.Apellido';
            $columns[4] = 'Grueros.Placa';
			$columns[5] = 'Grueros.Modelo';
            $columns[6] = 'Grueros.Color';
            $columns[7] = 'Grueros.Celular';
			$columns[8] = 'gr.Disponible';
			
			$column_order = $columns[0];
			$where = "1 =1  ";
			$order = 'asc';
			$limit = $values['length'];
			$offset = $values['start'];
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				$where.= " OR upper(Grueros.Nombre) like upper('%$str%')"
                    . "OR upper(Grueros.Apellido) like upper('%".$str."%')"
					. "OR upper(Grueros.Placa) like upper('%".$str."%')"
					. "OR upper(Grueros.Modelo) like upper('%".$str."%')"
					. "OR upper(Grueros.Color) like upper('%".$str."%')"
					. "OR upper(Grueros.Color) like upper('%".$str."%')"
					. "OR upper(Gruas.Disponible) like upper('%".$str."%')";
			}
			
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
				$where.=" AND upper(Grueros.Nombre) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][3]['search']['value']) and $values['columns'][3]['search']['value']!='')
			{
				$where.=" AND upper(Grueros.Apellido) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}	
			if(isset($values['columns'][4]['search']['value']) and $values['columns'][4]['search']['value']!='')
			{
				$where.=" AND upper(Grueros.Placa) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}	
			if(isset($values['columns'][5]['search']['value']) and $values['columns'][5]['search']['value']!='')
			{
				$where.=" AND upper(Grueros.Modelo) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}	
			if(isset($values['columns'][6]['search']['value']) and $values['columns'][6]['search']['value']!='')
			{
				$where.=" AND upper(Grueros.Color) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][7]['search']['value']) and $values['columns'][7]['search']['value']!='')
			{
				$where.=" AND upper(Grueros.Celular) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][8]['search']['value']) and $values['columns'][8]['search']['value']!='')
			{
				$where.=" AND upper(gr.Disponible) like ('%".$values['columns'][2]['search']['value']."%')";
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
			$q = $ConnectionAws->getConnect()->Grueros
			->select("*")
			->join('Gruas','LEFT JOIN Gruas gr ON gr.idGrua= Grueros.idGrua')
            ->order("$column_order $order")
			->where("$where")
			->limit($limit,$offset);
			return $q; 				
			
		}
		public function getCountGruerosList($values)
		{	
			$where = " 1 = 1";
			if(isset($values['search']['value']) and $values['search']['value'] !='')
			{	
				$str = $values['search']['value'];
				$where.=" ";
			}
            $ConnectionAws = new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Grueros
			->select("count(*) as cuenta")
			->join('Gruas','LEFT JOIN Gruas gr ON gr.idGrua= Grueros.idGrua')
			->where("$where")->fetch();    
			return $q['cuenta']; 			
		}
		function updateMonto($values){			

 			$idSolicitud =  $values['idSolicitud'];
			$array_solicitud = array(
				'Monto' => $values['MontoNuevo'],
				'MontoAnterior' => $values['Monto'],
				'MotivoMonto' => $values['MotivoMonto'],
			);
			
			$ConnectionAws = new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Solicitudes("idSolicitud", $idSolicitud)->update($array_solicitud);
			return $q;
			
		}
	}
	