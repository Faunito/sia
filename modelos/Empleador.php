<?php
require_once ('Persona.php');
require_once ('Evaluacion.php');

/**
 * @author Freddy
 * @version 1.0
 * @created 25-Ene.-2016 21:31:24
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