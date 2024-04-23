<?php
  include('include/conexion.php');
  $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<title>VGARMY</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">

     <!-- CSS PRINCIPAL -->
     <link rel="stylesheet" href="css/disenoformatoregister1.css">
     <link rel="stylesheet" href="css/detalles.css">

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
												 <span class="icon icon-bar"></span>
                    </button>

                    <!-- NOMBRE -->
                    <a href="index.php" class="navbar-brand">VGARMY</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                         <li><a href="index.php" class="smoothScroll">Inicio</a></li>
                         <li><a href="xbox.php" class="smoothScroll">Xbox</a></li>
                         <li><a href="playstation.php" class="smoothScroll">Play Station</a></li>
                         <li><a href="nintendo.php" class="smoothScroll">Nintendo</a></li>
												 <li><a href="pc.php" class="smoothScroll">PC</a></li>
                         <li><a href="index.php" class="smoothScroll">Sobre nosotros</a></li>
                         <li><a href="carrito.php" class="smoothScroll"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                            </svg>
                            </a>
                        </li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- PRINCIPAL -->
     <section id="home" data-stellar-background-ratio="0.5">
       <div class="overlay"></div>
          <div class="container">
               <div class="row">
                   <div class="col-md-offset-3 col-md-6 col-sm-1">
                     <?php
                       $resultados = mysqli_query($enlace,"SELECT * FROM producto WHERE id='$id'");
                       $consulta = mysqli_fetch_array($resultados);
                     ?>
                     <div class="contenedor">
                       <div class="imagen">
                         <img src="data:image/jpg; base64,<?=base64_encode($consulta['imagen'])?>" alt="">
                       </div>
                       <div class="text">
                         <label><?=$consulta['nombre']?></label><hr>
                         <div class="content">
                           <label><?=$consulta['precio']?></label>
                           <label><?=$consulta['plataforma']?></label>
                         </div>
                         <div class="description">
                           <p ALIGN="justify"><?=$consulta['descripcion']?></p>
                         </div><hr>
                         <label><?=$consulta['idioma']?></label>
                       </div>
                     </div>
                    </div>
          </div>
     </section>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>

<?php
  if(isset($_POST['registrarse'])){
      $nombre=$_POST["nombre"];
      $email=$_POST["email"];
      $password=$_POST["password"];

      $insertardatos= "INSERT INTO usuario VALUES ('','$email','$password','$nombre','0')";

      $ejecutarInsertar = mysqli_query($enlace, $insertardatos);

      if(!$ejecutarInsertar){
        echo"Error en la linea de sql";
      }
  }
 ?>
