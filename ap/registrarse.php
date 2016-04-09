<?php include("../autoload.php");?>	
<?php include("validator.php");?>	
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
		case "paso1":
			executePaso1($values);	
		break;
		case "validaFormulario1":
			executeValidaFormulario1($values);	
		break;
		case "paso2":
			executePaso2($values);	
		break;
		case "validaFormulario2":
			executeValidaFormulario2($values);	
		break;	
		case "ForgottenYourPassword":
			executeForgottenYourPassword($values);	
		break;	
		case "valideForgottenPassword":
			executeValideForgottenYourPassword($values);	
		break;
		default:
			executePaso1($values);
		break;
	}
						
	function executeIndex($values = null){
	require('paso1_view.php');
	}
	function executePaso1($values = null){
		if(isset($values['token']) and count($values['token'])>0)
			{
				$data = validarToken($values['token']);
				if(count($data)>0)
				{
					$values['bank'] = getBankList();
					
					require('paso2_view.php');
				}
				else
				{
					$values = null;
					$values['errors']['tokenErros'] = "Token invalido";
					require('paso1_view.php');
				}
			}
			else
			{
				require('paso1_view.php');
			}
	}
	function executeLogin($values)
	{
		require('index.php');
	}
	function executeValidaFormulario1($values = null)
	{
		
		$errors = validaFormulario1($values);
		$valido = true;
		if(count($errors)>0)
		{
			$values['errors'] = $errors;
			$valido = false;
			executePaso1($values);die;
		}

		if($valido == TRUE)
		{
			$rif=$values["Type_rif"]."-".$values["rif"]."-".$values["Last-number"];
			$correo = $values["correo"];
			$razonSocial = $values["razonSocial"];
			$registro = validarRifRazonSocial($rif,$razonSocial,$correo);
			if(count($registro)>0)
			{

				foreach($registro as $id=> $valor)
				{
					if($valor["validate"] == 1)
					{
						$values['errors']['YaRegistrada']="empresa ya registrada";
						executePaso1($values);
					}else if($valor["status"] == 1)
					{
						$values['errors']['YaPendiente']="Ya existe un registro, esta en la espera por su aprobación.";
						executePaso1($values);
					}
					else
					{
						$date = date("Y-m-d H:i:s");
						$nuevafecha = strtotime ( '+1 hour' , strtotime ( $date ) ) ;
						$nuevafecha = date ( 'Y-m-d H:i:s' , $nuevafecha );
						$id = $valor["id"];
						$token = base64_encode($razonSocial.$rif.$correo.date('d-m-y h:i:s'));
						$datos = array('token'=> $token,'id_company_validation'=>$id,'time_expire'=>$nuevafecha,'validate'=> 0,
							'mail'=> $correo,'mail_alternative' => $correo);
						$tokenCreate = addToken($datos);
						$idCreado = $tokenCreate["id"];
						$url = full_url."/ap/registrarse.php?token=".$token;
						$message = "<a href='$url'>Ingrese aquí</a>";
						$Mail = new Mail();
						$Mail->send(array($correo), array('noreply@frbcomputersgroup.com.ve'),"Asunto",$message);
						$values = null;
						$values['message']['tokenSend'] = "Se ha enviado una validación a su correo electrónico, siga las instrucciones indicadas";
						
						executePaso1($values);
					}
					break;
				}
			}
			else
			{
				$values['errors']['EmpresaNoExiste'] = "Empresa no registrada.";
				executePaso1($values);
			}
			die;
		}
	}
	function executePaso2($values = null)
	{
		require('paso2_view.php');
	}
	function executeValidaFormulario2($values = null)
	{
		$errors = validaFormulario2($values,$_FILES);
		$valido = true;
		if(count($errors)>0)
		{
			$valido = false;
		}
		if($valido)
		{
			$data = validarToken($values['token']);	
			if(count($data)>0)
			{

				foreach($data as $valor)
				{
					$idEmpresa = $valor['id_company_validation'];
					$idToken = $valor['id'];
					$correo = $valor['mail'];
					$correoAlternativo = $valor['mail_alternative'];
					utilizarToken($values['token']);
					$DatosEmpresa = GetCompanyValidation($idEmpresa);
					foreach ($DatosEmpresa as $id => $value) 
					{
						$idCompanyValidation=$value["id"];
						$RegistrarEmpresa = array("rif" => $value["rif"],
						"razon_social"=>$value["razon_social"],
						"responsible_name"=>$values["first_name"]." ".$values["first_last_name"],
						"id_bank" =>$values["type_bank"],
						"num_cuenta" => $values["NumCuenta"],
						"responsible_cedula"=>$values["nationality"]."-".$values["cedula"]);
						break;
					}
					$q = addCompany($RegistrarEmpresa);
					$idCompany = $q["id"];
					$password = substr( md5(microtime()), 1, 8);
					
					$userData = array("login" => "M-".$values["nationality"].$values["cedula"],
						"password" => hash('sha256', $password),
						"mail" => $correo,
						"mail_alternative" => $correoAlternativo,
						"date_created"=> date("Y-m-d H:i:s"),
						"date_updated" => date("Y-m-d H:i:s"));
					$user = addUser($userData);
					$idUser = $user["id"];
					$empresaRegistrada = array('rif' => $value['rif']
												,'razon_social' => $value['razon_social']
												,'status' => 1
												,'validate' => 0,"id"=>$idCompanyValidation);
					$userForCompany = array("id_user" => $idUser,"id_company"=>$idCompany);
					addUsersCompany($userForCompany);
					$Datauser = array("first_name" => $values["first_name"],
										"second_name" => $values["second_name"],
										"first_last_name" => $values["first_lastname"],
										"second_last_name" => $values["second_lastname"],
										"id_users" => $idUser,
										"phone" => $values["phone"],
										"gender" => $values["gender"],
										"document" =>$values["cedula"],
										"nationality" => $values["nationality"]);
					addUserData($Datauser);
					updateCompanyValidation($empresaRegistrada);
					$carpeta = "../web/files";
					$fichero_subido = $carpeta."/";
					$cantidad = count($_FILES);
					$i = 1;
					while($i < $cantidad+1)
					{
						$nombreArchivo = $RegistrarEmpresa["rif"]."-".$i.".".pathinfo($_FILES['file_'.$i]['name'],PATHINFO_EXTENSION);
						if (move_uploaded_file($_FILES['file_'.$i]['tmp_name'], $fichero_subido.$nombreArchivo))
						{
					 
							$regisArchivo = array("name_file" =>$nombreArchivo,
													"validate" => 0,
													"status"=> 1,
													"id_company" =>$idCompany);
							addCompanyFiles($regisArchivo);
						}
						$i++;
					}
					$UserPerms = array("id_user"=>$idUser,"id_perms" => 3,"status"=>0);
					addUserPerms($UserPerms);
					$message = "Usuario: ".$userData["login"]." Clave: ".$password;
					$Mail = new Mail();
					$Mail->send(array($correo), array('noreply@frbcomputersgroup.com.ve'),"Asunto",$message);
					$values = null;
					$values['message'] = "Su usuario ha sido creado satisfactoriamente, se ha enviado un correo electrónico con los datos.</ br> Recuerde que debe esperar la aprobación del administrador.";
					$values["action"] = "login";
					 require 'login.php';
				}
			}
			else
			{
				$values = null;
				$values['errors']['token'] = 'Token invalido';
				executePaso1($values);
			}
		}
		else
		{
			$values['errors'] = $errors;
			executePaso2($values);
			
			
		}
	}
	function executeForgottenYourPassword($values = null)
	{
		require 'ForgottenPassword_view.php';
	}
	function executeValideForgottenYourPassword($values = null)
	{
		$errors = validaForgottenPassword($values);
		$valido = true;
		if(count($errors)>0)
		{
			$values['errors'] = $errors;
			$valido = false;
			executeForgottenYourPassword($values);die;
		}
		else
		{
			
			$document = $values['document'];
			$nationality = $values['nationality'];
			$InitialFirstName = $values["InitialFirstName"];
			$InitialFirstLastName = $values["InitialFirstLastName"];
			$mail = $values["mail"];
			$user = validateForgottenPassword($document,$nationality,$InitialFirstName,$InitialFirstLastName,$mail);
			foreach($user as $id=> $valor)
			{
				if(empty($valor))
				{
					$values = null;
					$values["errors"]["datosIncorrectos"] = "sus datos no coinciden";
					executeForgottenYourPassword($values);die;
				}
				else
				{
					$idUser = $valor["id_user"];
					$mail = $valor["mail"];
					forwardPassword($idUser,$mail);
				}
				break;
			}
		}	
	}
	function forwardPassword($idUser,$mail)
	{
		$password = substr( md5(microtime()), 1, 8);
		$values = array("id_user" => $idUser,"password" => hash('sha256', $password));
		updateUser($values);
		$message = "Clave: ".$password;
		$Mail = new Mail();
		$Mail->send(array($mail), array('noreply@frbcomputersgroup.com.ve'),"Asunto",$message);
		$values = null;
		$values['message'] = "se ha enviado la clave a su correo electrónico.";
		$values["action"] = "login";
		 require 'login.php';
		
	}
							