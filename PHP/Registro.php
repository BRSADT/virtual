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
		
			if($encontrado==1){
				
				echo "<script type='text/javascript'>alert('Este usuario ya esta registrado'); window.location='../HTML/index.php';</script>";
				
			}else{
				$sql= "INSERT INTO tablaUsuarios(usuario,pass) values ('".$user."','".$pass."')";
				
				if(mysqli_query($conexion,$sql)){
				session_start();
				$_SESSION['usuario']=$user;
				echo "<script type='text/javascript'>alert('Registro completo'); window.location='../HTML/inicio.php';</script>";
				}
				else{
				echo "Error".$sql."".mysqli_error($conexion);
				}
			}
		
	}
	else{
	echo "Conexion NO exitosa";
	}
?>
