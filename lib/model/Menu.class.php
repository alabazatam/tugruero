<?php
    class Menu 
    {
        
        function getMenu($id_app, $id_page)
        {
			
                        $ConnectionORM = new ConnectionORM();
			$q = $ConnectionORM->getConnect('tugruero')->menu
			->select("*")
                        ->where('id_app=?',1)
                        ->order('orders');	
			return $q;            
        }
        
    }