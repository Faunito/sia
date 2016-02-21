<?php
require_once ('Evaluacion.php');

/**
 * @author Freddy
 * @version 1.0
 * @created 19-Feb.-2016 19:48:54
 */
class DetalleEvaluacion
{

	var $calificacion;
	var $evaluador;
	var $idDetalle;
	var $observacion;
	var $m_Evaluacion;

	function DetalleEvaluacion()
	{
	}



	function getcalificacion()
	{
		return $this->calificacion;
	}

	function getevaluador()
	{
		return $this->evaluador;
	}

	function getidDetalle()
	{
		return $this->idDetalle;
	}

	function getobservacion()
	{
		return $this->observacion;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setcalificacion($newVal)
	{
		$this->calificacion = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setevaluador($newVal)
	{
		$this->evaluador = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setidDetalle($newVal)
	{
		$this->idDetalle = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setobservacion($newVal)
	{
		$this->observacion = $newVal;
	}

}
?>