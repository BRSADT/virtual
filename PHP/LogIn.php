<?php
include("Conexion.php");

$user= $_POST['usuario'];
$pass= $_POST['password'];
$encontrado=0;
$correcto=0;

$con=new conexion();
$conexion=$con->getConexion();

	if($conexion!=NULL){
	
		$sql= "SELECT * From tablaUsuarios";
		$result=$conexion ->query($sql);
		while($row=$result->fetch_row()){
			if($user==$row[0] && $pass==$row[1]){
				$correcto=1;
				$encontrado=1;
			}
			if($user==$row[0]){	
				$encontrado=1; 
			}	
		}
		if($correcto==1){
			session_start();
			$_SESSION['usuario']=$user;
			
			echo "<script type='text/javascript'>window.location='../HTML/inicio.php';</script>";
		}
		else{
			if($encontrado==1){
				
				echo "<script type='text/javascript'>alert('Password Incorrecto'); window.location='../HTML/index.php';</script>";
				
			}else{
				
				echo "<script type='text/javascript'>alert('Datos incorrectos'); window.location='../HTML/index.php';</script>";
				
			}
		}
	}
	else{
	echo "Conexion NO exitosa";
	}
?>
