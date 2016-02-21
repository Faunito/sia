<?php
require_once ('Funcionario.php');
require_once ('Practica.php');

/**
 * @author Freddy
 * @version 1.0
 * @created 19-Feb.-2016 19:48:57
 */
class Secretaria extends Funcionario
{

	var $facultad;
	var $m_Practica;

	function Secretaria()
	{
	}



	function getfacultad()
	{
		return $this->facultad;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setfacultad($newVal)
	{
		$this->facultad = $newVal;
	}

}
?>