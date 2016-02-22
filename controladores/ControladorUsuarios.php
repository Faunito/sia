<?php 

require_once ('../negocios/Profesor.php');

class ControladorUsuarios{
	var $user;

	public function getProfesor()
	{
        if (isset($user)){
            return $user;            
        }
        else return $user;
		
	}

	public function login($email,$pass,$tipoFuncionario)
	{
		//llamada al profe solamente por haora
		if($tipoFuncionario == 'profesor'){
			//se instancia la clase profesor
			$user = new Profesor();
			//Se agregan los datos de Extracion de DB
			$user -> setcorreoElectronico($email);
            $user -> setpassword($pass);			
			//Comunicación con la Capa de Datos
			 $user -> getBDProfesor() -> Get($user);
		}/*
		else{
            if($tipoFuncionario == 'secretaria'){
                $user = new Secretaria();
                //setear datos de clase secretaria
                $user -> setpassword();
                $user -> setname();
                //crear y guardar sesion ? 
            }          
		}*/
	}
}