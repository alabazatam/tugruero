<?php include("../autoload.php");?>		
<?php //include("security.php");?>						
<?php
$action = "";
if(isset($_REQUEST["action"]) and $_REQUEST["action"]!=""){
	$action = $_REQUEST["action"];
}

$values = $_REQUEST;
	switch ($action) {
		case "acceso":
			executeAcceso($values);	
		break;								
		default:
			executeIndex($values);
		break;
	}
						
	function executeAcceso($values = null)
	{
		$q = connect($values["login"],$values["password"]);
		if($q)
		{
			$Menu = new Menu();
			$items_padres = $Menu ->getMenu(3, 1,0);	
			require('main_page.php');
		}else
		{
			
			$values = null;
			$values["errors"]["ClaveUsuario"] = "Usuario o clave invalido";
			require 'login.php';
			
		}
		
	}
					