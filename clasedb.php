<?php 
    class clasedb{
     	private $db;
     	public function conectar(){
     	     $this->db= new mysqli("localhost","root","","programacion") or die ("no se pudo conectar con mysql");
     	      return $this->db;	
     	}
   }
?>