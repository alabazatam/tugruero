<?php

	function validaFormulario1($values)
	{
		$errors = array();
		if(count($values)>0)
		{
			foreach($values as $campos)
			
				if(empty($campos))
					{
						$errors['campos']="Todos los campos deben ser llenados";
					}
			if(!filter_var($values["correo"], FILTER_VALIDATE_EMAIL))
			{
				$errors['correo'] = "correo invalido";
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
						$errors['campos vacios']="Todos los campos deben ser llenados.";
					}
		}
		return $errors;
	}