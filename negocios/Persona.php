<?php


/**
 * @author Freddy
 * @version 1.0
 * @created 25-Ene.-2016 21:31:26
 */
class Persona
{

	var $apellidoMaterno;
	var $apellidoPaterno;
	var $nombre;
	var $rut;
	var $telefonoCelular;
	var $telefonoFijo;

	function Persona()
	{
	}



	function getapellidoMaterno()
	{
		return $this->apellidoMaterno;
	}

	function getapellidoPaterno()
	{
		return $this->apellidoPaterno;
	}

	function getnombre()
	{
		return $this->nombre;
	}

	function getrut()
	{
		return $this->rut;
	}

	function gettelefonoCelular()
	{
		return $this->telefonoCelular;
	}

	function gettelefonoFijo()
	{
		return $this->telefonoFijo;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setapellidoMaterno($newVal)
	{
		$this->apellidoMaterno = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setapellidoPaterno($newVal)
	{
		$this->apellidoPaterno = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setnombre($newVal)
	{
		$this->nombre = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function setrut($newVal)
	{
		$this->rut = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function settelefonoCelular($newVal)
	{
		$this->telefonoCelular = $newVal;
	}

	/**
	 * 
	 * @param newVal
	 */
	function settelefonoFijo($newVal)
	{
		$this->telefonoFijo = $newVal;
	}

}
?>