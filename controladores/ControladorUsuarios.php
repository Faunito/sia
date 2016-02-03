<?php 

require_once ("../conexiones/conexiones.php");

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
		$res=pg_query( Conectar::con(),$sql  );
		
		// con mysql_num_rows verificamos que la cantidad de filas devuelve la consulta  
		if( pg_num_rows( $res ) == 0 ){
			// si es 0 filas, no hay usuario o password valido
			return 0;
		}

		else{
			// de lo contrario se guarda en un arrar lo que devuelve la consulta
			if( $reg = pg_fetch_array( $res )){
				// se crean dos sesiones, una para mostrar el nombre de usuario del sistema y la otra para guardar en las tablas lo que realiza el usuario del sistema (integridad referencial)
				$_SESSION["sesion_usuario"] = $reg["email"];
								
				return 1; 
			}
		}
	}
}