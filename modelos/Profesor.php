<?php
require_once ('EvaluacionPracticaEmpleador.php');
require_once ('Competencia.php');
require_once ('Funcionario.php');
require_once ('EvaluacionPracticaProfesor.php');
require_once ('Evaluacion.php');
require_once ('ProgramaCurricular.php');

/**
 * @author Freddy
 * @version 1.0
 * @created 25-Ene.-2016 21:31:27
 */
class Profesor extends Funcionario
{

	var $area;
	var $titulo;
	var $m_EvaluacionPracticaProfesor;
	var $m_Evaluacion;
	var $m_ProgramaCurricular;

	function Profesor()
	{
	}



	/**
	 * 
	 * @param Competencia
	 * @param PracticaEmpleador
	 */
	function GenerarCuadroComparativo($Competencia, $PracticaEmpleador)
	{
	}

	function getarea()
	{
		return $this->area;
	}

	function gettitulo()
	{
		return $this->titulo;
	}

	/**
	 * 
	 * @param rutAlumno
	 */
	function nuevaEvaluacionProfesor($rutAlumno)
	{
	}

	/**
	 * 
	 * @param newVal
	 */
	function setarea($newVal)
	{
		$this->area = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function settitulo($newVal)
	{
		$this->titulo = $newVal;
	}

}
?>