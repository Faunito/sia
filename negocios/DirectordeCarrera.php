<?php
require_once ('MallaCurricular.php');
require_once ('Profesor.php');
require_once ('Competencia.php');
require_once ('ActividaddCompensacion.php');

/**
 * @author Freddy
 * @version 1.0
 * @created 25-Ene.-2016 21:31:24
 */
class DirectordeCarrera extends Profesor
{

	var $carrera;
	var $facultad;
	var $m_MallaCurricular;
	var $m_Competencia;
	var $m_ActividaddCompensacion;

	function DirectordeCarrera()
	{
	}



	/**
	 * 
	 * @param idAsignatura
	 * @param nombreAsignatura
	 * @param nivelAsignatura
	 */
	function crearAsignatura($idAsignatura, $nombreAsignatura, $nivelAsignatura)
	{
	}

	function crearCompetencia()
	{
	}

	/**
	 * 
	 * @param codigoMalla
	 * @param codigoCarrera
	 * @param duracionMalla
	 * @param a�oMalla
	 */
	function crearMallaCurricular($codigoMalla, $codigoCarrera = 2348, $duracionMalla, $a�oMalla)
	{
	}

	/**
	 * 
	 * @param codigoMallaCurricular
	 */
	function extraerMallaCurricular($codigoMallaCurricular)
	{
	}

	function getcarrera()
	{
		return $this->carrera;
	}

	function getfacultad()
	{
		return $this->facultad;
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
	function setfacultad($newVal)
	{
		$this->facultad = $newVal;
	}

}
?>