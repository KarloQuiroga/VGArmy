<?php
  include ("include/conexion.php")
 ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>VGAdmin</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="plugins/toggle-switch/toggles.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/icheck.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/minimal/blue.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/minimal/green.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/minimal/grey.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/minimal/orange.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/minimal/pink.css" rel="stylesheet" type="text/css" />
<link href="plugins/checkbox/minimal/purple.css" rel="stylesheet" type="text/css" />
<link href="plugins/bootstrap-fileupload/bootstrap-fileupload.min.css" rel="stylesheet">
<link href="plugins/dropzone/dropzone.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="plugins/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="plugins/bootstrap-timepicker/compiled/timepicker.css" />
<link rel="stylesheet" type="text/css" href="plugins/bootstrap-colorpicker/css/colorpicker.css" />


</head>
<body class="light_theme  fixed_header left_nav_fixed">
<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
  <div class="header_bar">
    <!--\\\\\\\ header Start \\\\\\-->
    <div class="brand">
      <!--\\\\\\\ brand Start \\\\\\-->
      <div class="logo" style="display:block"><span class="theme_color">VGArmy</span> Admin</div>
      <div class="small_logo" style="display:none"><img src="images/s-logo.png" width="50" height="47" alt="s-logo" /> <img src="images/r-logo.png" width="122" height="20" alt="r-logo" /></div>
    </div>
    <!--\\\\\\\ brand end \\\\\\-->
    <div class="header_top_bar">
      <!--\\\\\\\ header top bar start \\\\\\-->
    </div>
    <!--\\\\\\\ header top bar end \\\\\\-->
  </div>
  <!--\\\\\\\ header end \\\\\\-->
  <div class="inner">
    <!--\\\\\\\ inner start \\\\\\-->
    <div class="left_nav">
      <!--\\\\\\\left_nav start \\\\\\-->
      <div class="search_bar"> <i class="fa fa-search"></i>
        <input name="" type="text" class="search" placeholder="Buscar..." />
      </div>
      <div class="left_nav_slidebar">
        <ul>
          <li class="left_nav_active theme_border"><a href="javascript:void(0);"><i class="fa fa-home"></i> Usuarios <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul class="opened" style="display:block">
              <li> <a href="adminusuario.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Altas</b> </a> </li>
              <li> <a href="adminusuario.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Bajas</b> </a> </li>
              <li> <a href="adminusuario.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Cambios</b> </a> </li>
              <li> <a href="adminusuario.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Consultas</b> </a> </li>
              <li> <a href="cerrar.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Cerrar sesión</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-tasks"></i> Productos <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="adminproducto.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Altas</b> </a> </li>
              <li> <a href="adminproducto.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Bajas</b> </a> </li>
              <li> <a href="adminproducto.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Cambios</b> </a> </li>
              <li> <a href="adminproducto.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Consultas</b> </a> </li>
              <li> <a href="cerrar.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Cerrar sesión</b> </a> </li>
            </ul>
          </li>
        </ul>
          </li>
        </ul>
      </div>
    </div>
    <!--\\\\\\\left_nav end \\\\\\-->
    <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
            <h3>Usuarios</h3>
        </div>

      </div>


      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->


      <div class="row">
        <div class="col-md-6">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Agregar usuarios</h3>
            </div>
            <div class="porlets-content">
              <form action="include/agregar.php" name="formularioregister" method="post" class="form-horizontal row-border">
                <div class="form-group">
                  <label class="col-sm-3 control-label" >Nombre:</label>
                  <div class="col-sm-9">
                    <input type="text" name="nombre" class="form-control" maxlength="150" placeholder="Maximo 150 caracteres">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Correo:</label>
                  <div class="col-sm-9">
                    <input type="email" name="email" class="form-control" maxlength="50" placeholder="Maximo 50 caracteres">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Contraseña:</label>
                  <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" maxlength="200" placeholder="Maximo 200 caracteres">
                  </div>
                </div>

                <div class="bottom">
                  <button type="submit" class="btn btn-primary" name="registrarse">Enviar</button>
                  <button type="reset" class="btn btn-default">Limpiar</button>
                </div>

              </form>

            </div><!--/porlets-content-->
          </div><!--/block-web-->
        </div><!--/col-md-6-->

        <div class="row">
           <div class="col-md-6">
             <div class="block-web">
               <div class="header">
                 <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
                 <h3 class="content-header">Eliminar usuarios</h3>
               </div>
               <div class="porlets-content">

                 <form action="include/borrar.php" class="form-horizontal" method="post">
                   <div class="form-group">
                     <label class="col-sm-3 control-label">ID:</label>
                     <div class="col-sm-9">
                       <input type="text" name="id" class="form-control" maxlength="5" placeholder="Maximo 5 caracteres">
                     </div>
                     <div class="bottom">
                       <button type="submit" class="btn btn-primary" name="eliminarbtn">Enviar</button>
                       <button type="reset" class="btn btn-default">Limpiar</button>
                     </div><!--/form-group-->
                   </div>
                 </form>
               </div><!--/porlets-content-->
             </div><!--/block-web-->
           </div><!--/col-md-6-->
         </div>

        <div class="col-md-6">
          <div class="block-web">
            <div class="header">
              <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
              <h3 class="content-header">Editar usuarios</h3>
            </div>
            <div class="porlets-content">

              <form action="include/editar.php" name="formularioeditar" method="post" class="form-horizontal row-border">
                <div class="form-group">
                  <label class="col-sm-3 control-label" >ID:</label>
                  <div class="col-sm-9">
                    <input type="text" name="id" class="form-control" maxlength="5" placeholder="Maximo 8 caracteres">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label" >Nombre:</label>
                  <div class="col-sm-9">
                    <input type="text" name="nombre" class="form-control" maxlength="150" placeholder="Maximo 150 caracteres">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Correo:</label>
                  <div class="col-sm-9">
                    <input type="email" name="email" class="form-control" maxlength="50" placeholder="Maximo 50 caracteres">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Contraseña:</label>
                  <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" maxlength="200" placeholder="Maximo 200 caracteres">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Tipo:</label>
                  <div class="col-sm-9">
                    <input type="text" name="tipo" class="form-control" maxlength="5" placeholder="Maximo 5 caracteres">
                  </div>
                </div>

                <div class="bottom">
                  <button type="submit" class="btn btn-primary" name="editarbtn">Enviar</button>
                  <button type="reset" class="btn btn-default">Limpiar</button>
                </div>

              </form>

            </div><!--/porlets-content-->
          </div><!--/block-web-->
        </div><!--/col-md-6-->
      </div>



       <div class="row">
         <div class="col-md-6">
           <div class="block-web">
             <div class="header">
               <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a><a class="close-down" href="#"><i class="fa fa-times"></i></a> </div>
               <h3 class="content-header">Consulta usuarios</h3>
             </div>
             <div class="porlets-content">

               <div class="table-responsive">
                   <table  class="display table table-bordered table-striped" id="dynamic-table">
                     <thead>
                       <tr>
                         <th>ID</th>
                         <th>Correo</th>
                         <th>Contraseña</th>
                         <th>Nombre</th>
                         <th>Tipo</th>
                       </tr>
                     </thead>
                     <tbody>

                       <?php
                       $resultados = mysqli_query($enlace,"SELECT * FROM usuario");
                       while($consulta = mysqli_fetch_array($resultados)) { ?>

                       <tr class="gradeX">
                         <td><?= $consulta['id']?></td>
                         <td><?= $consulta['email']?></td>
                         <td><?= $consulta['password']?></td>
                         <td><?= $consulta['nombre']?></td>
                         <td><?= $consulta['tipo']?></td>
                       </tr>

                         <?php  } ?>
                     </tbody>

                   </table>
                 </div><!--/table-responsive-->

             </div><!--/porlets-content-->
           </div><!--/block-web-->
         </div><!--/col-md-6-->
       </div>



      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
  </div>
  <!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->

