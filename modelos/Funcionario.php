<?php
require_once ('Persona.php');

/**
 * @author Freddy
 * @version 1.0
 * @created 25-Ene.-2016 21:31:26
 */
class Funcionario extends Persona
{

	var $cargo;
	var $correoElectronico;
	var $password;

	function Funcionario()
	{
	}



	function getcorreoElectronico()
	{
		return $this->correoElectronico;
	}

	function getpassword()
	{
		return $this->password;
	}

	static function listarFuncionarios()
	{
	}

	/**
	 * 
	 * @param newVal
	 */
	function setcorreoElectronico($newVal)
	{
		$this->correoElectronico = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setpassword($newVal)
	{
		$this->password = $newVal;
	}

}
?>