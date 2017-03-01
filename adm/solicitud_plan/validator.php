<?php


 
 
	function validate($values,$files = null){

		
		
		$errors = array();
		$validator_values = array();
		/*$validator_values['idPlan'] = array(
			
			"minlength" => 1,
			"maxlength" => 100,
			"type" => "number",
			"label" => "idPlan",
			"required" => true
		);	*/	
		$validator_values['Nombres'] = array(
			
			"minlength" => 3,
			"maxlength" => 100,
			"type" => "text",
			"label" => "Nombres",
			"required" => true
		);
		$validator_values['Apellidos'] = array(
			
			"minlength" => 3,
			"maxlength" => 100,
			"type" => "text",
			"label" => "Apellidos",
			"required" => true
		);
		$validator_values['Cedula'] = array(
			
			"minlength" => 7,
			"maxlength" => 10,
			"type" => "text",
			"label" => "Cédula",
			"required" => true
		);
		$validator_values['Rif'] = array(
			
			"minlength" => 7,
			"maxlength" => 11,
			"type" => "text",
			"label" => "RIF",
			"required" => true
		);
		$validator_values['Correo'] = array(
			
			"minlength" => 1,
			"maxlength" => 100,
			"type" => "email",
			"label" => "Correo electrónico",
			"required" => true
		);
		$validator_values['Telefono'] = array(
			
			"minlength" => 10,
			"maxlength" => 10,
			"type" => "number",
			"label" => "Teléfono de habitación",
			"required" => true
		);
		$validator_values['Celular'] = array(
			
			"minlength" => 10,
			"maxlength" => 10,
			"type" => "number",
			"label" => "Celular",
			"required" => true
		);
		$validator_values['Marca'] = array(
			
			"minlength" => 1,
			"maxlength" => 50,
			"type" => "text",
			"label" => "Marca",
			"required" => true
		);
		$validator_values['Modelo'] = array(
			
			"minlength" => 1,
			"maxlength" => 20,
			"type" => "text",
			"label" => "Marca",
			"required" => true
		);
		$validator_values['Color'] = array(
			
			"minlength" => 3,
			"maxlength" => 20,
			"type" => "text",
			"label" => "Color",
			"required" => true
		);
		$validator_values['Placa'] = array(
			
			"minlength" => 5,
			"maxlength" => 7,
			"type" => "text",
			"label" => "Placa",
			"required" => true
		);
		/*$validator_values['Puestos'] = array(
			
			"type" => "number",
			"label" => "Puestos",
			"required" => true
		);*/
		$ValidateBase = new ValidateBase();
		$errors = $ValidateBase->validate_base($validator_values, $values);
		
				
                if (!preg_match("/^[A-Z a-z]{3,80}$/", $values['Nombres'], $matches))      
                {
                    $errors['Nombres'] = "El campo debe contener solamente letras";
                }
                if (!preg_match("/^[A-Z a-z]{3,80}$/", $values['Apellidos'], $matches))      
                {
                    $errors['Apellidos'] = "El campo debe contener solamente letras";
                }
                if (!preg_match("/^[Vv,Ee][-][1-9][0-9]{5,7}$/", $values['Cedula'], $matches))      
                {
                    $errors['Cedula'] = "Verifique el formato de la cédula (V-1234567)";
                }
                if (!preg_match("/^[Vv,Ee][-][0-9]{6,9}$/", $values['Rif'], $matches))      
                {
                    $errors['Rif'] = "Verifique el formato del RIF (V-12345670)";
                }
                if (!preg_match("/^[2][1-9][1-9][0-9]{7}$/", $values['Telefono'], $matches))      
                {
                    $errors['Telefono'] = "Formato o número incorrecto (Ejemplo: 2121234567))";
                }
                if (!preg_match("/^[4][1-2][2,4,6][0-9]{7}$/", $values['Celular'], $matches))      
                {
                    $errors['Celular'] = "Formato o número incorrecto (Ejemplo: 4241234567)";
                }
                
                /*if(!isset($values['idPlan']) or $values['idPlan']==''){
                    $errors['idPlan'] = 'Debe seleccionar el plan a contratar';
                }*/
                /*if(!isset($values['RCV']) or $values['RCV']==''){
                    $errors['RCV'] = 'Debe indicar si elige RCV';
                }*/
                if(!isset($values['Marca']) or $values['Marca']==''){
                    $errors['Marca'] = 'Debe seleccionar la marca';
                }
                if(!isset($values['Anio']) or $values['Anio']==''){
                    $errors['Anio'] = 'Debe seleccionar el año';
                }
                /*if(!isset($values['MET']) or $values['MET']==''){
                    $errors['MET'] = 'Debe indicar el método de pago';
                }*/
				if( (isset($values['Correo']) and isset($values['Correo2']) ) and $values['Correo'] != $values['Correo2']  ){
						$errors['Correo2'] = 'Los correos electrónicos deben coincidir';
				}
                
                
          /******************Validación de archivos*************************/ 
        //echo $files['Licencia']['size'];die;
		$array_extensions = array('jpg','JPG','PNG','png','jpeg','JPEG','pdf','PDF','octet-stream');
		if($_FILES['Licencia']['size']>0)
		{
			if(!in_array(pathinfo($_FILES['Licencia']['name'],PATHINFO_EXTENSION),$array_extensions)) 
			{
				$errors['Licencia']= "Solamente se permiten los tipos de archivos JPG, JPEG, PNG y PDF";
			}
			if($_FILES['Licencia']['size']>max_input_size)
			{
				$errors['Licencia']= message_max_size;
			}
		}		
               
		if($_FILES['CarnetCirculacion']['size']>0)
		{
			if(!in_array(pathinfo($_FILES['CarnetCirculacion']['name'],PATHINFO_EXTENSION),$array_extensions)) 
			{
				$errors['CarnetCirculacion']= "Solamente se permiten los tipos de archivos JPG, JPEG, PNG y PDF";
			}
			if($_FILES['CarnetCirculacion']['size']>max_input_size)
			{
				$errors['CarnetCirculacion']= message_max_size;
			}
		}
		
		

			if($_FILES['CertificadoMedico']['size']>0)
			{
				if(!in_array(pathinfo($_FILES['CertificadoMedico']['name'],PATHINFO_EXTENSION),$array_extensions)) 
				{
					$errors['CertificadoMedico']= "Solamente se permiten los tipos de archivos JPG, JPEG, PNG y PDF";
				}
				if($_FILES['CertificadoMedico']['size']>max_input_size)
				{
					$errors['CertificadoMedico']= message_max_size;
				}
			}
			
			if($_FILES['CertificadoOrigen']['size']>0)
			{
				if(!in_array(pathinfo($_FILES['CertificadoOrigen']['name'],PATHINFO_EXTENSION),$array_extensions)) 
				{
					$errors['CertificadoOrigen']= "Solamente se permiten los tipos de archivos JPG, JPEG, PNG y PDF";
				}
				if($_FILES['CertificadoOrigen']['size']>max_input_size)
				{
					$errors['CertificadoOrigen']= message_max_size;
				}
			}
		
                
                
/***************************Validación de archivos de pago************************/                
		
	
			if($_FILES['DEP1']['size']>0)
			{
				if(!in_array(pathinfo($_FILES['DEP1']['name'],PATHINFO_EXTENSION),$array_extensions)) 
				{
					$errors['DEP1']= "Solamente se permiten los tipos de archivos JPG, JPEG, PNG y PDF";
				}
				if($_FILES['DEP1']['size']>max_input_size)
				{
					$errors['DEP1']= message_max_size;
				}
			}
			
			if($_FILES['DEP2']['size']>0)
			{
				if(!in_array(pathinfo($_FILES['DEP2']['name'],PATHINFO_EXTENSION),$array_extensions)) 
				{
					$errors['DEP2']= "Solamente se permiten los tipos de archivos JPG, JPEG, PNG y PDF";
				}
				if($_FILES['DEP2']['size']>max_input_size)
				{
					$errors['DEP2']= message_max_size;
				}
			}
			if($_FILES['DEP3']['size']>0)
			{
				if(!in_array(pathinfo($_FILES['DEP3']['name'],PATHINFO_EXTENSION),$array_extensions)) 
				{
					$errors['DEP3']= "Solamente se permiten los tipos de archivos JPG, JPEG, PNG y PDF";
				}
				if($_FILES['DEP3']['size']>max_input_size)
				{
					$errors['DEP3']= message_max_size;
				}
			}
		               
                
                
                
                return $errors;
		
		
	}
	