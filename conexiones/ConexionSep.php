<?php 
	
	class  ConexionSep{

		static private $instance = NULL;
		private $server;
		private $user;
		private $password;
		private $database;
		private $connection;
		//constructor
		private function __construct(){
	    $this->server = 'localhost';
	    $this->user = 'root';
	    $this->password = '';
	    $this->database = 'sia';
	    $this->connection = $this->conectar();	    
  		}
  		//crear instancia 1 vez
		public static function getInstance(){
  		if( self::$instance == NULL ){
  			self::$instance = new ConexionSep();
  			return self::$instance;
  		}
  		else{
  			return $this->instance;
  		}

  		}
  		//Función de conexión
		private function conectar(){
			
		try{			
			$connection1 = new PDO("mysql:host=localhost;dbname=sia", "root", "", array('charset'=>'utf8'));
			$connection1->query("SET CHARACTER SET utf8");
			$connection1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}

		catch(PDOException $e){		
			echo "Error: " . $e->getMessage();
		}

		return $connection1;
		}

		public function getConnection(){
			return $this->connection;
		}

	}
 ?>
