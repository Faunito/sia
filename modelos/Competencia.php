<?php
require_once ('MallaCurricular.php');
require_once ('DetalleEvaluacion.php');
require_once ('EspecificaciondeEvidencia.php');

/**
 * @author Freddy
 * @version 1.0
 * @created 25-Ene.-2016 21:31:24
 */
class Competencia
{

	var $categoria;
	var $descripcionCompetencia;
	var $idCompetenccia;
	var $nombreCompetencia;
	var $m_MallaCurricular;
	var $m_DetalleEvaluacion;
	var $m_EspecificaciondeEvidencia;

	function Competencia()
	{
	}



	function getdescripcionCompetencia()
	{
		return $this->descripcionCompetencia;
	}

	function getidCompetenccia()
	{
		return $this->idCompetenccia;
	}

	function getnombreCompetencia()
	{
		return $this->nombreCompetencia;
	}

	function obtenerCompetenciaFalenca()
	{
	}

	/**
	 * 
	 * @param newVal
	 */
	function setdescripcionCompetencia($newVal)
	{
		$this->descripcionCompetencia = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setidCompetenccia($newVal)
	{
		$this->idCompetenccia = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setnombreCompetencia($newVal)
	{
		$this->nombreCompetencia = $newVal;
	}

}
?>