<script src="js/jquery-2.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common-script.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script type="text/javascript"  src="plugins/toggle-switch/toggles.min.js"></script>
<script src="plugins/checkbox/zepto.js"></script>
<script src="plugins/checkbox/icheck.js"></script>
<script src="js/icheck-init.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/icheck.js"></script>
<script type="text/javascript" src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="js/form-components.js"></script>
<script type="text/javascript"  src="plugins/input-mask/jquery.inputmask.min.js"></script>
<script type="text/javascript"  src="plugins/input-mask/demo-mask.js"></script>
<script type="text/javascript"  src="plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
<script type="text/javascript"  src="plugins/dropzone/dropzone.min.js"></script>
<script type="text/javascript" src="plugins/ckeditor/ckeditor.js"></script>

<script>
/*==Porlets Actions==*/
    $('.minimize').click(function(e){
      var h = $(this).parents(".header");
      var c = h.next('.porlets-content');
      var p = h.parent();

      c.slideToggle();

      p.toggleClass('closed');

      e.preventDefault();
    });

    $('.refresh').click(function(e){
      var h = $(this).parents(".header");
      var p = h.parent();
      var loading = $('&lt;div class="loading"&gt;&lt;i class="fa fa-refresh fa-spin"&gt;&lt;/i&gt;&lt;/div&gt;');

      loading.appendTo(p);
      loading.fadeIn();
      setTimeout(function() {
        loading.fadeOut();
      }, 1000);

      e.preventDefault();
    });

    $('.close-down').click(function(e){
      var h = $(this).parents(".header");
      var p = h.parent();

      p.fadeOut(function(){
        $(this).remove();
      });
      e.preventDefault();
    });

</script>


<script src="js/jPushMenu.js"></script>
<script src="js/side-chats.js"></script>


</body>
</html>

<?php
  include ("include/cerrarconexion.php");
 ?>
