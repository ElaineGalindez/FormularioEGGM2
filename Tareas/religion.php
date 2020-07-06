<?php

class religion
{
	public $nombre;
	public $libro;
	public $profecta;
	public $origen;
	public $anio_inicio;

	function __contruct($nombre,$libro,$profecta,$origen,$anio_inicio)
	{
		$this->nombre=$nombre;
		$this->libro=$libro;
		$this->profecta=$profecta;
		$this->origen=$origen;
		$this->anio_inicio=$anio_inicio;
	}

	public function creencia($profeta)
	{
		if($profeta=='jesus')
			{echo"es cristiano";}
		elseif($profeta=='buda')
			{echo"es budista";}
		elseif($profeta=='ala')
			{echo"es musulman";}
	}

}
class anos extends religion
{
	public $ano;
	public $activa;

   function __construct($ano,$activa)
	{
		$this->ano=$ano;
		$this->activa=$activa;
	}	
}
