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
                $Utilitarios = new Utilitarios();
			$columns = array();
			$columns[0] = 'SolicitudPlan.idSolicitudPlan';
			$columns[1] = 'SolicitudPlan.Nombres';
			$columns[2] = 'SolicitudPlan.Apellidos';
                        $columns[3] = 'SolicitudPlan.Cedula';
                        $columns[4] = 'SolicitudPlan.Rif';
                        $columns[5] = "CONCAT
				((
					SELECT Nombre  
					FROM SolicitudPlanSeleccion sps 
					INNER JOIN Planes p ON p.idPlan = sps.idPlan
					WHERE p.Tipo = 'tugruero.com'
					AND sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan
				),' / ',
				(	
					SELECT CONCAT(Nombre, ' ',Puestos, ' Puestos' )  
					FROM SolicitudPlanSeleccion sps 
					INNER JOIN Planes p ON p.idPlan = sps.idPlan
					WHERE p.Tipo = 'RCV'
					AND sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan
				))";
                        $columns[6] = "(SELECT  SUM(PrecioConIva) 
					FROM SolicitudPlanSeleccion sps 
					RIGHT JOIN Planes p ON p.idPlan = sps.idPlan
					WHERE sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan)";
                        $columns[7] = "(CASE WHEN TipoPago = 'TDC' THEN 'Tarjeta de crédito' ELSE 'Depósito o Transferencia')";

                        $columns[8] = "(CASE 
					WHEN Estatus = 'ENV' 
					THEN 'EN PROCESO DE VALIDACIÓN DE PAGO' 
					WHEN Estatus = 'ACT'
					THEN 'PLAN PAGADO Y ACTIVO'
					WHEN Estatus = 'REC'
					THEN 'RECHAZADO'
					END)";
                        $columns[9] = "(DATE_FORMAT(FechaSolicitud, '%d/%m/%Y'))";
			$column_order = $columns[0];
			$where = '1 = 1';
			$order = 'asc';
			$limit = $values['length'];
			$offset = $values['start'];
			
			if(isset($values['columns'][0]['search']['value']) and $values['columns'][0]['search']['value']!='')
			{
				$where.=" AND SolicitudPlan.idSolicitudPlan = ".$values['columns'][0]['search']['value']."";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(Nombres) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(Apellidos) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}					
			if(isset($values['columns'][3]['search']['value']) and $values['columns'][3]['search']['value']!='')
			{
				$where.=" AND upper(Cedula) like ('%".$values['columns'][3]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][4]['search']['value']) and $values['columns'][4]['search']['value']!='')
			{
				$where.=" AND upper(Rif) like ('%".$values['columns'][4]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][5]['search']['value']) and $values['columns'][5]['search']['value']!='')
			{
				$where.=" AND upper(CONCAT
				((
					SELECT Nombre  
					FROM SolicitudPlanSeleccion sps 
					INNER JOIN Planes p ON p.idPlan = sps.idPlan
					WHERE p.Tipo = 'tugruero.com'
					AND sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan
				),
				CASE WHEN(	
					SELECT CONCAT(Nombre, ' ',Puestos, ' Puestos' )  
					FROM SolicitudPlanSeleccion sps 
					INNER JOIN Planes p ON p.idPlan = sps.idPlan
					WHERE p.Tipo = 'RCV'
					AND sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan
				) IS NULL THEN '' ELSE (SELECT CONCAT(' / ',Nombre, ' ',Puestos, ' Puestos' )  
					FROM SolicitudPlanSeleccion sps 
					INNER JOIN Planes p ON p.idPlan = sps.idPlan
					WHERE p.Tipo = 'RCV'
					AND sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan)
				

				END)) like ('%".$values['columns'][5]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][6]['search']['value']) and $values['columns'][6]['search']['value']!='')
			{
				$where.=" AND ((SELECT  SUM(PrecioConIva) 
					FROM SolicitudPlanSeleccion sps 
					RIGHT JOIN Planes p ON p.idPlan = sps.idPlan
					WHERE sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan)) >= '".$values['columns'][6]['search']['value']."' ";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][7]['search']['value']) and $values['columns'][7]['search']['value']!='')
			{
				$where.=" AND upper(CASE WHEN TipoPago = 'TDC' THEN 'Tarjeta de crédito' ELSE 'Depósito o Transferencia' END) like UPPER(('%".$values['columns'][7]['search']['value']."%'))";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][8]['search']['value']) and $values['columns'][8]['search']['value']!='')
			{
				$where.=" AND upper(CASE 
					WHEN Estatus = 'ENV' 
					THEN 'EN PROCESO DE VALIDACIÓN DE PAGO' 
					WHEN Estatus = 'ACT'
					THEN 'PLAN PAGADO Y ACTIVO'
					WHEN Estatus = 'REC'
					THEN 'RECHAZADO'
					END) like ('%".$values['columns'][8]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
                	if(isset($values['columns'][9]['search']['value']) and $values['columns'][9]['search']['value']!='')
			{
                                $FechaSolicitud = $values['columns'][9]['search']['value'];
                                
                                $FechaSolicitud = $Utilitarios->formatFechaInput($FechaSolicitud);
                                
				$where.=" AND FechaSolicitud >=  '".$FechaSolicitud."'";
				//echo $values['columns'][0]['search']['value'];die;
			}

			if(isset($values['order'][0]['column']) and $values['order'][0]['column']!='0')
			{
                                $column_order = $columns[$values['order'][0]['column']];
			}else{
                                $column_order = " FechaSolicitud ";
                        }
			if(isset($values['order'][0]['dir']) and $values['order'][0]['dir']!='0')
			{
				$order = $values['order'][0]['dir'];//asc o desc
			}else{
                           
                            $order = " desc ";
                        }
			//echo $column_order;die;
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect('tugruero')->SolicitudPlan
			->select("*,SolicitudPlan.idSolicitudPlan,DATE_FORMAT(FechaSolicitud, '%d/%m/%Y') as FechaSolicitud,
				CASE 
					WHEN Estatus = 'ENV' 
					THEN 'EN PROCESO DE VALIDACIÓN DE PAGO' 
					WHEN Estatus = 'ACT'
					THEN 'PLAN PAGADO Y ACTIVO'
					WHEN Estatus = 'REC'
					THEN 'RECHAZADO'
					END AS Estatus,
				CONCAT
				((
					SELECT Nombre  
					FROM SolicitudPlanSeleccion sps 
					INNER JOIN Planes p ON p.idPlan = sps.idPlan
					WHERE p.Tipo = 'tugruero.com'
					AND sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan
				),
				CASE WHEN(	
					SELECT CONCAT(Nombre, ' ',Puestos, ' Puestos' )  
					FROM SolicitudPlanSeleccion sps 
					INNER JOIN Planes p ON p.idPlan = sps.idPlan
					WHERE p.Tipo = 'RCV'
					AND sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan
				) IS NULL THEN '' ELSE (SELECT CONCAT(' / ',Nombre, ' ',Puestos, ' Puestos' )  
					FROM SolicitudPlanSeleccion sps 
					INNER JOIN Planes p ON p.idPlan = sps.idPlan
					WHERE p.Tipo = 'RCV'
					AND sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan)
				

				END) AS concatenado_plan,

				(SELECT  SUM(PrecioConIva) 
					FROM SolicitudPlanSeleccion sps 
					RIGHT JOIN Planes p ON p.idPlan = sps.idPlan
					WHERE sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan) AS PrecioTotal,
                                CASE WHEN TipoPago = 'TDC' THEN 'Tarjeta de crédito' ELSE 'Depósito o Transferencia'  END AS TipoPago
				")
			->where("$where and SolicitudPlan.idSolicitudPlan IN(SELECT idSolicitudPlan FROM SolicitudPlanSeleccion)")
			->join("SolicitudPagoDetalle","LEFT JOIN SolicitudPagoDetalle spd on spd.idSolicitudPlan = SolicitudPlan.idSolicitudPlan")
			->order("$column_order $order")			
			->limit($limit,$offset);
			//echo $q;die;
			return $q; 			
		}
		public function getCountSolicitudPlanList($values)
		{	
                        $Utilitarios = new Utilitarios();
			$where = '1 = 1';
			if(isset($values['columns'][0]['search']['value']) and $values['columns'][0]['search']['value']!='')
			{
				$where.=" AND SolicitudPlan.idSolicitudPlan = ".$values['columns'][0]['search']['value']."";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][1]['search']['value']) and $values['columns'][1]['search']['value']!='')
			{
				$where.=" AND upper(Nombres) like ('%".$values['columns'][1]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][2]['search']['value']) and $values['columns'][2]['search']['value']!='')
			{
				$where.=" AND upper(Apellidos) like ('%".$values['columns'][2]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}					
			if(isset($values['columns'][3]['search']['value']) and $values['columns'][3]['search']['value']!='')
			{
				$where.=" AND upper(Cedula) like ('%".$values['columns'][3]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}			
			if(isset($values['columns'][4]['search']['value']) and $values['columns'][4]['search']['value']!='')
			{
				$where.=" AND upper(Rif) like ('%".$values['columns'][4]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][5]['search']['value']) and $values['columns'][5]['search']['value']!='')
			{
				$where.=" AND upper(CONCAT
				((
					SELECT Nombre  
					FROM SolicitudPlanSeleccion sps 
					INNER JOIN Planes p ON p.idPlan = sps.idPlan
					WHERE p.Tipo = 'tugruero.com'
					AND sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan
				),' / ',
				(	
					SELECT CONCAT(Nombre, ' ',Puestos, ' Puestos' )  
					FROM SolicitudPlanSeleccion sps 
					INNER JOIN Planes p ON p.idPlan = sps.idPlan
					WHERE p.Tipo = 'RCV'
					AND sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan
				))) like ('%".$values['columns'][5]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][6]['search']['value']) and $values['columns'][6]['search']['value']!='')
			{
				$where.=" AND ((
					SELECT  PrecioConIva  
					FROM SolicitudPlanSeleccion sps 
					INNER JOIN Planes p ON p.idPlan = sps.idPlan
					WHERE p.Tipo = 'RCV'
					AND sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan
				) +
				(
					SELECT PrecioConIva  
					FROM SolicitudPlanSeleccion sps 
					INNER JOIN Planes p ON p.idPlan = sps.idPlan
					WHERE p.Tipo = 'tugruero.com'
					AND sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan
				)) >= '".$values['columns'][6]['search']['value']."' ";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][7]['search']['value']) and $values['columns'][7]['search']['value']!='')
			{
				$where.=" AND upper(CASE WHEN TipoPago = 'TDC' THEN 'Tarjeta de crédito' ELSE 'Depósito o Transferencia' END) like UPPER(('%".$values['columns'][7]['search']['value']."%'))";
				//echo $values['columns'][0]['search']['value'];die;
			}
			if(isset($values['columns'][8]['search']['value']) and $values['columns'][8]['search']['value']!='')
			{
				$where.=" AND upper(CASE 
					WHEN Estatus = 'ENV' 
					THEN 'EN PROCESO DE VALIDACIÓN DE PAGO' 
					WHEN Estatus = 'ACT'
					THEN 'PLAN PAGADO Y ACTIVO'
					WHEN Estatus = 'REC'
					THEN 'RECHAZADO'
					END) like ('%".$values['columns'][8]['search']['value']."%')";
				//echo $values['columns'][0]['search']['value'];die;
			}
                	if(isset($values['columns'][9]['search']['value']) and $values['columns'][9]['search']['value']!='')
			{
                                $FechaSolicitud = $values['columns'][9]['search']['value'];
                                
                                $FechaSolicitud = $Utilitarios->formatFechaInput($FechaSolicitud);
                                
				$where.=" AND FechaSolicitud =  '".$FechaSolicitud."'";
				//echo $values['columns'][0]['search']['value'];die;
			}
            $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->SolicitudPlan
			->select("count(*) as cuenta")
			->where("$where and SolicitudPlan.idSolicitudPlan IN(SELECT idSolicitudPlan FROM SolicitudPlanSeleccion)")
			->join("SolicitudPagoDetalle","LEFT JOIN SolicitudPagoDetalle spd on spd.idSolicitudPlan = SolicitudPlan.idSolicitudPlan")
			->fetch();
			return $q['cuenta']; 			
		}
		public function getSolicitudPlanById($values){
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->SolicitudPlan
			->select("*, 
			(
				SELECT pl.idPlan
				FROM SolicitudPlanSeleccion sps 
				INNER JOIN Planes pl ON pl.idPlan = sps.idPlan
				WHERE sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan 	
				AND Tipo = 'tugruero.com'
			) AS idPlan,

                        CASE WHEN ( 
                                SELECT pl.idPlan
                                FROM SolicitudPlanSeleccion sps 
                                INNER JOIN Planes pl ON pl.idPlan = sps.idPlan 
                                WHERE sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan 
                                AND Tipo = 'RCV' 
                        ) IS NULL THEN 'NO' ELSE 'SI' END AS RCV,
                        ( 
                                SELECT pl.Puestos
                                FROM SolicitudPlanSeleccion sps 
                                INNER JOIN Planes pl ON pl.idPlan = sps.idPlan 
                                WHERE sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan 
                                AND Tipo = 'RCV' 
                        ) AS Puestos,
                        TipoPago AS MET,
                        (SELECT SUM(PrecioConIva) FROM SolicitudPlanSeleccion s WHERE s.idSolicitudPlan = SolicitudPlan.idSolicitudPlan) AS precio 
                        ")
			->where("SolicitudPlan.idSolicitudPlan=?",$values['idSolicitudPlan'])
			//echo $q;die;
			->fetch();
			return $q; 				
			
		}		
		function saveSolicitudPlan($values){
                        
                        
			$array_solicitud_plan = array(
				'Nombres' => @$values['Nombres'],
				'Apellidos' => @$values['Apellidos'],
                'Correo' => @$values['Correo'],
                'Cedula' => @strtoupper($values['Cedula']),
				'Rif' => @strtoupper($values['Rif']),
                'Estado' => 'aaa',
                'Telefono' => @$values['Telefono'],
				'Celular' => @$values['Celular'],
                                'FechaSolicitud' => date('Y-m-d h:i:s'),
				'TipoPago' => @$values['MET'],
                                'NumeroTransaccion' => '0',
                                'Marca' => @$values['Marca'],
                                'Modelo' => @$values['Modelo'],
                                'Anio' => @$values['Anio'],
                                'Color' => @$values['Color'],
                                'Placa' => @$values['Placa'],
                                'Puestos' => @$values['Puestos'],
                                'Estatus' => 'ENV',
                                'TotalSinIva' => '0',
				'TotalConIva' => '0',
                                'PagoRealizado' => @$values['PagoRealizado'],
			);
			 
               
			try{
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->SolicitudPlan()->insert($array_solicitud_plan);
			$values['idSolicitudPlan'] = $ConnectionORM->getConnect()->SolicitudPlan()->insert_id();
            //almaceno los plens contratados en la solicitud
			
			$array_planes = array($values['idPlan']);
			$Planes = new Planes();
			if(isset($values['RCV']) and $values['RCV']=='SI' and isset($values['Puestos'])){
				
				$id_plan_rcv = $Planes->getIdPlanRCV($values['Puestos']);
                                if($id_plan_rcv > 0){
                                    $array_planes[] = $id_plan_rcv;
                                }
				

			}
			$TotalSinIva = 0;
                        $TotalConIva = 0;
			//print_r($array_planes);
				foreach($array_planes as $plan){
                                                $IVA = $Planes->getIvaPlan($plan);
						$PrecioSinIva = $Planes->getPrecioPlan($plan);
						$PrecioConIva = $Planes->getPrecioPlan($plan);
                                                
                                                if($IVA=='S'){
                                                    $PrecioConIva = $Planes->getPrecioPlan($plan) * IVA;
                                                }
                                                $TotalSinIva = $TotalSinIva + $PrecioSinIva;
                                                $TotalConIva = $TotalConIva + $PrecioConIva;
                                                $array_solicitud_plan_seleccion = array();
						$array_solicitud_plan_seleccion['idSolicitudPlan'] = $values['idSolicitudPlan'];
						$array_solicitud_plan_seleccion['idPlan'] = $plan;
						$array_solicitud_plan_seleccion['PrecioSinIva'] = $PrecioSinIva;
						$array_solicitud_plan_seleccion['PrecioConIva'] = $PrecioConIva;
						$array_solicitud_plan_seleccion['FechaSolicitud'] = date('Y-m-d h:i:s');
						$q = $ConnectionORM->getConnect()->SolicitudPlanSeleccion()->insert($array_solicitud_plan_seleccion);
						
				}			
                        //actualizo la solicicitud para colocarle el total del precio con y sin IVA
			$this->updatePrecios($TotalConIva,$TotalSinIva,$values['idSolicitudPlan']);
			}catch(Exception $e){
				echo $e->getMessage();die;
			}
                        

			return $values;	
			
		}
		function updateSolicitudPlan($values){			
	$array_solicitud_plan = array(
				'Nombres' => @$values['Nombres'],
				'Apellidos' => @$values['Apellidos'],
                                'Correo' => @$values['Correo'],
                                'Cedula' => @strtoupper($values['Cedula']),
				'Rif' => @strtoupper($values['Rif']),
                                'Estado' => 'aaa',
                                'Telefono' => @$values['Telefono'],
				'Celular' => @$values['Celular'],
                                'Marca' => @$values['Marca'],
                                'Modelo' => @$values['Modelo'],
                                'Anio' => @$values['Anio'],
                                'Color' => @$values['Color'],
                                'Placa' => @$values['Placa'],
                                'Puestos' => @$values['Puestos']
                                
			);
		
			$idSolicitudPlan = $values['idSolicitudPlan'];
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->SolicitudPlan("idSolicitudPlan", $idSolicitudPlan)->update($array_solicitud_plan);	

			
			return $q;
			
		}

		function updatePrecios($TotalConIva,$TotalSinIva,$idSolicitudPlan ){			
			$array = array(
				'TotalConIva' => $TotalConIva,
				'TotalSinIva' => $TotalSinIva
			);
					
			$ConnectionORM = new ConnectionORM();
			$ConnectionAws = new ConnectionAws();
			$q = $ConnectionORM->getConnect()->SolicitudPlan("idSolicitudPlan", $idSolicitudPlan)->update($array);	
                }
		function updatePagoRealizado($idSolicitudPlan,$PagoRealizado){			
			$array = array(
				'PagoRealizado' => $PagoRealizado,
			);
					
			$ConnectionORM = new ConnectionORM();
			$ConnectionAws = new ConnectionAws();
			$q = $ConnectionORM->getConnect()->SolicitudPlan("idSolicitudPlan", $idSolicitudPlan)->update($array);	
                }
		public function getSolicitudPorPlaca($values){
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->SolicitudPlan
			->select("count(*) as cuenta")
			->where("SolicitudPlan.Placa=?",$values['Placa'])
                        ->and('Estatus=?','ENV')
			//echo $q;die;
			->fetch();
			return $q['cuenta']; 				
			
		}
                public function getSolicitudPlanInfo($idSolicitudPlan){
                       $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect('tugruero')->SolicitudPlan
			->select("*,SolicitudPlan.idSolicitudPlan,DATE_FORMAT(FechaSolicitud, '%d/%m/%Y') as FechaSolicitud,
				CASE 
					WHEN Estatus = 'ENV' 
					THEN 'EN PROCESO DE VALIDACIÓN DE PAGO' 
					WHEN Estatus = 'ACT'
					THEN 'PLAN PAGADO Y ACTIVO'
					WHEN Estatus = 'REC'
					THEN 'RECHAZADO'
					END AS Estatus,
				CONCAT
				((
					SELECT Nombre  
					FROM SolicitudPlanSeleccion sps 
					INNER JOIN Planes p ON p.idPlan = sps.idPlan
					WHERE p.Tipo = 'tugruero.com'
					AND sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan
				),
				CASE WHEN(	
					SELECT CONCAT(Nombre, ' ',Puestos, ' Puestos' )  
					FROM SolicitudPlanSeleccion sps 
					INNER JOIN Planes p ON p.idPlan = sps.idPlan
					WHERE p.Tipo = 'RCV'
					AND sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan
				) IS NULL THEN '' ELSE (SELECT CONCAT(' / ',Nombre, '' )  
					FROM SolicitudPlanSeleccion sps 
					INNER JOIN Planes p ON p.idPlan = sps.idPlan
					WHERE p.Tipo = 'RCV'
					AND sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan)
				

				END) AS concatenado_plan,

				(SELECT  SUM(PrecioConIva) 
					FROM SolicitudPlanSeleccion sps 
					RIGHT JOIN Planes p ON p.idPlan = sps.idPlan
					WHERE sps.idSolicitudPlan = SolicitudPlan.idSolicitudPlan) AS PrecioTotal,
                                CASE WHEN TipoPago = 'TDC' THEN 'Tarjeta de crédito' ELSE 'Depósito o Transferencia'  END AS TipoPago
				")
			->where("SolicitudPlan.idSolicitudPlan=?",$idSolicitudPlan)
			->join("SolicitudPagoDetalle","LEFT JOIN SolicitudPagoDetalle spd on spd.idSolicitudPlan = SolicitudPlan.idSolicitudPlan")
                        ->fetch();
                        
                        return $q;
                }
                
	}
			

	