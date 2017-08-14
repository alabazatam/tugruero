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
		case "generar":
			executeGenerar($values);	
		break;
	
		default:
			executeNew($values);
		break;
	}
	function executeIndex($values = null)
	{
		require('list_view.php');
	}
	function executeGenerar($values = null)
	{    
		/*$host = '127.0.0.1';
		$username = "root";
		$password = '123456';
		$dbName = 'tugruero';
		$backup_file = "/home/marcos/Escritorio/tugruero-" . date("Y-m-d-H-i-s") . ".sql.gz";
		$command = "mysqldump --opt -h $host -u $username -p$password $dbName | gzip > $backup_file";
 
		system($command,$output);*/
		
		$Respaldar = new Respaldar();
		$Respaldar->generarRespaldo();
	}
	function executeNew($values = null)
	{
		$values['action'] = 'generar';
		require('form_view.php');
	}