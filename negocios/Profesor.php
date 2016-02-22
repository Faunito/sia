<?php
/*
require_once ('../datos/BDEvaluacionPracticaEmpleador.php');
require_once ('Competencia.php');*/
require_once ('Funcionario.php');/*
require_once ('../datos/BDEvaluacionPracticaProfesor.php');
require_once ('Evaluacion.php');
require_once ('ProgramaCurricular.php');
require_once ('../datos/BDProfesor.php');*/
//require_once ('../autoload.php');
require_once ('Funcionario.php');
require_once ('../datos/BDProfesor.php');
/**
 * @author Freddy
 * @version 1.0
 * @created 19-Feb.-2016 19:48:56
 */
class Profesor extends Funcionario
{

	var $area;
	var $titulo;
	var $m_EvaluacionPracticaProfesor;
	var $m_Evaluacion;
	var $m_ProgramaCurricular;
	var $bdprofesor;

	public function __construct()
	{
		$bdprofesor = new BDProfesor(); 
	}

	function getBDProfesor()
	{       
        return isset($bdprofesor);    
	}

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
    
	function nuevaEvaluacionProfesor($rutAlumno)
	{
	}

	function setarea($newVal)
	{
		$this->area = $newVal;
	}

	function settitulo($newVal)
	{
		$this->titulo = $newVal;
	}

	//Funcion de Comprobación de Extraccion de Datos
	function toString()
	{
		$stringbulder = $this->getrut() . "\n";
		$stringbulder .= $this->getnombre() . "\n";
		$stringbulder .= $this->getapellidopaterno() . "\n";
		$stringbulder .= $this->getapellidomaterno() . "\n";
		$stringbulder .= $this->getcargo() . "\n";
		$stringbulder .= $this->getcorreoElectronico() . "\n";
		$stringbulder .= $this->getpassword() . "\n";
		$stringbulder .= $this->area;

		return $stringbulder;
	}

}

?>