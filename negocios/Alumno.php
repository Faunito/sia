<?php
require_once ('Persona.php');
require_once ('Practica.php');
require_once ('ActividaddCompensacion.php');

/**
 * @author Freddy
 * @version 1.0
 * @created 19-Feb.-2016 19:48:53
 */
class Alumno extends Persona
{

	var $carrera;
	var $nivelAcademico;
	var $m_Practica;
	var $m_ActividaddCompensacion;

	function Alumno()
	{
	}



	function getcarrera()
	{
		return $this->carrera;
	}

	function getnivelAcademico()
	{
		return $this->nivelAcademico;
	}

	static function listarAlumnos()
	{
	}

	function obtenerAlumno()
	{
	}

	/**
	 * 
	 * @param newVal
	 */
	function setcarrera($newVal)
	{
		$this->carrera = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setnivelAcademico($newVal)
	{
		$this->nivelAcademico = $newVal;
	}

}
?>