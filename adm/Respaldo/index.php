<?php include("../../autoload.php");?>
<?php //include("validator.php");?>
<?php include("../security/security.php");?>

<?php $action = "";

if(isset($_REQUEST["action"]) and $_REQUEST["action"]!=""){
	$action = $_REQUEST["action"];
}

$values = $_REQUEST;
$values = array_merge($values,$_FILES);
	switch ($action) {
		case "index":
			executeIndex($values);
		break;
		case "new":
			executeNew($values);
		break;
		case "subir":
			executeSubir($values);
		break;
		case "restaurar":
			executeRestaurar($values);
		break;
		case "generar":
			executeGenerar($values);
		break;

		default:
			executeSubir($values);
		break;
	}
	function executeIndex($values = null)
	{
		require('respaldo.php');
	}
	function executeGenerar($values = null)
	{

		$Respaldar = new Respaldar();
		$Respaldar->generarRespaldo();

        $values['msg'] = "Respaldo generado satisfactoriamente.";
        executeNew($values);
	}
	function executeNew($values = null)
	{
		$values['action'] = 'generar';
		require('form_view.php');
	}
	function executeSubir($values = null)
	{
		$values['action'] = 'restaurar';
		require('respaldo.php');
	}
	function executeRestaurar($values)
	{

	$carpeta = "../../web/files/Restaurar";
	$fichero_subido = $carpeta."/";
	$unzip = true;
    $Respaldar = new Respaldar();

            if(isset($values['zip']) and $values['zip']['size']>0){

                $respaldo_realizado = $Respaldar->respaldoRealizado($values['zip']['name']);

                if($respaldo_realizado == 1){

                    $values['error'] = "Ya se ha subido este respaldo";
                    executeSubir($values);die;
                }


                $nombreArchivo = "respaldo".".".pathinfo($values['zip']['name'],PATHINFO_EXTENSION);

				//echo $fichero_subido.$nombreArchivo;die;
                if (move_uploaded_file($values['zip']['tmp_name'], $fichero_subido.$nombreArchivo)){
					if($unzip){
							$zip = new ZipArchive;
							if ($zip->open('../../web/files/Restaurar/respaldo.zip') === TRUE) {
								$zip->extractTo('../../web/files/Restaurar/');
								$zip->close();

								/***mover los archivos a la carpeta de solicitudes y cuadros**/
								$files_cuadros = glob("../../web/files/Restaurar/Cuadros/*"); // obtiene todos los archivos
								foreach($files_cuadros as $file){
									$filename = str_replace("../../web/files/Restaurar/Cuadros/", "", $file);
									if(!rename($file, '../../web/files/Cuadros/'.$filename)){
										echo "no copiado".$file."<br>";
									}
								}
								$files_cuadros = glob("../../web/files/Restaurar/Solicitudes/*"); // obtiene todos los archivos
								foreach($files_cuadros as $file){
									$filename = str_replace("../../web/files/Restaurar/Solicitudes/", "", $file);
									if(!rename($file, '../../web/files/Solicitudes/'.$filename)){
										echo "no copiado".$file."<br>";
									}
								}

							} else {
								echo 'fallo unzipping';die;
							}

					//se lee el contenido sql del
							$files_sql = glob("../../web/files/Restaurar/*.sql"); // obtiene todos los archivos
								foreach($files_sql as $file){
									$sql = file_get_contents($file);
								}
							$files_sql = glob("../../web/files/Restaurar/*.sql"); // obtiene todos los archivos
								foreach($files_sql as $file){
									$filename = str_replace("../../web/files/Restaurar/", "", $file);
									unlink($file);
								}

					$Respaldar->Restaurar($sql);
                    $Respaldar->Restaurar("CALL cargar_ventas_stand();");
                    $values['Nombre'] = $values['zip']['name'];
                    $Respaldar->saveRespaldo($values);
					unlink("../../web/files/Restaurar/respaldo.zip");
                    $values['msg'] = "Carga de planes completa.";
					}
				}else{
					echo "No se subio el archivo zip";die;
				}

            }


			executeSubir($values);die;

	}
