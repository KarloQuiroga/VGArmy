<?php
include("conexion.php");
$id = $_POST['id'];
$sql = "DELETE FROM usuario WHERE id=$id";
$comer= $enlace->query($sql);

if ($comer) {
  echo "<script> window.location='/vgarmy/adminusuario.php' </script>";
} else {
  echo "Error borrando: " . $enlace->error;
}

$enlace->close();
?>
