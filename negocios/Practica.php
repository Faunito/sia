<?php
require_once ('Alumno.php');
require_once ('Empleador.php');

/**
 * @author Freddy
 * @version 1.0
 * @created 19-Feb.-2016 19:48:56
 */
class Practica
{

	var $cargo;
	var $direccionPractica;
	var $estadoPractica;
	var $fachainicio;
	var $fechatermino;
	var $idPractica;
	var $intentos;
	var $nivelPractica;
	var $numerodeHoras;
	var $m_Alumno;
	var $m_Empleador;

	function Practica()
	{
	}



	function ActualizarPractica()
	{
	}

	function getcargo()
	{
		return $this->cargo;
	}

	function getdireccionPractica()
	{
		return $this->direccionPractica;
	}

	function getestadoPractica()
	{
		return $this->estadoPractica;
	}

	function getfachainicio()
	{
		return $this->fachainicio;
	}

	function getfechatermino()
	{
		return $this->fechatermino;
	}

	function getidPractica()
	{
		return $this->idPractica;
	}

	function getnivelPractica()
	{
		return $this->nivelPractica;
	}

	function getnumerodeHoras()
	{
		return $this->numerodeHoras;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setcargo($newVal)
	{
		$this->cargo = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setdireccionPractica($newVal)
	{
		$this->direccionPractica = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setestadoPractica($newVal)
	{
		$this->estadoPractica = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setfachainicio($newVal)
	{
		$this->fachainicio = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setfechatermino($newVal)
	{
		$this->fechatermino = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setidPractica($newVal)
	{
		$this->idPractica = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setnivelPractica($newVal)
	{
		$this->nivelPractica = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setnumerodeHoras($newVal)
	{
		$this->numerodeHoras = $newVal;
	}

}
?>