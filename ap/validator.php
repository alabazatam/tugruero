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
	function validaFormulario2($values,$archivos)
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
		$cantidad = count($archivos);
		$i = 1;
		while($i < $cantidad+1)
		{
			if (($_FILES['file_'.$i]['size'])>1000000)
			{

				$errors['Tamano de archivo']= "Los archivos no pueden pesar mas de 1000b";
				
			}
			if(pathinfo($_FILES['file_'.$i]['name'],PATHINFO_EXTENSION) != "jpg" && pathinfo($_FILES['file_'.$i]['name'],PATHINFO_EXTENSION) != "png" 
					&& pathinfo($_FILES['file_'.$i]['name'],PATHINFO_EXTENSION) != "jpeg" 	&& pathinfo($_FILES['file_'.$i]['name'],PATHINFO_EXTENSION) != "pdf" ) 
			{
				$errors['tipoArchivo']= "solo se permite JPG, JPEG, PNG y PDF";
			}
			$i++;
		}
		return $errors;
	}
