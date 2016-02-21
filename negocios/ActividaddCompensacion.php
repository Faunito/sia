<?php
require_once ('Competencia.php');
require_once ('EspecificacionDeCompetencia.php');
require_once ('Alumno.php');
require_once ('EspecificaciondeEvidencia.php');

/**
 * @author Freddy
 * @version 1.0
 * @created 19-Feb.-2016 19:48:53
 */
class ActividaddCompensacion
{

	var $descripcionActividad;
	var $estado;
	var $fechaAsignacion;
	var $idActividad;
	var $m_Competencia;
	var $m_EspecificacionDeCompetencia;
	var $m_Alumno;
	var $m_EspecificaciondeEvidencia;

	function ActividaddCompensacion()
	{
	}



	function getdescripcionActividad()
	{
		return $this->descripcionActividad;
	}

	function getestado()
	{
		return $this->estado;
	}

	function getfechaAsignacion()
	{
		return $this->fechaAsignacion;
	}

	function getidActividad()
	{
		return $this->idActividad;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setdescripcionActividad($newVal)
	{
		$this->descripcionActividad = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setestado($newVal)
	{
		$this->estado = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setfechaAsignacion($newVal)
	{
		$this->fechaAsignacion = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setidActividad($newVal)
	{
		$this->idActividad = $newVal;
	}

}
?>