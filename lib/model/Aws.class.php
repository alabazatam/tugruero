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
			if(@$values['Placa'] =='')
			{
				unset($values['Placa']);
			}
			if(@$values['Modelo'] =='')
			{
				unset($values['Modelo']);
			}
			if(@$values['Color'] =='')
			{
				unset($values['Color']);
			}
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Grueros("idGrua", $id)->update($values);
			return $values;	
		}
		public function getGruerosClave($values){
			$ConnectionAws = new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Grueros
			->select("Clave")
			->where("idGrua=?",$values['id_user'])->fetch();
			return $q; 				
			
		}
		function desactivarGruero($id_user)
		{			
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Grueros("idGrua", $id_user)->update(array('Condicion' => 'Inactivo'));
			return true;	
		}
		function activarGruero($id_user)
		{			
			$ConnectionAws= new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Grueros("idGrua", $id_user)->update(array('Condicion' => 'Activo'));
			return true;	
		}
		public function getDisponibilidad($values){
			$ConnectionAws = new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Gruas
			->select("*")
			->where("idGrua=?",$values['id_user']);
			
			foreach($q as $id => $value)
			{
				return $value['disponible'];
				break;
			}
		}
		public function getGruerosPlaca($values){
			$ConnectionAws = new ConnectionAws();
			$q = $ConnectionAws->getConnect()->Grueros
			->select("Placa")
			->where("idGrua=?",$values['id_user'])->fetch();
			return $q; 				
			
		}
	}