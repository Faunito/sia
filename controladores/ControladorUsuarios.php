<?php 

//require_once ("../conexiones/conexiones.php");
//require_once ("../conexiones/ConexionSep.php");
require_once ('../negocios/Profesor.php');

class UserControllerClass{
	private var $profesor;

	public function getProfesor()
	{
		return $profesor;
	}

	public function login($email,$pass,$tipoFuncionario)
	{
		//llamada al profe solamente por haora
		if($tipoFuncionario == 'profesor'){
			//se instancia la clase profesor
			$profesor = new Profesor();
			//Se agregan los datos de Extracion de DB
			$profesor->setpassword($email);
			$profesor->setcorreoElectronico($pass);
			//Comunicación con la Capa de Datos
			$profesor->getBDProfesor()->Get($profesor);
		}
		else{
			$profesor = NULL
		}
	}
}