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
        <li class=""><a href="home.php"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
        <li class=""><a href="clientes.php"><i class="fa fa-user"></i> <span>Registro de cliente</span></a></li>
        <li class=""><a href="empleados.php"><i class="fa fa-male"></i> <span>Registro de motoristas</span></a></li>
        <li class=""><a href="autos.php"><i class="fa fa-car"></i> <span>Registro de flota Vehícular</span></a></li>
        <li class=""><a href="rutas.php"><i class="fa fa-road"></i><span>Registro de pedidos</span></a></li>
       

         <li class="treeview active ">
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


          <!-- Box Comment -->
          <div class="box box-widget collapsed-box">
            
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="../Pro_trailera/dist/img/user1-128x128.png" alt="User Image">
                <span class="username"><a href="#">Registro de usuarios</a></span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus" title="AGREGAR CLIENTE">AGREGAR USUARIO</i></button>
              </div>
       
            </div>




            <div class="box-body" style="display: none;">
              
                <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Registro Administradores</h3>
            </div>

            <form class="form-horizontal" method="POST" action="logica/Registrousuario.php">
              <div class="box-body">


              
                <div class="form-group">
                  <div class="col-sm-10"><input type="hidden" class="form-control" name="id" placeholder="id"  required pattern="[a-zA-Z ñáéíóú]*"></div>
                </div>


                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;" >Nombre</label>
                  <div class="col-sm-10"><input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre"  required pattern="[a-zA-Z ñáéíóú]*"> </div>
                </div>


                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;">Apellido</label>
                  <div class="col-sm-10"><input type="text" class="form-control" name="apellido" placeholder="Ingrese Apellido" required pattern="[a-zA-Z ñáéíóú]*"> </div>
                </div>


                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;">Usuario</label>
                  <div class="col-sm-10"><input type="text" class="form-control" name="usuario" placeholder="Usuario" required pattern="[a-zA-Z ñáéíóú 0-9]*"></div>
                </div>


                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;">Contraseña</label>
                  <div class="col-sm-10"><input type="password" class="form-control"  name="contrasena" placeholder="Contraseña" required ></div>
                </div>



                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;">Correo</label>
                  <div class="col-sm-10"><input type="email" class="form-control"  name="correo" placeholder="Correo" required pattern="[a-z0-9_]+([.][a-z0-9_]+)*@[a-z0-9_]+([.][a-z0-9_]+)*[.][a-z]{1,5}"></div>
                </div>


                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="text-align: right;">Rol</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="rol" tabindex="1" aria-hidden="true" onchange="">

                      <option>Seleccionar</option>
                      <?php 
                        $q = "SELECT * FROM rol";
                        $query = mysqli_query($conexion,$q);
                       ?>

                       <?php 
                       foreach ($query as $res):
                       ?>
                       <option value="<?php echo $res['id_Rol'];?>">
                        <?php 
                        echo $res['nombre_Rol'];
                        
                        ?>                         
                       </option>
                       <?php 
                     endforeach
                        ?>


                      
                    </select>
                    
                  </div>
                </div>



               




              <div class="box-footer">

               <button type="reset" class="btn btn-warning btn-sm" style="margin:3px; margin-left: 0.1%; font-size: 100%;" 
              name="limpiar" title="Guardar"><span> Limpiar <i class="fa fa-eraser" aria-hidden="true"></i>
              </span></button>



              <button type="submit" class="btn btn-info btn-sm" style="margin:3px; margin-left: 0.1%; font-size: 100%;" 
              name="guardar" title="Guardar"><span> Guardar <i class="fa  fa-user-plus" aria-hidden="true"></i>
              </span></button>


              </div>
            </form>

     </div>
  </section>



      <?php 
      if(isset($_REQUEST["m"])){
                
        echo "<script>Swal.fire('ACTUALIZADO','<h4>ACCION EXITOSA</h4>','success');</script>";
        }

      ?>



      <?php 
      if(isset($_REQUEST["p"])){
                
        echo "<script>Swal.fire('0x80249005 ','<h4>ALGO SALIO MAL</h4>','error');</script>";
        }

      ?>



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
                  <th>NOMBRES</th>
                  <th>APELLIDOS</th>
                  <th>USUARIO</th>                  
                  <th>CORREO</th>
                  <th>ID ROL</th>
                  <th>ACCIONES</th>

                </tr>
          
          <?php
          include 'logica/conexion.php';


          $q = "SELECT id_usuario,nombre,apellido,usuario,correo,id_rol FROM usuario";
          $query = mysqli_query($conexion,$q);

          while($res = mysqli_fetch_array($query)){
          ?>  
           <tr>
                  <td><?php echo $res['id_usuario']; ?></td>
                  <td><?php echo $res['nombre']; ?></td>
                  <td><?php echo $res['apellido']; ?></td>
                  <td><?php echo $res['usuario']; ?></td>
                  <td><?php echo $res['correo']; ?></td>
                  <td><?php echo $res['id_rol']; ?></td>
                  <td>

                    
                   <a href="modificarus.php?id=<?php echo $res['id_usuario']?>"> 
                  <button type="submit" class="btn btn-success btn-sm"  name="modificar" style="margin:3px;">
                  <i class="fa fa-pencil" style="font-size:150%;"></i><h style="font-family: Arial"> Modificar</h></button>
                </a>


                  <a href="#" data-href="logica/Eliminarusuario.php?id=<?php echo $res['id_usuario']?>" onclick="prueba(<?php echo $res['id_usuario']?>)">
                  <button type="submit" class="btn btn-danger btn-sm" name="eliminar" style="margin: 3px;" 
                  title="Eliminar"><i class="fa fa-trash-o" style="font-size: 150%;"></i><h style="font-family: Arial"> Eliminar</h></button></a>

                  </td>


          </tr>
        <?php } ?>

          </tbody>
            </table>
              </div>

          </div> 
        </div>
       </div>

         <section class="content container-fluid"></section>

  </section>
  </div>






 <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <!--Encabezado del modal-->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel" ><i class="fa fa-trash" style="color: #CB4335; font-size: 300%"></i></h4>
          </div>

          <!--Cuerpo del modal-->

          
          <div class="modal-body">
            <h2 class="modal-title">¿Desea eliminar este registro?</h2>
           </div>

          <!--Pie del modal-->
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <a id="linkdelete" class="btn btn-danger btn-ok">Borrar</a>
          </div>
        </div>
      </div>
    </div>

    <script>
      function prueba(id){
        $('#confirm-delete').modal('show');
        $('#linkdelete').attr('href','logica/Eliminarusuario.php?id='+ id);
        
      }
    </script> 







     


   <!-- Pie de pagina -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="#">La Trailera</a>.</strong>Todos los derechos.
  </footer>

<script src="js/jquery.js"></script>
<script src="js/main.js"></script>    





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

