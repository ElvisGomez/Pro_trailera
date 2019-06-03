<?php
include ('logica/conexion.php');

session_start();
$usuarios=$_SESSION['username'];

if(!isset($usuarios)) 
{
    echo '<script language=javascript>
  self.location = "index.php?sesion=Error"
  </script>';
  }

?>

<!DOCTYPE html>
<html>
<head lang="es">
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Proyecto-La Trailera</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>



<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="#" class="logo">
      <span class="logo-mini"><b>L</b>T</span>
      <span class="logo-lg"><b>La Trailera</b></span>
    </a>


    <nav class="navbar navbar-static-top" role="navigation">

      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>



      
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <ul class="dropdown-menu">
              <li>
                <ul class="menu">
                  <li>

                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#"></a></li>
            </ul>
          </li>



          <li class="dropdown notifications-menu">
            <ul class="dropdown-menu">
              <li>
                <ul class="menu">
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown tasks-menu">
            <ul class="dropdown-menu">
              <li>
                <ul class="menu">
                  <li></li>
                </ul>
              </li>
            </ul>
          </li>



          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user">&nbsp;Opciones</i></a>
            <ul class="dropdown-menu">
            	<li class="user-footer">

                  <div class="pull-right">
                  <a href="logica/salir.php" class="btn btn-default btn-sm" >
                  <i class="fa fa-times-circle"></i>&nbsp; Cerrar Sesión</a>
                  </div>
              </li>

            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>

 
  
   <!-- Logo usuario-->
  <aside class="main-sidebar">
    <section class="sidebar">
	  <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/header.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          &nbsp;&nbsp;&nbsp;
          <?php 
            
           include 'logica/conexion.php';

          $q = "SELECT nombre FROM usuario";
          $query = mysqli_query($conexion,$q);
          $res = mysqli_fetch_array($query);

            echo " ";
           echo $res['nombre'];


           ?>
           <br>
           &nbsp;&nbsp;
          <a href="#"><i class="fa fa-circle text-success"></i>En linea</a>
        </div>
      </div>


  		<!-- Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menú</li>
        <li class="active"><a href="#"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
        <li class=""><a href="../Pro_trailera/clientes.php"><i class="fa fa-user"></i><span>Registro de cliente</span></a></li>
        <li class=""><a href="../Pro_trailera/empleados.php"><i class="fa fa-male"></i><span>Registro de motoristas</span></a></li>
        <li class=""><a href="../Pro_trailera/autos.php"><i class="fa fa-car"></i><span>Registro de flota Vehícular</span></a></li>
        <li class=""><a href="../Pro_trailera/rutas.php"><i class="fa fa-road"></i><span>PEDIDOS</span></a></li>
		    


    <li class="treeview">
          <a href="#">
            <i class="fa fa-gears"></i>
            <span>Administración</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="" ><a href="../Pro_trailera/usuarios.php"><i class="fa fa-users"></i><span>Registro Usuarios</span></a></li>
            <li class="" ><a href=""><i class="fa fa-map"></i><span>Desarrolladores</span></a></li>
            <li class="" ><a href=""><i class="fa fa-envelope-o"></i><span>Contactos</span></a></li>

          </ul>
        </li> 




      </ul>
    </section>
</aside>



    <!-- Pagina de registro de clientes -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1 style="text-align: center;">LA TRAILERA</h1>
     <br>


     <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="icon ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Número de Clientes</span>
              <span class="info-box-number">
          

              </span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-car"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Número de vehículos</span>
              <span class="info-box-number">41,410</span>
            </div>
          </div>
        </div>

  

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-male"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Número de empleados</span>
              <span class="info-box-number">760</span>
            </div>         
          </div>
        </div>



        <!-- row DIV --> 
      </div>

    <div class="content-header">
      <div class="row">
        <div class="col-md-6">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="../Pro_trailera/dist/img/user-128x128.jpg" alt="User Image">
                <span class="username"><a href="#">La trailera - IMG</a></span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <img class="img-responsive pad" src="../Pro_trailera/dist/img/photo2.png" alt="Photo">

            </div>

            <div class="box-footer box-comments">
              <div class="box-comment">
                <img class="img-circle img-sm" src="../Pro_trailera/dist/img/user3-128x128.jpg" alt="User Image">

                
              </div>

            </div>
          </div>
        </div>



        <div class="col-md-6">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="../Pro_trailera/dist/img/user-128x128.jpg" alt="User Image">
                <span class="username"><a href="#">La trailera - IMG</a></span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- post text -->
             <img class="img-responsive pad" src="../Pro_trailera/dist/img/img1.jpg" alt="Photo">
              </div>
              
            <div class="box-footer box-comments">
              <div class="box-comment">
                <img class="img-circle img-sm" src="../Pro_trailera/dist/img/user3-128x128.jpg" alt="User Image">

              
              </div>
              
            </div>


           
          </div>     
        </div>
      </div>
</div>
  
  
<div class="content-header">     
      <div class="row">
        <div class="col-md-6">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="../Pro_trailera/dist/img/user-128x128.jpg" alt="User Image">
                <span class="username"><a href="#">La trailera - IMG</a></span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <img class="img-responsive pad" src="../Pro_trailera/dist/img/calles.jpg" alt="Photo">

            </div>

            <div class="box-footer box-comments">
              <div class="box-comment">
                <img class="img-circle img-sm" src="../Pro_trailera/dist/img/user3-128x128.jpg" alt="User Image">

             
              </div>

            </div>
          </div>
        </div>



        <div class="col-md-6">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="../Pro_trailera/dist/img/user-128x128.jpg" alt="User Image">
                <span class="username"><a href="#">La trailera - IMG</a></span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- post text -->
             <img class="img-responsive pad" src="../Pro_trailera/dist/img/trailer.jpg" alt="Photo">
              </div>
              
            <div class="box-footer box-comments">
              <div class="box-comment">
                <img class="img-circle img-sm" src="../Pro_trailera/dist/img/user3-128x128.jpg" alt="User Image">

              </div>
              
            </div>
</div>


    </section>
    <section class="content container-fluid">
    </section>
  </div>





   <!-- Pie de pagina -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="#">La Trailera</a>.</strong>Todos los derechos.
  </footer>






<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>