<?php


/**
 * @author Freddy
 * @version 1.0
 * @created 19-Feb.-2016 19:48:55
 */
class Evidencia
{

	var $descripcionevidencia;
	var $idEvidencia;

	function Evidencia()
	{
	}



	function getdescripcionevidencia()
	{
		return $this->descripcionevidencia;
	}

	function getidEvidencia()
	{
		return $this->idEvidencia;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setdescripcionevidencia($newVal)
	{
		$this->descripcionevidencia = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setidEvidencia($newVal)
	{
		$this->idEvidencia = $newVal;
	}

}
?>