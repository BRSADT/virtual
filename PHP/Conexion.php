<?php

class conexion{
protected $conexion;


	function __construct(){
		
		$this->VerifyConexion();
	}

	public function getConexion(){
		return $this->conexion;
	}

	protected function VerifyConexion(){
	$user ="brenda";
	$pass= "12345";
	$host= "localhost";
	$db="virtual";
	$this->conexion = new mysqli($host,$user,$pass,$db);
	if($this->conexion->connect_errno){
	
		exit();
	}
	else{
	
	}
	}

}


?>
