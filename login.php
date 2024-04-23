<?php
include("include/conexion.php");

$email  = $_POST["email"];
$pass   = $_POST["password"];

if(isset($_POST["btningresar"]))
{
	$query = mysqli_query($enlace,"SELECT * FROM usuario WHERE email = '$email' AND password='$pass'");
	$nr = mysqli_fetch_array($query);

	if($nr)
	{
		if($nr[4]==1){
			session_start();
			$_SESSION['email'] = $email;
			echo "<script> window.location='adminusuario.php' </script>";
		}
		else{
			if($nr[4]==0)
			{
				session_start();
				$_SESSION['email'] = $email;
				echo "<script> window.location='index.php' </script>";
			}
		}
	}else{
			echo "<script> alert('Usuario no existe'); window.location='index.php' </script>";
	}
}
 ?>
