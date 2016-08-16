<?php include("../../autoload.php");?>	
<?php //include("validator.php");?>
<?php //include("../security/security.php");?>

<?php $action = "";

if(isset($_REQUEST["action"]) and $_REQUEST["action"]!=""){
	$action = $_REQUEST["action"];
}

$values = $_REQUEST;
	switch ($action) {
		case "index":
			executeIndex($values);	
		break;
		case "new":
			executeNew($values);	
		break;
		case "add":
			executeSave($values);	
		break;
		case "edit":
			executeEdit($values);	
		break;
		case "list_json":
            executeListJson($values);	
		break;
		case "livemap":
            executeLivemap($values);	
		break;
		case "json_test":
            executeJsonTest($values);	
		break;
		case "solicitud_livemap":
            executeSolicitudLivemap($values);	
		break;
		case "json_solicitud_livemap":
            executeJsonSolicitudLivemap($values);	
		break;	
		case "bitacora_list":
            executeBitacoraList($values);	
		break;
		case "save_bitacora":
            executeSaveBitacora($values);	
		break;
		case "simulador_view":
            executeSimuladorView($values);	
		break;	
		default:
			executeIndex($values);
		break;
	}
	function executeIndex($values = null)
        {       

                
		require('list_view.php');
	}
	function executeListJson($values)
	{	
		$Utilitarios = new Utilitarios();
		$Solicitud = new Solicitud();
                $Bitacora = new Bitacora();
		$list_json = $Solicitud ->getSolicitudesActivasList($values);
		$list_json_cuenta = $Solicitud ->getCountSolicitudesActivasList($values);
		$array_json = array();
		$array_json['recordsTotal'] = $list_json_cuenta;
		$array_json['recordsFiltered'] = $list_json_cuenta;
		if(count($list_json)>0)
		{
			foreach ($list_json as $list) 
			{
				
				$end_time = date(gmdate('d/m/Y H:i:s', time() - (4 * 3600)));
				$start_time = $list['laststatussolicitud'];
				$minutos_transcurridos = $Utilitarios->calcula_tiempo_minutos($start_time, $end_time);
				$status_desierto = 0;
				$retardo_activo_activo  = 0;
				//echo $minutos_transcurridos;die;
				if(($minutos_transcurridos >=2 or $list['numgruas'] == 0)  and ($list['estatus'] == 'Localizando' and $list['proviene'] == 'WEB'))
				{
					
					//actualizar a status desierto
					$Solicitud->updateStatusDesierto($list);
					$list['estatus'];
					//$status_desierto = 1;
				}
				//valido que el tiempo de encontrar el gruero al cliente no sea mayor a 20 minutos
				if($list['estatuscliente']=='Activo' and $list['estatusgrua']=='Activo')
				{
					$start_time = $list['laststatusgrua'];
					$minutos_transcurridos_retardo = $Utilitarios->calcula_tiempo_minutos($start_time, $end_time);
					if($minutos_transcurridos_retardo >=20)
					{
						$retardo_activo_activo = 1;
					}
					
				}
				//echo $minutos;die;
                                
				$idSolicitud = $list['idsolicitud'];
				$idPoliza = $list['idpoliza'];
                                $count_bitacora = $Bitacora->getCountBitacoraByIdSolicitud($idSolicitud);

				$array_json['data'][] = array(
					"idSolicitud" => $idSolicitud,
					"idPoliza" => $list['idpoliza'],
					"Origen" => $list['proviene'],
					"Cedula" => $list['cedula'],
					"Placa" => $list['placa'],
					"EstatusSolicitud" => $list['estatus'],
					"EstatusCliente" => $list['estatuscliente'],
                    "EstatusGrua" => $list['estatusgrua'],
					"TimeOpen" => $list['timeopen'],
                    "TimeInicio" => $list['timeinicio'],
					"StatusDesierto" => $status_desierto,
					"RetardoActivoActivo" => $retardo_activo_activo,
					
					"actions" => 
										'<form method="POST" action = "'.full_url.'/solope/solicitud/index.php" >'
										.'<input type="hidden" name="action" value="edit">  '
										.'<input type="hidden" name="idSolicitud" value="'.$idSolicitud.'">  '
                                       
										.'<button class="btn btn-default btn-sm" title="Ver detalle" type="submit"><i class="fa fa-edit  fa-pull-left fa-border"></i></button>'                                       
                                       .' <a href="'.full_url.'/solope/solicitud/index.php?action=simulador_view&idSolicitud='.$idSolicitud.'" class="btn btn-default btn-sm" title="Simulador de servicio"><i class="fa fa-headphones  fa-pull-left fa-border"></i></a>'
										.' <a class="badge" title="Agregar/Ver bitácora" onclick="addBitacora('.$idSolicitud.')">'.$count_bitacora.'</a>'
										.'</form>'
					);	
			}		
		}else{
			$array_json['recordsTotal'] = 0;
			$array_json['recordsFiltered'] = 0;
			$array_json['data'][0] = array("idSolicitud"=>null,"idPoliza"=>"","Origen"=>"","Cedula"=>"","Placa"=>"","EstatusSolicitud"=>"","EstatusCliente"=>"","EstatusGrua"=>"","TimeOpen"=>'',"TimeInicio"=>"","RetardoActivoActivo"=>'',"StatusDesierto"=>'',"actions"=>"");
		}
		echo json_encode($array_json);die;
		
	}
	function executeNew($values)
	{
		$values['action'] = 'add';
		require('maps.php');
	}
	function executeLivemap($values)
	{
		require('livemap.php');
	}
	function executeJsonTest($values)
	{
		$arr = array ();
		$Solicitud = new Solicitud();
		
		$grueros_online = $Solicitud->getGruerosOnline();
		if(count($grueros_online)>0)
		{
			foreach($grueros_online as $online)
			{	
				$iconcolor = 'green';
				$contentinfo = ''
					. '<label>Cédula: </label> '.$online['cedula'].'<br>'
					. '<label>Nombre y apellido: </label> '.$online['nombre'].' '.$online['apellido'].'<br>'
					. '<label>Contacto: </label> '.$online['celular'].'<br>'
					. '<label>Modelo: </label> '.$online['modelo'].'<br>'
					. '<label>Placa: </label> '.$online['placa'].'<br>'
					. '<label>Color: </label> '.$online['color'].'<br>'
					
					;
				
				
				
				
				$arr[] = array("title"=>$online['nombre'],"lat"=>$online['latitud'],"lng"=>$online['longitud'],"description"=>"Prueba","contentinfo"=>$contentinfo,"iconcolor" => $iconcolor);
			}
			
		}

		echo json_encode($arr); // {"a":1,"b":2,"c":3,"d":4,"e":5}		
	}
	function executeSolicitudLivemap($values)
	{
		require('solicitudlivemap.php');
	}
	function executeJsonSolicitudLivemap($values)
	{
		//$values['idSolicitud'] = 218;
		$idSolicitud = $values['idSolicitud'];
		$Solicitud = new Solicitud();
		$data = $Solicitud->getDatosSolicitud($values);
		
		$arr = array (array());
		$iconcolor = 'green';
		
		
		if(isset($data['idsolicitud']) and $data['idsolicitud']!='')
		{
			$latOrigen = $data['latorigen'];
			$lngOrigen = $data['lngorigen'];
			$latDestino = $data['latdestino'];
			$lngDestino = $data['lngdestino'];
			$latGrua = $data['latgrua'];
			$lngGrua = $data['lnggrua'];
			
				//centrar mapa
			
				$arr[0][0] = array("id"=>"0","latCenter"=>"$latOrigen","lngCenter"=>"$lngOrigen");
			
				//Cliente
				
				$arr[0][1] = array(
					"id"=>"1","idSolicitud"=>$idSolicitud,"label"=>"C","title"=>'Cliente',"lat"=>$latOrigen,"lng"=>$lngOrigen,"description"=>"Prueba","contentinfo"=>"<label>IdSolicittud:</label> $idSolicitud<br>Cliente","iconcolor" => "red");
				//Destino
				$arr[0][2] = array("id"=>"2","idSolicitud"=>$idSolicitud,"label"=>"D","title"=>'Destino',"lat"=>$latDestino,"lng"=>$lngDestino,"description"=>"Prueba","contentinfo"=>"<label>IdSolicittud:</label> $idSolicitud<br>Destino","iconcolor" => "blue");	
				//Gruero
				
				if($data['estatusgrua']!='' or $data['estatusgrua']!=null)
				{
					$arr[0][3] = array("id"=>"1","idSolicitud"=>$idSolicitud,"label"=>"G","title"=>'Gruero',"lat"=>"$latGrua","lng"=>$lngGrua,"description"=>"Prueba","contentinfo"=>"<label>IdSolicittud:</label> $idSolicitud<br>Gruero ","iconcolor" => "green");			
				}
				//El gruero llegó al lugar del cliente y se convierten en un solo circulo
				if(isset($data['estatusgrua']) and ($data['estatusgrua'] == 'Asistiendo' ))
				{
					unset($arr[0][1],$arr[0][3]);
					$arr[0][3] = array("id"=>"1","idSolicitud"=>$idSolicitud,"label"=>"G","title"=>'Gruero',"lat"=>"$latGrua","lng"=>$lngGrua,"description"=>"Prueba","contentinfo"=>"<label>IdSolicittud:</label> $idSolicitud<br>Gruero ","iconcolor" => "yellow");			

				}
				//el gruero llegó al destino y el cliente lleno la encuesta
				
				if(isset($data['estatuscliente']) and ($data['estatuscliente'] == 'Completado' ))
				{
					unset($arr[0][1],$arr[0][3]);
					$arr[0][2] = array("id"=>"2","idSolicitud"=>$idSolicitud,"label"=>"D","title"=>'Destino',"lat"=>$latDestino,"lng"=>$lngDestino,"description"=>"Prueba","contentinfo"=>"<label>IdSolicittud:</label> $idSolicitud<br>Destino","iconcolor" => "blue");	

				}

				echo json_encode($arr); // {"a":1,"b":2,"c":3,"d":4,"e":5}				
		}
	
	}
	function executeBitacoraList($values)
	{
            $Bitacora = new Bitacora();
            $data_list = $Bitacora->getBitacoraList($values);
            require('bitacora_list.php');
	}
	function executeSaveBitacora($values)
	{
            $Bitacora = new Bitacora();
            $Bitacora->insertBitacora($values);
            die;
            //require('bitacora_list.php');
	}
	function executeSimuladorView($values)
	{
			$Solicitud = new Solicitud();
			
			
			if(isset($values['ind']) and $values['ind']==1)//ind = 1 significa cambio de estatus en todas las tablas
			{
				//echo $values['idSolicitud'];die;
				if(isset($values['estatus']) and isset($values['estatus_cambiar']))
				{
					//cambio de estatus en la solicitud
					$Solicitud->updateEstatusSolicitud($values);
				}
				if(isset($values['estatuscliente']) and isset($values['estatuscliente']))
				{
					//cambio de estatus en la solicitud
					$Solicitud->updateEstatusServicioCliente($values);
				}
				if(isset($values['estatusgrua']) and isset($values['estatusgrua_cambiar']))
				{
					//cambio de estatus en la solicitud
					$Solicitud->updateEstatusServicioGrua($values);
				}				
			}
			if(isset($values['ind']) and $values['ind']==2)//ind = 2 significa creación de servicio
			{
				if(isset($values['idPoliza']) and isset($values['idSolicitud']) and isset($values['idGrua']))
				{
					
					//genero el servicio
					$Solicitud->insertServicio($values);
				}			
			}			
			
			$data = $Solicitud->getDatosSolicitud($values);
            require('simulador_view.php');
	}