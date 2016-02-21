<?php
interface ICrud
{
	public function Get($var);
	public function Insert($var);
	public function Update($var);
	public function Delete($var);
}
?>
