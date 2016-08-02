<?php

	/*
	 * To change this license header, choose License Headers in Project Properties.
	 * To change this template file, choose Tools | Templates
	 * and open the template in the editor.
	 */

	/**
	 * Description of Seguross
	 *
	 * @author marcos
	 */
	class Seguros {
		
		public function __construct() 
		{
			
		}
		public function getSegurosListSelect(){
			$ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect()->Seguros
			->select("*")
			->where("status=?",1);
			return $q; 				
			
		}		
	}
	