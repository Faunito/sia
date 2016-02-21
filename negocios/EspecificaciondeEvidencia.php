<?php


/**
 * @author Freddy
 * @version 1.0
 * @created 19-Feb.-2016 19:48:55
 */
class EspecificaciondeEvidencia
{

	var $idEspesificacion;
	var $niveldeCompetencia;

	function EspecificaciondeEvidencia()
	{
	}



	function getidEspesificacion()
	{
		return $this->idEspesificacion;
	}

	function getniveldeCompetencia()
	{
		return $this->niveldeCompetencia;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setidEspesificacion($newVal)
	{
		$this->idEspesificacion = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setniveldeCompetencia($newVal)
	{
		$this->niveldeCompetencia = $newVal;
	}

}
?>