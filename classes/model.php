<?php
	abstract class Model {
		protected $dbh;
		protected $stmt;
		protected $logger;

		public function __construct(){
			$this->dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
			$this->logger = new KLogger(ROOT_PATH."logs/mtutor.log" , KLogger::INFO );
			
			//if(config::$debug == TRUE)
			//	$this->dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		}


		public function query($query){
			$this->stmt = $this->dbh->prepare($query);
			return;
		}

		public function bind($param, $value, $type = null){
	 		if (is_null($type)) {
	  			switch (true) {
	    			case is_int($value):
	      				$type = PDO::PARAM_INT;
	      				break;
	    			case is_bool($value):
	      				$type = PDO::PARAM_BOOL;
	      				break;
	    			case is_null($value):
	      				$type = PDO::PARAM_NULL;
	      				break;
	    				default:
	      				$type = PDO::PARAM_STR;
	  			}
			}
			$this->stmt->bindValue($param, $value, $type);
			return;
		}

		public function execute() {
			//$this->stmt->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
			$res = $this->stmt->execute();
			//return $this->stmt->debugDumpParams();
			//print_r($this->stmt->errorInfo()); 
			$this->logger->LogInfo(json_encode($this->stmt->errorInfo()));
			return $res;
		}

		public function resultSet() {
			$this->execute();
			return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function lastInsertId(){
			return $this->dbh->lastInsertId();
		}

		public function single(){
			$this->execute();
			$this->logger->LogInfo(json_encode($this->stmt->errorInfo()));
			//print_r($this->stmt->errorInfo());
			return $this->stmt->fetch(PDO::FETCH_ASSOC);
		}

	}
?>