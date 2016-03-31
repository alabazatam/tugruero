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
			$rif = $values["Rif"];
			$correo = $values["correo"];
			$razonSocial = $values["razonSocial"];
			$registro = validarRifRazonSocial($rif,$razonSocial,$correo);
			if(count($registro)>0)
			{

				foreach($registro as $id=> $valor)
				{
					if($valor["registrada"] == 1)
					{
						$values['errors']['YaRegistrada']="empresa ya registrada";
						executePaso1($values);
					}else if($valor["publicado"] == 1)
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
						$datos = array('token'=> $token,'idEmpresasRegistradas'=>$id,'timeExpire'=>$nuevafecha,'valid'=> 0,'publicado'=>'0',
							'mail'=> $correo,'alternativeMail' => $correo);
						$tokenCreate = createTokenRegis($datos);
						$idCreado = $tokenCreate["id"];
						$message = full_url."/ap/registrarse.php?token=".$token;
						$Mail = new Mail();
						$Mail->send(array($correo), array('noreply@frbcomputersgroup.com.ve'),"Asunto",$message);
						$values = null;
						$values['message']['tokenSend'] = "Se ha enviado una validación al correo, siga las instrucciones indicadas";
						
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
					$idEmpresa = $valor['idempresasregistradas'];
					$idToken = $valor['id'];
					$correo = $valor['mail'];
					$correoAlternativo = $valor['alternativemail'];
					utilizarToken($values['token']);
					$DatosEmpresa = GetCompanyValidation($idEmpresa);
					foreach ($DatosEmpresa as $id => $value) 
					{
						$idCompanyValidation=$value["id"];
						$RegistrarEmpresa = array("rif" => $value["rif"],
						"razon_social"=>$value["razonsocial"],
						"responsible_name"=>$values["responsible_name"]);
						break;
					}
					$q = RegisCompany($RegistrarEmpresa);
					$idCompany = $q["id"];
					$password = substr( md5(microtime()), 1, 8);
					$userData = array("login" => "M-".$values["cedula"],
						"password" => hash('sha256', $password),
						"mail" => $correo,
						"mail_alternative" => $correoAlternativo);
					$user = RegisUser($userData);
					$idUser = $user["id"];
					$empresaRegistrada = array('rif' => $value['rif']
												,'razonsocial' => $value['razonsocial']
												,'publicado' => 1
												,'registrada' => 0,"id"=>$idCompanyValidation);
					$userForCompany = array("id_user" => $idUser,"id_company"=>$idCompany);
					RegisUserForCompany($userForCompany);
					updateCompanyValidation($empresaRegistrada);
					$carpeta = "../web/files/".$userData["login"];
					if(!file_exists($carpeta))
					{
						mkdir($carpeta, 0700,true);
						chmod($carpeta,  0777);
					}
					$fichero_subido = $carpeta."/";
					$cantidad = count($_FILES);
					$i = 1;
					while($i < $cantidad+1)
					{
						if (!move_uploaded_file($_FILES['file_'.$i]['tmp_name'], $fichero_subido.$i))
						{
					 
							$values['error']['archivoNosubido']= "¡Posible ataque de subida de ficheros!\n";
							executePaso2($values);
							break;
						
						}
						$i++;
					}
					
					$message = "Usuario: ".$userData["login"]." Clave: ".$password;
					$Mail = new Mail();
					$Mail->send(array($correo), array('noreply@frbcomputersgroup.com.ve'),"Asunto",$message);
					$values = null;
					$values['message']['UsuarioCreado'] = "Usuario creado satisfactoriamente, se enviaran datos con la clave del usuario.</ br> Recuerde que debe esperar la aprobación del usuario.";
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
			$values = null;
			$values['errors'] = $errors;
			executePaso1($values);
			
			
		}
	}
							