<?php

	/*
	 * To change this license header, choose License Headers in Project Properties.
	 * To change this template file, choose Tools | Templates
	 * and open the template in the editor.
	 */

	/**
	 * Description of Users
	 *
	 * @author marcos
	 */
	class Planes {
		
		public function __construct() 
		{
			
		}
		public function getPlanesSelect()
		{	
			
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Planes
			->select("*")
			->where("Estado = 'A'");
			return $q; 			
		}
		public function getPrecioPlan($idPlan)
		{	
			
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Planes
			->select("*")
			->where("Estado = 'A'")
                        ->and('idPlan=?',$idPlan)->fetch();
			return $q['Precio']; 			
		}	
		public function getPrecioRCV($Puestos)
		{	
			
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Planes
			->select("*")
			->where("Estado = 'A'")
                        ->and('Tipo=?','RCV')      
                        ->and('Puestos=?',$Puestos)->fetch();
			return $q['Precio']; 			
		}



		



	}
	