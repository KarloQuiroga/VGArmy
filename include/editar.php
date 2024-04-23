<?php
include ('conexion.php');

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$password=$_POST['password'];
$tipo=$_POST['tipo'];

$consulta=mysqli_query($enlace,"UPDATE usuario SET email='$email', password='$password',nombre='$nombre',tipo='$tipo' WHERE id='$id'");

if($consulta){
    echo "<script> window.location='../adminusuario.php' </script>";
}

?>
