<?php
include ('logica/conexion.php');

session_start();
$usuarios=$_SESSION['username'];

if(!isset($usuarios)) 
{
    echo '<script language=javascript>
  self.location = "login.php?sesion=Error"
  </script>';
  }


$where = "";
$id = $_GET['id'];

$sql = "SELECT * FROM cliente WHERE id_Cliente= '$id'";
$resultado = $conexion->query($sql);
$res = $resultado->fetch_array(MYSQLI_ASSOC);


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


         <li class="treeview active ">
          <a href="#">
            <i class="fa fa-gears"></i>
            <span>Administración</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
        
          </ul>
        </li>



      
    </section>
</aside>



    <!-- Pagina de registro de clientes -->
  <div class="content-wrapper">
    <section class="content-header">


        
              
                <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Editar los registros</h3>
              <br>
              <br>


              <div class="box-header">
              <a href="clientes.php">
              <button type="submit" class="btn btn-warning btn-sm" style="margin:3px; margin-left: 5%; font-size: 100%;" 
              name="regresar" title="Regresar"><span> Regresar a Registros &nbsp;<i class="fa fa-list " aria-hidden="true"></i>
              </span></button>
              </a>
              </div>


            </div>






            <div class="box-body">
            <form class="form-horizontal" method="POST" action="logica/Modificarcliente.php" autocomplete="off">
              

               <div class="form-group">




    <div class="form-group">
                  <div class="col-sm-10">
                  <input type="hidden" class="form-control" name="id" placeholder="ID" required pattern="[a-zA-Z ñáéíóú]*" value="<?php echo $res['id_Cliente']; ?>">
                  </div>
                </div>

    





                <label for="inputEmail3" class="col-sm-2 control-label" style="text-align:right;">Nombre</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre Cliente" required pattern="[a-zA-Z ñáéíóú.]*" value="<?php echo $res['nombre_Cliente']; ?>">
                  </div>

                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;">Teléfono Fijo</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control"  name="telefono" placeholder="7###-####" required pattern="[2]{1}[0-9]{3}-[0-9]{4}" value="<?php echo $res['telefono_Cliente']; ?>">
                  </div>
                </div>


                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;">Email</label>
                  <div class="col-sm-10">
                  <input type="email" class="form-control"  name="email" placeholder="Email" value="<?php echo $res['email_Cliente']; ?>"> 
                  </div>
                </div>



                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;">Dirección</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="direccion" placeholder="Ingrese la dirección" required value="<?php echo $res['direccion_Cliente']; ?>">
                  </div>
                </div>  


             




              

            <div class="box-footer" class="col-sm-10">  


              <button type="submit" class="btn btn-info btn-sm" style="margin:3px; margin:auto; font-size: 90%;" 
              name="guardar" title="Guardar"><span> Guardar Cambios <i class="fa fa-floppy-o" aria-hidden="true"></i>
              </span></button>
              </div>
              
          
          </form>
          </div>

       








        </div>
                 <section class="content container-fluid"></section>

      </section>



               

             
