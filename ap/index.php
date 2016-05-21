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
        session_destroy();
	unset($_SESSION['id_perms'],$_SESSION['id_user'],$_SESSION['id_company']);

	require('login.php');
	}
	function executeBienvenida($values = null){
	
	require('bienvenida.php');
	}
	function executeAcceso($values = null)
	{
		$securimage = new Securimage();
		$captcha = $values['ct_captcha'];
		if ($securimage->check($captcha) == false) {
		  $errors['captcha_error'] = 'Incorrect security code entered<br />';
				$values['errors'] = "Imagen incorrecta";
				require('login.php');die;
		}
		$Login = new Login();
		$q = $Login->GetLogin($values["nationality"].'-'.$values["login"],$values["password"]);
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
				$_SESSION['login'] = $q["users"]["login"];
				$_SESSION['name'] = ucwords(strtolower($q["users_data"]["first_name"]))." ".ucwords(strtolower($q["users_data"]["first_last_name"]));
				require('bienvenida.php');	
			}
			else 
			{
				$values = null;
				$values["errors"] = "Usuario inactivo";
				executeIndex($values);
			}
		}
		else
		{
			$values = null;
			$values["errors"] = "Usuario o clave incorrecto";
			executeIndex($values);
		}
	}
	function executeLogout($values = null){
	require('login.php');
	}
