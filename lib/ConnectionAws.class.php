<?php


	class ConnectionAws {
            
                function __construct() 
                {
                    $this->dbname = "TuGruero";
                    $this->host = '52.25.178.106';
                    $this->port = "3306";
                    $this->charset = "utf8";
                    $this->dsn = "mysql:dbname=".$this->dbname.";host=".$this->host.";port=".$this->port.";charset=".$this->charset;  
                    $this->username = 'root';
                    $this->password = 'tugrua';
                    
                }            
		public function getConnect($connect = ''){
				
                    $connection = @new PDO($this->dsn,$this->username, $this->password,array(PDO::ATTR_PERSISTENT => true));
                    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                    $connection->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
                    $connect = new NotORM($connection);
			
		return $connect;                    
                    
                    
	
		}
		
		
		
		
	}
