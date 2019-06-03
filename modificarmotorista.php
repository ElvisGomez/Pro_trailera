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

$sql = "SELECT * FROM motorista WHERE id_Motorista='$id'";
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
              <a href="empleados.php">
              <button type="submit" class="btn btn-warning btn-sm" style="margin:3px; margin-left: 5%; font-size: 100%;" 
              name="regresar" title="Regresar"><span> Regresar a Registros &nbsp;<i class="fa fa-list " aria-hidden="true"></i>
              </span></button>
              </a>
              </div>


            </div>






            <div class="box-body">
            <form class="form-horizontal" method="POST" action="logica/Modificarmotorista.php" autocomplete="off">
              


                <div class="form-group">
            <div class="col-sm-10"><input type="hidden" class="form-control" id="id" name="id" placeholder="Nombre Motorista" required pattern="[a-zA-Z ñáéíóú]*" value="<?php echo $res['id_Motorista']; ?>"></div>
                </div>


             


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label" style="text-align:right;">Nombre</label>
                  <div class="col-sm-10"><input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre Motorista" required pattern="[a-zA-Z ñáéíóú]*" value="<?php echo $res['nombre_motorista']; ?>"></div>
                </div>


                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;">Apellidos</label>
                  <div class="col-sm-10"><input type="text" class="form-control" id="apellidos" name="apellido" placeholder="Apellidos Motorista" required pattern="[a-zA-Z ñáéíóú]*" value="<?php echo $res['apellido_motorista']; ?>"> </div>
                </div>

                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;">Dui</label>
                  <div class="col-sm-10"><input type="text" class="form-control" id="apellidos" name="dui" placeholder="#########-#" require pattern="[0-9]{8}-[0-9]{1}" value="<?php echo $res['dui_motorista']; ?>"> </div>
                </div>


                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;">Telefono</label>
                  <div class="col-sm-10"><input type="text" class="form-control" id="telefono" name="telefono" placeholder="####-####" required pattern="[0-9]{4}-[0-9]{4}" value="<?php echo $res['telefono_motorista']; ?>"></div>
                </div>


                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;">Dirección</label>
                  <div class="col-sm-10"><input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese la dirección" required value="<?php echo $res['direccion_motorista']; ?>"></div>
                </div>


                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;">Correo</label>
                  <div class="col-sm-10"><input type="text" class="form-control" id="dui" name="correo" placeholder="Ingrese el correo electronico" required value="<?php echo $res['correo_motorista']; ?>"></div>
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
