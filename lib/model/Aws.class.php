<?php

	class Aws {
		function saveGruas($values)
		{			
			unset($values['PHPSESSID']);
			unset($values['action']);
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->GruasPagina()->insert($values);
			return $values;	
		}
		function saveGrueros($values)
		{			
			unset($values['PHPSESSID']);
			unset($values['action']);
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->GruerosPagina()->insert($values);
			return $values;	
		}
	}