<?php
require_once ('Persona.php');
require_once ('Evaluacion.php');

/**
 * @author Freddy
 * @version 1.0
 * @created 19-Feb.-2016 19:48:54
 */
class Empleador extends Persona
{

	var $cantidadPracticas;
	var $nombreEmpresa;
	var $m_Evaluacion;

	function Empleador()
	{
	}



	function getcantidadPracticas()
	{
		return $this->cantidadPracticas;
	}

	function getnombreEmpresa()
	{
		return $this->nombreEmpresa;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setcantidadPracticas($newVal)
	{
		$this->cantidadPracticas = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setnombreEmpresa($newVal)
	{
		$this->nombreEmpresa = $newVal;
	}

}
?>