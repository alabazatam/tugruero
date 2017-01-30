<?php

	function validaFormularioUser($values)
	{
		
		$errors = array();
		$validacion = validarCorreoElectronico($values["mail"]);
		if(count($validacion) > 0 and $values['mail']!='')
		{
			$errors['correo'] = "El correo electrónico ingresado ya esta registrado.";
		}
		$validacion = validarCedula($values["document"]);
		if(count($validacion) > 0)
		{
			$errors['cedula'] = "La Cédula ingresada ya esta registrada.";
		}
		if(count($values)>0)
		{
			if($values['action'] == 'add')
			{
				if(empty($values['first_name']) || empty($values['first_last_name']) || empty($values['nationality'])
						|| empty($values['document']) || empty($values['gender']))
					{
						$errors['campos']="Todos los campos deben ser llenados";
					}
				if(isset($values["mail"]) and $values["mail"]!='' and !filter_var($values["mail"], FILTER_VALIDATE_EMAIL))
				{
					$errors['correo'] = "correo invalido";
				}
			}
		}
		return $errors;
	}
	function validaFormulario2($values)
	{
		$errors = array();
		if(count($values)>0)
		{
			foreach($values as $campos)
			
				if(empty($campos))
					{
						$errors[]="Todos los campos deben ser llenados";
					}
		}
	}