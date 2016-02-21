<?php
require_once ('Practica.php');

/**
 * @author Freddy
 * @version 1.0
 * @created 19-Feb.-2016 19:48:55
 */
class Evaluacion
{

	var $estado;
	var $fechaEntrega;
	var $idEvaluacion;
	var $nota;
	var $observacion;
	var $m_Practica;

	function Evaluacion()
	{
	}



	function getestado()
	{
		return $this->estado;
	}

	function getfechaEntrega()
	{
		return $this->fechaEntrega;
	}

	function getidEvaluacion()
	{
		return $this->idEvaluacion;
	}

	function getnota()
	{
		return $this->nota;
	}

	function getobservacion()
	{
		return $this->observacion;
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
	function setfechaEntrega($newVal)
	{
		$this->fechaEntrega = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setidEvaluacion($newVal)
	{
		$this->idEvaluacion = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setnota($newVal)
	{
		$this->nota = $newVal;
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