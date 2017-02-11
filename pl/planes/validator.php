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
                return $errors;
		
		
	}
	