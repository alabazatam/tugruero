<?php include("../../autoload.php");?>	
<?php include("validator.php");?>
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
		case "add":
			executeAdd($values);	
		break;
		default:
			executeIndex($values);
		break;
	}
	function executeIndex($values = null,$errors = array())
	{       
        $values['action'] = 'add';
		//print_r($values);die;
		require('form_view.php');
	}
	function executeAdd($values = null,$errors = array())
	{
                $errors = validate($values);
				
				if(count($errors)>0){
					executeIndex($values,$errors);die;
				}else{
					echo "siguiente";die;
				}
                
	}