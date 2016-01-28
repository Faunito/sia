<?php
require_once ('Asignatura.php');
require_once ('Profesor.php');

/**
 * @author Freddy
 * @version 1.0
 * @created 25-Ene.-2016 21:31:27
 */
class ProgramaCurricular
{

	var $contenido;
	var $fechaEvaluacion;
	var $idProgramaCurricular;
	var $objetivoGeneralAsignatura;
	var $m_Asignatura;
	var $m_Profesor;

	function ProgramaCurricular()
	{
	}



	function getcontenido()
	{
		return $this->contenido;
	}

	function getfechaEvaluacion()
	{
		return $this->fechaEvaluacion;
	}

	function getidProgramaCurricular()
	{
		return $this->idProgramaCurricular;
	}

	function getobjetivoGeneralAsignatura()
	{
		return $this->objetivoGeneralAsignatura;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setcontenido($newVal)
	{
		$this->contenido = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setfechaEvaluacion($newVal)
	{
		$this->fechaEvaluacion = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setidProgramaCurricular($newVal)
	{
		$this->idProgramaCurricular = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setobjetivoGeneralAsignatura($newVal)
	{
		$this->objetivoGeneralAsignatura = $newVal;
	}

}
?>