<?php include("autoload.php");?>		
<?php //include("security.php");?>						
<?php
$action = "";
if(isset($_REQUEST["action"]) and $_REQUEST["action"]!=""){
	$action = $_REQUEST["action"];
}

$values = $_REQUEST;
	switch ($action) {
		case "index":
			executeIndex($values);	
		break;
		case "message":                   
			executeMessage($values);	
		break;	
		default:
			executeIndex($values);
		break;
	}
						
	function executeIndex($values = null){
        /*Menu*/
        $Menu = new Menu();
        $items = $Menu ->getMenu(1, 1);
        
        
        /*Caroussels*/
        $CarousselDetails = new CarousselDetails();
        $caroussel1_name = $CarousselDetails ->getCarousselName(1);
        $caroussel1_details = $CarousselDetails ->getCarousselDetails(1);
        
        
	require('page.php');
	}

	function executeMessage($values = null){
	
	$Message = new Message();
        $Message ->saveMessage($values);
        $Mail = new Mail();
        $mensaje = $values['names']." ".$values['email']." ".$values['phone']." ".$values['message'];
        
        $Mail ->send(array('deandrademarcos@hotmail.com'), array(mail_from),"Mensaje enviado desde la página www.tugruero.com" , $mensaje);
	}			