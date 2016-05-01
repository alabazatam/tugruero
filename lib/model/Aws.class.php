<?php

	class Aws {
		
		
			function saveGruas($values){			
			unset($values['PHPSESSID']);
			unset($values['action']);
			$values['Disponible'] = "NO";
			$values['Latitud'] = "";
			$values['Longitud'] = "";
			$values['LastUpdate'] = null;
			$values['Token'] = null;				
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->GruasPagina()->insert($values);
			return $values;	
			
		}
			function saveGrueros($values){			
			unset($values['PHPSESSID']);
			unset($values['action']);
			$values['Nombre'] = "Marcos Arlindo";
			$values['Apellido'] = "De Andrade Carrera";
			$values['Placa'] = "AC137SK";
			$values['Modelo'] = "Gancho";
			$values['Color'] = "Blanca";
			$values['Celular'] = "04268141850";	
			$values['Cedula'] = "V-18020594";	
			$values['Clave'] = "1234";	
			$values['Condicion'] = "Activo";
			$values['NumServicios'] = "0";
			$values['TotalTrato'] = "0";
			$values['TotalPresencia'] = "0";
			$values['TotalVehiculo'] = "0";
			$values['Rating'] = "0";
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->GruerosPagina()->insert($values);
			return $values;	
			
		}
		
	}