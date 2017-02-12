<?php


 
 
	function validate($values,$files = null){
		$errors = array();
		$validator_values = array();
		$validator_values['idPlan'] = array(
			
			"minlength" => 1,
			"maxlength" => 100,
			"type" => "number",
			"label" => "Nombres",
			"required" => true
		);		
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
		$validator_values['Correo2'] = array(
			
			"minlength" => 1,
			"maxlength" => 100,
			"type" => "email",
			"label" => "Confirme su correo electrónico",
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
		$validator_values['Puestos'] = array(
			
			"type" => "number",
			"label" => "Puestos",
			"required" => true
		);
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
                
                if(!isset($values['idPlan']) or $values['idPlan']==''){
                    $errors['idPlan'] = 'Debe seleccionar el plan a contratar';
                }
                if(!isset($values['RCV']) or $values['RCV']==''){
                    $errors['RCV'] = 'Debe indicar si elige RCV';
                }
                if(!isset($values['Marca']) or $values['Marca']==''){
                    $errors['Marca'] = 'Debe seleccionar la marca';
                }
                if(!isset($values['Anio']) or $values['Anio']==''){
                    $errors['Anio'] = 'Debe seleccionar el año';
                }
                if(!isset($values['MET']) or $values['MET']==''){
                    $errors['MET'] = 'Debe indicar el método de pago';
                }
                
                
          /******************Validación de archivos*************************/      
                print_r($files);die;
                if(!isset($values['Licencia'])){
                    echo "no hay licencia";
                }
                    
                
                
                
                
                
                
                
                return $errors;
		
		
	}
	