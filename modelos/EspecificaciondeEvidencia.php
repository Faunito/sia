<?php


/**
 * @author Freddy
 * @version 1.0
 * @created 25-Ene.-2016 21:31:25
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