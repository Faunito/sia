<?php 

//require_once ("../conexiones/conexiones.php");
require_once ("../conexiones/ConexionSep.php");

class UserControllerClass{

	public function login($email,$pass,$tipoFuncionario)
	{

		if($tipoFuncionario == 'profesor'){

			$sql="SELECT * FROM profesor WHERE email ='".$email."' AND password ='".$pass."'";
		}
		else{
			if($tipoFuncionario == 'secretaria'){
				$sql="SELECT * FROM secretaria WHERE email ='".$email."' AND password ='".$pass."'";	
			}
		}
		// se ejectua la consulta y se usa el metodo con de la clase class para la conexion, y se guarda en $res lo que devuelve la consulta  
		//$res=pg_query( Conectar::con(),$sql  );
		$q = ConexionSep::getInstance();
		$q1 = $q->getConnection()->prepare("SELECT * FROM profesor WHERE email = :email AND password = :password");
		$q1 -> bindParam(':email',$email,PDO::PARAM_STR);
		$q1 -> bindParam(':password',$pass,PDO::PARAM_STR);
		$q1 -> execute();
		
		$res = $q1 ->fetchAll(PDO::FETCH_ASSOC);
		return json_encode($res);		
	}
}