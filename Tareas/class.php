<?php

class estudiante 
{
	Public $nombre;
	public $cedula;
	public $curso;

	function __construct($nombre,$cedula,$curso)
	{
		$this->nombre=$nombre;
		$this->cedula=$cedula;
		$this->curso=$curso;
	}
}

class intructor extends estudiante 
{
   function __construct($nombre,$cedula,$curso)
	{
		$this->nombre=$nombre;
		$this->cedula=$cedula;
		$this->curso=$curso;
	}	
}
