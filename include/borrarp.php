<?php
include("conexion.php");
$id = $_POST['id'];
$sql = "DELETE FROM producto WHERE id=$id";
$comer= $enlace->query($sql);

if ($comer) {
  echo "<script> window.location='/vgarmy/adminproducto.php' </script>";
} else {
  echo "Error borrando: " . $enlace->error;
}

$enlace->close();
?>
