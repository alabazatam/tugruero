<?php

	class Aws {
		function saveGruas($values)
		{			
			unset($values['PHPSESSID']);
			unset($values['action']);
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Gruas()->insert($values);
			return $values;	
		}
		function saveGrueros($values)
		{			
			unset($values['PHPSESSID']);
			unset($values['action']);
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Grueros()->insert($values);
			return $values;	
		}
		function updateGruas($values)
		{			
			unset($values['PHPSESSID']);
			unset($values['action']);
			$ConnectionAws= new ConnectionAws();
			$id = $values['idGrua'];
			$q = $ConnectionAws->getConnect()->Gruas("idGrua", $id)->update($values);
			return $values;	
		}
		function updateGrueros($values)
		{			
			unset($values['PHPSESSID']);
			unset($values['action']);
			$id = $values['idGrua'];
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Grueros("idGrua", $id)->update($values);
			return $values;	
		}
	}