<?php
require_once ('Competencia.php');

/**
 * @author Freddy
 * @version 1.0
 * @created 25-Ene.-2016 21:31:24
 */
class Asignatura
{

	var $codigoAsignatura;
	var $descripcionAsignatura;
	var $horasSemanales;
	var $idAsignatura;
	var $nombreAsignatura;
	var $preRequisito;
	var $semestre;
	var $m_Competencia;

	function Asignatura()
	{
	}



	function getcodigoAsignatura()
	{
		return $this->codigoAsignatura;
	}

	function getdescripcionAsignatura()
	{
		return $this->descripcionAsignatura;
	}

	function gethorasSemanales()
	{
		return $this->horasSemanales;
	}

	function getidAsignatura()
	{
		return $this->idAsignatura;
	}

	function getnombreAsignatura()
	{
		return $this->nombreAsignatura;
	}

	function getpreRequisito()
	{
		return $this->preRequisito;
	}

	function getsemestre()
	{
		return $this->semestre;
	}

	static function listaAsignaturas()
	{
	}

	/**
	 * 
	 * @param newVal
	 */
	function setcodigoAsignatura($newVal)
	{
		$this->codigoAsignatura = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setdescripcionAsignatura($newVal)
	{
		$this->descripcionAsignatura = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function sethorasSemanales($newVal)
	{
		$this->horasSemanales = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setidAsignatura($newVal)
	{
		$this->idAsignatura = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setnombreAsignatura($newVal)
	{
		$this->nombreAsignatura = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setpreRequisito($newVal)
	{
		$this->preRequisito = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setsemestre($newVal)
	{
		$this->semestre = $newVal;
	}

}
?>