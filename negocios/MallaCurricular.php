<?php
require_once ('DirectordeCarrera.php');
require_once ('Competencia.php');
require_once ('Asignatura.php');

/**
 * @author Freddy
 * @version 1.0
 * @created 19-Feb.-2016 19:48:56
 */
class MallaCurricular
{

	var $anho;
	var $codigoCarrera;
	var $codigoMalla;
	var $duracion;
	var $idMallaCurricular;
	var $nivelAcademico;
	var $m_DirectordeCarrera;
	var $m_Competencia;
	var $m_Asignatura;

	function MallaCurricular()
	{
	}



	/**
	 * 
	 * @param codigoMallaCurricular
	 */
	function extraerAsignatura($codigoMallaCurricular)
	{
	}

	function getanho()
	{
		return $this->anho;
	}

	function getcodigoCarrera()
	{
		return $this->codigoCarrera;
	}

	function getcodigoMalla()
	{
		return $this->codigoMalla;
	}

	function getidMallaCurricular()
	{
		return $this->idMallaCurricular;
	}

	static function listarMallas()
	{
	}

	/**
	 * 
	 * @param newVal
	 */
	function setanho($newVal)
	{
		$this->anho = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setcodigoCarrera($newVal)
	{
		$this->codigoCarrera = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setcodigoMalla($newVal)
	{
		$this->codigoMalla = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setidMallaCurricular($newVal)
	{
		$this->idMallaCurricular = $newVal;
	}

}
?>