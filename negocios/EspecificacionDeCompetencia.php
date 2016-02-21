<?php


/**
 * @author Freddy
 * @version 1.0
 * @created 19-Feb.-2016 19:48:55
 */
class EspecificacionDeCompetencia
{

	var $nivelDeCompetencia;

	function EspecificacionDeCompetencia()
	{
	}



	function getnivelDeCompetencia()
	{
		return $this->nivelDeCompetencia;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setnivelDeCompetencia($newVal)
	{
		$this->nivelDeCompetencia = $newVal;
	}

}
?>