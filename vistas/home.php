<?php 
	
	require_once("../controladores/ControladorUsuarios.php");

	$controladorUsuarios = new UserControllerClass();
	$controladorUsuarios->login( $_POST["email"], $_POST["password"],$_POST["tipoFuncionario"]);
	//echo $_SESSION['sesion_usuario'];
	
	if($controladorUsuarios->getProfesor() != NULL) $controladorUsuarios->getProfesor()->toString;
	else echo "No hay Profe :D";
?>