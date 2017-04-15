<?php include("../../autoload.php");?>	
<?php include("validator.php");?>
<?php include("../security/security.php");?>

<?php $action = "";
setlocale(LC_NUMERIC,"es_ES.UTF8");
if(isset($_REQUEST["action"]) and $_REQUEST["action"]!=""){
	$action = $_REQUEST["action"];
}
            $PDFPagos = new PDFPagos();
            $pdf = $PDFPagos->cuadroTUGRUERO(array('idSolicitudPlan'=> 1));
$values = $_REQUEST;
$values = array_merge($values,$_FILES);
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
		case "update":
			executeUpdate($values);	
		break;		
		case "list_json":
			executeListJson($values);	
		break;
		case "aprobar":
			executeAprobar($values);	
		break;
		case "rechazar":
			executeRechazar($values);	
		break; 
		default:
			executeIndex($values);
		break;
	}
	function executeIndex($values = null,$errors = null)
	{
		require('list_view.php');
	}
	function executeNew($values = null)
	{       
        $values['status'] = '1';
		$values['action'] = 'add';
		require('form_view.php');
	}
	function executeSave($values = null)
	{
		$SolicitudPlan = new SolicitudPlan();
		$values = $SolicitudPlan->saveSolicitudPlan($values);
		executeEdit($values,message_created);die;
	}
	function executeEdit($values = null,$msg = null, $errors = null)
	{
		
		$SolicitudPlan = new SolicitudPlan();
		//print_r($values);die;
		$values = $SolicitudPlan->getSolicitudPlanById($values);
		
		$values['action'] = 'update';
		$values['msg'] = $msg;
		
		require('form_view.php');
	}
	function executeUpdate($values = null)
	{
		$SolicitudPlan = new SolicitudPlan();
                
                $errors = validate($values);
                if(count($errors)>0){
                   executeEdit($values,null,$errors); 
                }else{
                    $SolicitudPlan->updateSolicitudPlan($values);
                    subirDocumentos($values,$_FILES);
                    executeEdit($values,message_updated);die;   
                }
                

	}	
	function executeListJson($values)
	{
		$SolicitudPlan = new SolicitudPlan();
		$list_json = $SolicitudPlan ->getSolicitudPlanList($values);
		$list_json_cuenta = $SolicitudPlan ->getCountSolicitudPlanList($values);
		$array_json = array();
		$array_json['recordsTotal'] = $list_json_cuenta;
		$array_json['recordsFiltered'] = $list_json_cuenta;
		if(count($list_json)>0)
		{
			foreach ($list_json as $list) 
			{
				$idSolicitudPlan = $list['idSolicitudPlan'];
				$status = $list['status'];
				if($status == 'Desactivado')
				{
					$message_status = "<label class='label label-danger'>Desactivado</label>";
				}
				if($status == 'Activo')
				{
					$message_status = "<label class='label label-success'>Activo</label>";
				}
				
				
				if($list['EstatusAbr']!="ACT")
				{
					$array_json['data'][] = array(
						"idSolicitudPlan" => $idSolicitudPlan,
						"Nombres" => $list['Nombres'],
						"Apellidos" => $list['Apellidos'],
						"Cedula" => $list['Cedula'],
						"Plan" => $list['concatenado_plan'],
						"Rif" => $list['Rif'],
						"PrecioTotal" => number_format($list['PrecioTotal'],2,",","."),
						"Estatus" => $list['Estatus'],
											"FechaSolicitud" => $list['FechaSolicitud'],
											"TipoPago" => $list['TipoPago'],
											"actions" => 
										   '<form method="POST" action = "'.full_url.'/adm/solicitud_plan/index.php" >'
										   .'<input type="hidden" name="action" value="edit">  '
										   .'<input type="hidden" name="idSolicitudPlan" value="'.$idSolicitudPlan.'">  '
										   .'<button class="btn btn-default btn-sm" title="Ver detalle" type="submit"><i class="fa fa-edit  fa-pull-left fa-border"></i></button>'                                       
											.'</form>'
						);	
				}else
				{
					$array_json['data'][] = array(
						"idSolicitudPlan" => $idSolicitudPlan,
						"Nombres" => $list['Nombres'],
						"Apellidos" => $list['Apellidos'],
						"Cedula" => $list['Cedula'],
						"Plan" => $list['concatenado_plan'],
						"Rif" => $list['Rif'],
						"PrecioTotal" => number_format($list['PrecioTotal'],2,",","."),
						"Estatus" => $list['Estatus'],
											"FechaSolicitud" => $list['FechaSolicitud'],
											"TipoPago" => $list['TipoPago'],
											"actions" => 
										   '<form method="POST" action = "'.full_url.'/adm/solicitud_plan/index.php" >'
										   .'<input type="hidden" name="action" value="edit">  '
										   .'<input type="hidden" name="idSolicitudPlan" value="'.$idSolicitudPlan.'">  '
										   .'<button class="btn btn-default btn-sm" title="Ver detalle" type="submit"><i class="fa fa-edit  fa-pull-left fa-border"></i></button>'                                       
											.'<a href="'.full_url.'/web/files/Cuadros/'.$list['NumProducto'].'.pdf" class="btn btn-default" target="_blank" title="Imprimir Cuadro"><i class="fa fa-file-pdf-o  fa-pull-left fa-border"></i></a>'
											.'</form>'
						);	
				}

			}		
		}else{
			$array_json['recordsTotal'] = 0;
			$array_json['recordsFiltered'] = 0;
			$array_json['data'][0] = array(
				"idSolicitudPlan"=>null,
				"Nombres"=>"",
				"Apellidos"=>"",
                                "Cedula"=>"",
                                "Plan"=>"",
                                "Rif"=>"",
                                "PrecioTotal" =>"",
                                "Estatus" => "",
                                "FechaSolicitud" => "",
                                "TipoPago" => "",
				"actions"=>"");
		}
		echo json_encode($array_json);die;
		
	}
        function subirDocumentos($values,$files){
        $SolicitudDocumentos = new SolicitudDocumentos; 
        $idSolicitudPlan = $values['idSolicitudPlan'];
	$carpeta = "../../web/files/Solicitudes";
	$fichero_subido = $carpeta."/";
           // print_r($_FILES);die;
            if(isset($files['CedulaDoc']) and $files['CedulaDoc']['size']>0){
                $nombreArchivo = "Cedula_".$values['idSolicitudPlan'].".".pathinfo($_FILES['CedulaDoc']['name'],PATHINFO_EXTENSION);
                if (move_uploaded_file($files['CedulaDoc']['tmp_name'], $fichero_subido.$nombreArchivo)){
                    //inserto en bd;
                    $SolicitudDocumentos->updateSolicitudDocumentos($idSolicitudPlan, "Cedula", $nombreArchivo);
                }

            }
            if(isset($files['RifDoc']) and $files['RifDoc']['size']>0){
                $nombreArchivo = "Rif_".$values['idSolicitudPlan'].".".pathinfo($_FILES['RifDoc']['name'],PATHINFO_EXTENSION);
                if (move_uploaded_file($files['RifDoc']['tmp_name'], $fichero_subido.$nombreArchivo)){
                    //inserto en bd;
                    $SolicitudDocumentos->updateSolicitudDocumentos($idSolicitudPlan, "Rif", $nombreArchivo);
                }

            }
            if(isset($files['Licencia']) and $files['Licencia']['size']>0){
                $nombreArchivo = "Licencia_".$values['idSolicitudPlan'].".".pathinfo($_FILES['Licencia']['name'],PATHINFO_EXTENSION);
                if (move_uploaded_file($files['Licencia']['tmp_name'], $fichero_subido.$nombreArchivo)){
                    //inserto en bd;
                    $SolicitudDocumentos->updateSolicitudDocumentos($idSolicitudPlan, "Licencia", $nombreArchivo);
                }

            }
            if(isset($files['CarnetCirculacion']) and $files['CarnetCirculacion']['size']>0){
                $nombreArchivo = "CarnetCirculacion_".$values['idSolicitudPlan'].".".pathinfo($_FILES['CarnetCirculacion']['name'],PATHINFO_EXTENSION);
                if (move_uploaded_file($files['CarnetCirculacion']['tmp_name'], $fichero_subido.$nombreArchivo)){
                    $SolicitudDocumentos->updateSolicitudDocumentos($idSolicitudPlan, "CarnetCirculacion", $nombreArchivo);
                }

            }
            if(isset($files['CertificadoMedico']) and $files['CertificadoMedico']['size']>0){
                $nombreArchivo = "CertificadoMedico_".$values['idSolicitudPlan'].".".pathinfo($_FILES['CertificadoMedico']['name'],PATHINFO_EXTENSION);
                if (move_uploaded_file($files['CertificadoMedico']['tmp_name'], $fichero_subido.$nombreArchivo)){
                    $SolicitudDocumentos->updateSolicitudDocumentos($idSolicitudPlan, "CertificadoMedico", $nombreArchivo);
                }

            }
            if(isset($files['CertificadoOrigen']) and $files['CertificadoOrigen']['size']>0){
                $nombreArchivo = "CertificadoOrigen_".$values['idSolicitudPlan'].".".pathinfo($_FILES['CertificadoOrigen']['name'],PATHINFO_EXTENSION);
                if (move_uploaded_file($files['CertificadoOrigen']['tmp_name'], $fichero_subido.$nombreArchivo)){
                    $SolicitudDocumentos->updateSolicitudDocumentos($idSolicitudPlan, "CertificadoOrigen", $nombreArchivo);
                }

            }
            if(isset($files['DEP1']) and $files['DEP1']['size']>0){
                $nombreArchivo = "DEP1_".$values['idSolicitudPlan'].".".pathinfo($_FILES['DEP1']['name'],PATHINFO_EXTENSION);
                if (move_uploaded_file($files['DEP1']['tmp_name'], $fichero_subido.$nombreArchivo)){
                    $SolicitudDocumentos->updateSolicitudDocumentos($idSolicitudPlan, "Deposito/Transferencia", $nombreArchivo);
                }

            }
            if(isset($files['DEP2']) and $files['DEP2']['size']>0){
                $nombreArchivo = "DEP2_".$values['idSolicitudPlan'].".".pathinfo($_FILES['DEP2']['name'],PATHINFO_EXTENSION);
                if (move_uploaded_file($files['DEP2']['tmp_name'], $fichero_subido.$nombreArchivo)){
                    $SolicitudDocumentos->updateSolicitudDocumentos($idSolicitudPlan, "Deposito/Transferencia", $nombreArchivo);
                }

            }
            if(isset($files['DEP3']) and $files['DEP3']['size']>0){
                $nombreArchivo = "DEP3_".$values['idSolicitudPlan'].".".pathinfo($_FILES['DEP3']['name'],PATHINFO_EXTENSION);
                if (move_uploaded_file($files['DEP3']['tmp_name'], $fichero_subido.$nombreArchivo)){
                    $SolicitudDocumentos->updateSolicitudDocumentos($idSolicitudPlan, "Deposito/Transferencia", $nombreArchivo);
                }

            }
        }
        function executeAprobar($values){
            
            $idSolicitudPlan = $values['idSolicitudPlan'];
            $VigenciaDesde = $values['VigenciaDesde'];
            $VigenciaHasta = $values['VigenciaHasta'];
            $idSolicitudPlan = $values['idSolicitudPlan'];
            $SolicitudAprobada = new SolicitudAprobada();
            $SolicitudAprobada->aprobar($idSolicitudPlan, $VigenciaDesde, $VigenciaHasta);
            $PDFPagos = new PDFPagos();
            $pdf = $PDFPagos->cuadroTUGRUERO($values);
			$Mail = new Mail();
			$Mail->sendMessagePolizaBienvenida($values);
			
        }
        function executeRechazar($values){
            
            $Observacion = $values['Observacion'];
            $idSolicitudPlan = $values['idSolicitudPlan'];
            $SolicitudPlan = new SolicitudPlan();
            $SolicitudPlan->rechazarSolicitud($idSolicitudPlan,$Observacion);
            
        }
