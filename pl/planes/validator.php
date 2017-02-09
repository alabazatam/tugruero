<?php


 
 
	function validate($values){
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
			"maxlength" => 10,
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
		$validator_values['RCV'] = array(
			
			"minlength" => 2,
			"maxlength" => 2,
			"type" => "text",
			"label" => "¿Opción de RCV?",
			"required" => true
		);
		$ValidateBase = new ValidateBase();
		$errors = $ValidateBase->validate_base($validator_values, $values);
		return $errors;
		
		
	}
	