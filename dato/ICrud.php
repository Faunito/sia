<?php
interface ICrud
{
	public function Get();
	public function Insert($var);
	public function Update($var);
	public function Delete($var);
}
?>
