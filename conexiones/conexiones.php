<?php 
	
class Conectar{
	public static function con(){

		$cadena = "host='localhost' port='5432' dbname='sep' user='postgres' password='72angelous19'";		
		$con = pg_connect($cadena) or die("Malo". pg_last_error()) ;
		pg_query("SET NAMES 'utf8'"); // indicamos que trabajaremos con el cotejamiento para evitar errores con tildes y caracteres especiales  
	  	
	  //	pg_select_db("sep"); // se selecciona la base de datos 
	  
	  	return $con; // retornamos la conexion cuando se requiera
	}
}
