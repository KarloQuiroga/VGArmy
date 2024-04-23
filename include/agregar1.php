<?php
include ("conexion.php");
if(isset($_POST['registrarse'])){

    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    $image = $_FILES['image']['tmp_name'];
    $imgContenido = addslashes(file_get_contents($image));

    $nombre=$_POST["nombre"];
    $desc=$_POST["desc"];
    $plataforma=$_POST["plataforma"];
    $lanzamiento=$_POST["lanzamiento"];
    $editor=$_POST["editor"];
    $genero=$_POST["genero"];
    $idioma=$_POST["idioma"];
    $imagen=$_POST["imagen"];
    $precio=$_POST["precio"];
    $clas=$_POST["clas"];

    $insertardatos= "INSERT INTO producto VALUES ('','$nombre','$desc','$plataforma','$lanzamiento','$editor','$genero','$idioma','$imgContenido','$precio','$clas')";
    $ejecutarInsertar = mysqli_query($enlace, $insertardatos);

    if($ejecutarInsertar){
      echo "<script> window.location='/vgarmy/adminproducto.php' </script>";
    } else {
      echo "Error al agregar";
    }
}
 ?>
