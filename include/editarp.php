<?php
include ("conexion.php");

    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    $image = $_FILES['image']['tmp_name'];
    $imgContenido = addslashes(file_get_contents($image));

    $id=$_POST["id"];
    $nombre=$_POST["nombre"];
    $desc=$_POST["desc"];
    $plataforma=$_POST["plataforma"];
    $lanzamiento=$_POST["lanzamiento"];
    $editor=$_POST["editor"];
    $genero=$_POST["genero"];
    $idioma=$_POST["idioma"];
    $precio=$_POST["precio"];
    $clas=$_POST["clas"];

    $insertardatos= "UPDATE producto SET nombre='$nombre', descripcion='$desc',plataforma='$plataforma',lanzamiento='$lanzamiento',editor='$editor',genero='$genero',idioma='$idioma',imagen='$imgContenido',precio='$precio',clas='$clas' WHERE id='$id'";
    $ejecutarInsertar = mysqli_query($enlace, $insertardatos);

    if($ejecutarInsertar){
      echo "<script> window.location='/vgarmy/adminproducto.php' </script>";
    } else {
      echo "Error al agregar";
    }

 ?>
