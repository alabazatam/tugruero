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
					$values['errors']['tokenErros'] = "Token invalido";
					require('paso1_view.php');
				}
			}
			else
			{
				require('paso1_view.php');
			}
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
						}
					else
					{
						$date = date("Y-m-d h:i:sa");
						$nuevafecha = strtotime ( '+1 hour' , strtotime ( $date ) ) ;
						$nuevafecha = date ( 'Y-m-j h:i:sa' , $nuevafecha );
						$id = $valor["id"];
						$token = base64_encode($razonSocial.$rif.$correo.date('d-m-y'));
						$datos = array('token'=> $token,'idEmpresasRegistradas'=>$id,'timeExpire'=>$nuevafecha,'valid'=> 0,'publicado'=>'0',
							'mail'=> $correo,'alternativeMail' => $correo);
						$tokenCreate = createTokenRegis($datos);
						$idCreado = $tokenCreate["id"];
						$values['errors']['tokenSend'] = "Se ha enviado una validación al correo, siga las instrucciones indicadas";
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
		//require('bienvenida.php');
	}
	function executePaso2($values = null)
	{
		$data = validarToken($values['token']);
			if(count($data)>0)
			{
				foreach($data as $valor)
				{
					$idEmpresa = $valor['idempresasregistradas'];
					$correo = $valor['mail'];
					$correoAlternativo = $valor['alternativemail'];
					$idToken = $valor['id'];
					executeValidaFormulario2($values);
					//utilizarToken($values['token']); 
				}
			}
			else
			{
				require('paso1_view.php');
			}
		
	}
	function executeValidaFormulario2($values = null)
	{
	
		$errors = validaFormulario2($values);
		$valido = true;
		if(count($errors)>0)
		{
			$valido = false;
		}

		if($valido == TRUE)
		{
			executePaso2($values);
		}
	}
							