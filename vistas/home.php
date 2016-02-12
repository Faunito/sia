<?php 
	
	require_once("../controladores/ControladorUsuarios.php");

	$controladorUsuarios = new UserControllerClass();
	$respuesta = $controladorUsuarios->login( $_POST["email"], $_POST["password"],$_POST["tipoFuncionario"]);
	//echo $_SESSION['sesion_usuario'];
	
	echo $respuesta;
		