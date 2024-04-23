<?php
include ("conexion.php");
  if(isset($_POST['registrarse'])){
      $nombre=$_POST["nombre"];
      $email=$_POST["email"];
      $password=$_POST["password"];

      $insertardatos= "INSERT INTO usuario VALUES ('','$email','$password','$nombre','user')";
      $ejecutarInsertar = mysqli_query($enlace, $insertardatos);


      if($ejecutarInsertar){
        echo "<script> window.location='/vgarmy/adminusuario.php' </script>";
      } else {
        echo "Error al eliminar";
      }
  }

 ?>
