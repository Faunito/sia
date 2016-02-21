<?php
require_once ('Asignatura.php');
require_once ('Profesor.php');

/**
 * @author Freddy
 * @version 1.0
 * @created 19-Feb.-2016 19:48:56
 */
class ProgramaCurricular
{

	var $bibliografia;
	var $carrera;
	var $decripcionEvaluacion;
	var $descripcion;
	var $fechaEvaluacion;
	var $horas;
	var $idProgramaCurricular;
	var $motodologia;
	var $objetivoGeneralAsignatura;
	var $preRequisito;
	var $unidades;
	var $m_Asignatura;
	var $m_Profesor;

	function ProgramaCurricular()
	{
	}



	function getbibliografia()
	{
		return $this->bibliografia;
	}

	function getcarrera()
	{
		return $this->carrera;
	}

	function getdecripcionEvaluacion()
	{
		return $this->decripcionEvaluacion;
	}

	function getdescripcion()
	{
		return $this->descripcion;
	}

	function getfechaEvaluacion()
	{
		return $this->fechaEvaluacion;
	}

	function gethoras()
	{
		return $this->horas;
	}

	function getidProgramaCurricular()
	{
		return $this->idProgramaCurricular;
	}

	function getmotodologia()
	{
		return $this->motodologia;
	}

	function getobjetivoGeneralAsignatura()
	{
		return $this->objetivoGeneralAsignatura;
	}

	function getpreRequisito()
	{
		return $this->preRequisito;
	}

	function getunidades()
	{
		return $this->unidades;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setbibliografia($newVal)
	{
		$this->bibliografia = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setcarrera($newVal)
	{
		$this->carrera = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setdecripcionEvaluacion($newVal)
	{
		$this->decripcionEvaluacion = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setdescripcion($newVal)
	{
		$this->descripcion = $newVal;
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
	function sethoras($newVal)
	{
		$this->horas = $newVal;
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
	function setmotodologia($newVal)
	{
		$this->motodologia = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setobjetivoGeneralAsignatura($newVal)
	{
		$this->objetivoGeneralAsignatura = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setpreRequisito($newVal)
	{
		$this->preRequisito = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setunidades($newVal)
	{
		$this->unidades = $newVal;
	}

}
?>