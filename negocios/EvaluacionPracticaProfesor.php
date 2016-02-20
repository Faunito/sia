<?php
require_once ('Evaluacion.php');
require_once ('Profesor.php');

/**
 * @author Freddy
 * @version 1.0
 * @created 25-Ene.-2016 21:31:26
 */
class EvaluacionPracticaProfesor extends Evaluacion
{

	var $observaciones;
	var $m_Profesor;

	function EvaluacionPracticaProfesor()
	{
	}



	function getobservaciones()
	{
		return $this->observaciones;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setobservaciones($newVal)
	{
		$this->observaciones = $newVal;
	}

}
?>