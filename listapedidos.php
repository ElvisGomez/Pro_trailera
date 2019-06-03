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
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head lang="es">
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Proyecto-La Trailera</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
   <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">



  <script src="sweetalert2.all.min.js"></script>
  <script src="jquery.js"></script> 



</head>



<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- header inicial -->
  <header class="main-header">

    <!-- Logo letras-->
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
                  <a href="logica/salir.php" class="btn btn-default btn-flat">
                  Cerrar Sesión</a>
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
          <?php echo $usuarios=$_SESSION['username'] . "</br>";

           ?>
          <a href="#"><i class="fa fa-circle text-success"></i>En linea</a>
        </div>
      </div>



      <!-- Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <li class=""><a href="home.php"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
        <li class=""><a href="clientes.php"><i class="fa fa-user"></i> <span>Registro de cliente</span></a></li>
        <li class=""><a href="empleados.php"><i class="fa fa-male"></i> <span>Registro de motoristas</span></a></li>
        <li class=""><a href="autos.php"><i class="fa fa-car"></i> <span>Registro de flota Vehícular</span></a></li>
          
          <li class="treeview active">
          <a href="#">
            <i class="fa fa-road"></i>
            <span>Registro de pedidos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="" ><a href="listapedidos.php"><i class="fa fa-map"></i><span>Lista de Pedidos</span></a></li>

          </ul>
        </li> 
       

         <li class="treeview">
          <a href="#">
            <i class="fa fa-gears"></i>
            <span>Administración</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
         <li class=""><a href="usuarios.php"><i class="fa fa-users"></i><span>Registro Usuarios</span></a></li>
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

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">REGISTROS</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  

                  <input type="text" name="buscar_tabla" class="form-control pull-right" placeholder="Buscar">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default" name="enviar"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
           



           <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                   <th>ID</th>
                  <th>VEHICULO</th>
                  <th>EMPRESA</th>
                  <th>LATITUD SALIDA</th>
                  <th>LONGITUD INICIO</th>
                  <th>LUGAR LLEGADA</th> 
                  <th>LATITUD FIN</th>
                  <th>LONGITUD FIN</th>
                  <th>FECHA</th>
                  <th>ACCIONES</th>

                </tr>


                <?php
          include 'logica/conexion.php';

          $q = "SELECT  id_Ruta,id_Vehiculo,id_Cliente,latitud_inicio,longitud_inicio,direccion_destino,latitud_fin,longitud_fin,fecha_pedido  FROM ruta";
          $query = mysqli_query($conexion,$q);

          while($res = mysqli_fetch_array($query)){
          ?>  
                
                 <tr>
                  <td><?php echo $res['id_Ruta']; ?></td>
                  <td><?php echo $res['id_Vehiculo']; ?></td>
                  <td><?php echo $res['id_Cliente']; ?></td>
                  <td><?php echo $res['latitud_inicio']; ?></td>
                  <td><?php echo $res['longitud_inicio']; ?></td>
                  <td><?php echo $res['direccion_destino']; ?></td>
                  <td><?php echo $res['latitud_fin']; ?></td>
                  <td><?php echo $res['longitud_fin']; ?></td>
                  <td><?php echo $res['fecha_pedido']; ?></td>
                  <td>
                    
                  </td>

          </tr>
         <?php 
          }
          ?>




          </tbody>
            </table>
              </div>

          </div> 
        </div>
       </div>

         <section class="content container-fluid"></section>

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

<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>


<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!-


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. 
 -->

</body>
</html>