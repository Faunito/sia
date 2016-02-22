<?php
require_once ('ICrud.php');
require_once ('../negocios/Profesor.php');
require_once ('../conexiones/DBSingleton.php');

class BDProfesor implements ICrud
{	
	public function Get($var)
	{
		if(get_class($var) == "Profesor")
		{
			//Obtencion de la conexxion
			$conn = DBSingleton::getInstance();
			//Preparación y Obtención
			$aux = $conn->getConnection()->prepare("SELECT * FROM profesor WHERE email = :email AND password = :password");
			$aux -> bindParam(':email',$var->getcorreoElectronico(),PDO::PARAM_STR);
			$aux -> bindParam(':password',$var->getpassword(),PDO::PARAM_STR);
			$aux -> execute();
			$res = $aux -> fetch(PDO::FETCH_OBJ);
			//$aux2 = json_encode($res);
			$var->setrut($res->rut);
			$var->setnombre($res->nombre);
			$var->setapellidopaterno($res->apaterno);
			$var->setapellidomaterno($res->amaterno);
			$var->setcargo("Profesor");
			$var->setcorreoElectronico($res->email);
			$var->setpassword($res->password);
			$var->setarea("Informatica");
			$var->settitulo("N/A");
		}
		else $var = NULL;
	}

	public function Insert($var)
	{

	}

	public function Update($var)
	{
		
	}

	public function Delete($var)
	{
		
	}
}
?>