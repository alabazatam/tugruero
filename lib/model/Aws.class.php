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
		function updateGruas($values)
		{			
			unset($values['PHPSESSID']);
			unset($values['action']);
			$ConnectionAws= new ConnectionAws();
			$id = $values['idGrua'];
			$q = $ConnectionAws->getConnect()->GruasPagina("idGrua", $id)->update($values);
			return $values;	
		}
		function updateGrueros($values)
		{			
			unset($values['PHPSESSID']);
			unset($values['action']);
			$id = $values['idGrua'];
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->GruerosPagina("idGrua", $id)->update($values);
			return $values;	
		}
	}