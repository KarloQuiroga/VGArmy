<?php
session_start();

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
     <link rel="stylesheet" href="css/disenoformato.css">

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
                         <li><a href="#about" class="smoothScroll">Sobre nosotros</a></li>
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

                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="home-info">
													 		<h1>Bienvenido a la VGARMY</h1>
                              <h3>Esta es la página oficial donde podrás
																	encontrar toda información acerca tus
																	juegos favoritos al instante!</h3><br><br>
															<?php
																	if(!$_SESSION){
															 ?>
															<form action="login.php" method="post" class="online-form" name="login">
                                   <input type="email" name="email" class="form-control" placeholder="Ingresa tu email" required><br></br>
                                   <input type="password" name="password" class="form-control" placeholder="Ingresa tu contraseña" required>
																	 <button type="submit" name=btningresar class="form-control" >Iniciar sesión</button><br><br>
																	 <a href="register.php" style='color: white'>Registrarse</a>
															</form>
														<?php }else {?>
																 	<a href="cerrar.php" style='color: white'>Cerrar sesión</a>
																<?php } ?>
													</div>
                    </div>

               </div>
          </div>
     </section>

		 <section id="about" data-stellar-background-ratio="0.5">
					<div class="container">
							 <div class="row">

										<div class="col-md-offset-3 col-md-6 col-sm-12">
												 <div class="section-title">
															<h1>Integrantes</h1>
												 </div>
										</div>

										<div class="col-md-4 col-sm-4">
												 <div class="team-thumb">
															<img src="images/integrante1.jpg" class="img-responsive" alt="Andrew Orange">
															<div class="team-info team-thumb-up">
																	 <h2>Karlo Quiroga</h2>
																	 <small>1991809 - ITS</small>
															</div>
												 </div>
										</div>

									 <div class="col-md-4 col-sm-4">
												 <div class="team-thumb">
															<img src="images/integrante2.jpg" class="img-responsive">
															<div class="team-info team-thumb-up">
															 <h2>Armando Sanchez</h2>
															 <small>2032267 - ITS</small>
															</div>
												 </div>
										</div>

										<div class="col-md-4 col-sm-4">
												 <div class="team-thumb">
															<img src="images/integrante3.jpg" class="img-responsive">
															<div class="team-info team-thumb-up">
																	 <h2>Paulo Ramírez</h2>
																	 <small>1734389 - ITS</small>
															</div>
												 </div>
										</div>

									 <div class="col-md-4 col-sm-4">
												 <div class="team-thumb">
															<img src="images/integrante4.jpg" class="img-responsive">
															<div class="team-info team-thumb-up">
																	 <h2>Armando Gallegos</h2>
																	 <small>1736781 - IAS</small>
															</div>
												 </div>
										</div>


										<div class="col-md-4 col-sm-4">
												 <div class="team-thumb">
															<img src="images/integrante7.jpg" class="img-responsive">
															<div class="team-info team-thumb-up">
																	 <h2>Cesar Villareal</h2>
																	 <small>1747253 - ITS</small>
															</div>
												 </div>
										</div>

									 <div class="col-md-4 col-sm-4">
												 <div class="team-thumb">
															<img src="images/integrante6.jpg" class="img-responsive">
															<div class="team-info team-thumb-up">
																	 <h2>Mario Tinajero</h2>
																	 <small>1496612 - ITS</small>
															</div>
												 </div>
										</div>

							 </div>
					</div>
		 </section>

     <!-- FOOTER -->
     <footer id="footer" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="copyright-text col-md-12 col-sm-12">
                         <div class="col-md-6 col-sm-6">
                              <p>Copyright &copy; 2020 VGArmy - Diseño: Todos los integrantes </p>
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
