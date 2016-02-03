<?php 
	
	require_once("../controladores/ControladorUsuarios.php");

	$controladorUsuarios = new UserControllerClass();
	$respuesta = $controladorUsuarios->login( $_POST["email"], $_POST["password"],$_POST["tipoFuncionario"]);

	if ($respuesta == 1){
		//cargar vista
		
	}
	else{
		//redirigir a index.php
		echo '<script> window.location="index.php";</script>';
	}