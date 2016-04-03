<?php include("../autoload.php");?>		
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
        case "acceso":
			executeAcceso($values);	
		break;
		case "bienvenida":
			executeBienvenida($values);	
		break;
		case "logout":
			executeLogout($values);	
		break;
		default:
			executeIndex($values);
		break;
	}
						
	function executeIndex($values = null){
	require('login.php');
	}
	function executeBienvenida($values = null){
	
	require('bienvenida.php');
	}
	function executeAcceso($values = null)
	{
		$Login = new Login();
		$q = $Login->GetLogin($values["login"],$values["password"]);
		if(count($q)> 0)
		{	
			$company = new Company();
			$companyId['id'] = $q["users_company"]["id_company"];
			$companyData = $company->getCompanyById($companyId);
			if($companyData["status"] == 1)
			{
				$_SESSION['id_company'] = $q["users_company"]["id_company"];
				$_SESSION['id_perms'] = $q["users_perms"]["id_perms"];
				$_SESSION['id_user'] = $q["users"]["id_user"];
				require('bienvenida.php');	
			}
			else 
			{
				$values = null;
				$values["errors"] = "usuario pendiente por validar";
				executeIndex($values);
			}
		}
		else
		{
			$values = null;
			$values["errors"] = "usuario o clave invalida";
			executeIndex($values);
		}
	}
	function executeLogout($values = null){
	require('login.php');
	}
