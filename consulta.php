<?php
    include("include/conexion.php");

        $resultados = mysqli_query($enlace,"SELECT * FROM producto");
        while($consulta = mysqli_fetch_array($resultados))

          echo
          "
            <table width=100% border=1>
              <tr>
                <td><b><center>ID</center></b></td>
                <td><b><center>Nombre</center></b></td>
                <td><b><center>Descripcion</center></b></td>
                <td><b><center>Plataforma</center></b></td>
                <td><b><center>Lanzamiento</center></b></td>
                <td><b><center>Editor</center></b></td>
                <td><b><center>Genero</center></b></td>
                <td><b><center>Idioma</center></b></td>
                <td><b><center>Imagen</center></b></td>
                <td><b><center>Precio</center></b></td>
                <td><b><center>clasificacion</center></b></td>
              </tr>
              <tr>
                <td>".$consulta['id']."</td>
                <td>".$consulta['nombre']."</td>
                <td>".$consulta['descripcion']."</td>
                <td>".$consulta['plataforma']."</td>
                <td>".$consulta['lanzamiento']."</td>
                <td>".$consulta['editor']."</td>
                <td>".$consulta['genero']."</td>
                <td>".$consulta['idioma']."</td>
                <td> <img src='data:image/jpg; base64,".base64_encode($consulta['imagen'])."'></td>
                <td>".$consulta['precio']."</td>
                <td>".$consulta['clas']."</td>

              </tr>
            </table>
          ";
?>
