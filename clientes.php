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

    <script src="http://js.api.here.com/v3/3.0/mapsjs-core.js" 
      type="text/javascript" charset="utf-8"></script>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-service.js" 
      type="text/javascript" charset="utf-8"></script>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-ui.js" 
      type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" 
      href="http://js.api.here.com/v3/3.0/mapsjs-ui.css" />
  <script src="http://js.api.here.com/v3/3.0/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
  <script src="http://js.api.here.com/v3/3.0/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
  <script src="http://js.api.here.com/v3/3.0/mapsjs-mapevents.js" type="text/javascript" charset="utf-8"></script>
  <!--SweetAlert2-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
    <script src="sweetalert2.all.min.js"></script>
  <script src="jquery.js"></script>


</head>



<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- header inicial -->
  <header class="main-header">

    <!-- Logo letras-->
    <a href="home.php" class="logo">
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
        <li class="active"><a href="#"><i class="fa fa-user"></i> <span>Registro de cliente</span></a></li>
          <li class=""><a href="empleados.php"><i class="fa fa-male"></i> <span>Registro de motoristas</span></a></li>
        <li class=""><a href="autos.php"><i class="fa fa-car"></i> <span>Registro de flota Vehícular</span></a></li>
        <li class=""><a href="rutas.php"><i class="fa fa-road"></i><span>Registro de pedidos</span></a></li>
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
 

       <div class="box box-widget collapsed-box">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="../Pro_trailera/dist/img/user2-128x128.png" alt="User Image">
                <span class="username"><a href="#">Registro clientes</a></span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus">AGREGAR CLIENTE</i>
                </button>

              </div>

            </div>
     
       <div class="box-body" style="display: none;">

      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ingrese los datos del cliente</h3>
            </div>

            <form class="form-horizontal" method="POST" action="logica/Registroclientes.php">
              <div class="box-body">
                 
                  <div class="form-group">
                      <label class="col-sm-2 control-label" style="text-align:right;" hidden="true">ID</label>
                  <div class="col-sm-10">
                      <input type="text" class="hidden" name="id_Cliente" >
                  </div>
                </div>

                <div class="form-group">
				        <label for="inputEmail3" class="col-sm-2 control-label" style="text-align:right;" >Nombre</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="nombre_Cliente" id="nombre_Cliente" placeholder="Nombre Cliente" pattern="[a-zA-Z ñáéíóú].*" required >
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align:right;">Correo</label>
                  <div class="col-sm-10"><input type="mail" class="form-control" name="correo_Cliente" placeholder="Correo" required> </div>
                </div>

                  


                  <div>
                  </div>   

                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;">Teléfono Fijo</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control"  name="telefono" placeholder="####-####" required pattern="[2]{1}[0-9]{3}-[0-9]{4}" >
                  </div>
                </div>
                  
                <div class="form-group">
                  <label for="inputDireccion" class="col-sm-2 control-label" style="text-align:right;">Dirección</label>
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="direccion_Cliente" id="direccion_Cliente" placeholder="#Casa Calle Municipio País" required><br>
                  <input type="button" id="Bd" class="btn col-md-2" value="Obtener mi ubicacion"  onclick="myDir()"><br><br>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align:right;">Latitud</label>
                  <div class="col-sm-10">
                  <input type="text" class="col-xs-2 form-control" placeholder="Latitud" name="lat_Cliente" id="my_lat" class="txt" readonly><br>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label " style="text-align:right;">Longitud</label>
                  <div class="col-sm-10">
                  <input type="text" class="col-xs-2 form-control" placeholder="Latitud" name="long_Cliente" id="my_lng" class="txt" readonly><br>
                  </div>
                </div>
                  
                  <!--Lugar para mapa-->
   
            
              <div class="box-footer">
                <button type="submit" class="btn btn-warning btn-sm"  style="margin:3px; margin-left: 10%; font-size: 100%;" name="agregar" id="agregar" ><span title="Agregar">+ AGREGAR</span></button>
                <button type="submit" class="btn btn-info btn-sm" style="margin:3px; margin-left: 0.1%; font-size: 100%;" name="guardar" title="Guardar" ><span>Guardar <i class="fa fa-floppy-o" aria-hidden="true"></i>
                </span></button>
              </div>
            </form>
          </div>
      </div>
    </div>

    </section>

    <section class="content-header">
      
       <div id="map" class="box fluid" style=" height: 40vh; width: 100%;align-content: center">

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
      <!-- Tabla con registro-->
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
                  <th>NOMBRE COMPAÑIA</th>
                  <th>DIRECCION</th>
                  <th>LATITUD</th>                  
                  <th>LONGITUD</th>
                  <th>CORREO</th>
                  <th>TELEFONO</th>
                  <th>ACCIONES</th>

                </tr>

          <?php
          include 'logica/conexion.php';

          $q = "SELECT id_Cliente,nombre_Cliente,direccion_Cliente,lat_Cliente,Long_Cliente,email_Cliente,telefono_Cliente FROM cliente";
          $query = mysqli_query($conexion,$q);

          while($res = mysqli_fetch_array($query)){
          ?>  
           <tr>
                  <td><?php echo $res['id_Cliente']; ?></td>
                  <td><?php echo $res['nombre_Cliente']; ?></td>
                  <td><?php echo $res['direccion_Cliente']; ?></td>
                  <td><?php echo $res['lat_Cliente']; ?></td>
                  <td><?php echo $res['Long_Cliente']; ?></td>
                  <td><?php echo $res['email_Cliente']; ?></td>
                  <td><?php echo $res['telefono_Cliente']; ?></td>
                  <td>



                  <a href="modificarcliente.php?id=<?php echo $res['id_Cliente']?>">   
                  <button type="submit" class="btn btn-success btn-sm"  name="modificar" style="margin:3px;">
                  <i class="fa fa-pencil" style="font-size:150%;"></i><h style="font-family: Arial"> Modificar</h></button>
                   </a> 
                  <a href="#" data-href="logica/Eliminarcliente.php?id=<?php echo $res['id_cliente']?>" onclick="prueba(<?php echo $res['id_Cliente']?>)"> 
                  <button type="submit" class="btn btn-danger btn-sm" name="eliminar" style="margin:3px;" ><i class="fa fa-trash-o" style="font-size: 150%;"></i><h style="font-family: Arial"> Eliminar</h></button></a>
                  

                </td>
                </tr>
        <?php 
          }
        ?>
              </tbody></table>
            </div>
            </div> 
        </div>
       </div>
           <section class="content container-fluid">
    </section>
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
        $('#linkdelete').attr('href', 'logica/Eliminarcliente.php?id='+ id);
        
      }
    </script> 

   <!-- Pie de pagina -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="#">La Trailera</a>.</strong>Todos los derechos.
  </footer>


<!-- jQuery 3-->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="dist/js/adminlte.min.js"></script> 
<script type="text/javascript">
//Esta funcion servira, pone en nombreBotones los nombres de los botones separados por coma como se ve en el ejemplo de arriba
function desactivar(name,nombreBotones){
	var partesBotones = nombreBotones.split(",");//aquí separa por "," los nombres de los botones que le pasas como parametros
	for(i=0;i<partesBotones.length;i++){
		var boton = document.getElementById(partesBotones[i]);
		if(boton.name == name)boton.disabled = false;
		else boton.disabled = true;
	}//supongo que entonces sí podes activar la función, pasándole los nombres al ingresar ;)
}
	const platform = new H.service.Platform({
		/*
		Acá se crea una constante platform llamando a H.service.Platform que son los servicios de la API para el mapa
		*/
		"app_id":"DOgHMr10wWR8AsvSsaSO",
		"app_code":"ywVpTlUrhu9ODD9j4WZ0hA"
		//Credenciales de uso (es open source ;)
	});
    var defaultLayers = platform.createDefaultLayers();//Variable para crear las capas predeterminadas de los mapas usando la variable platform
	var map = new H.Map(
		document.getElementById("map"),// aquí buscas el DIV que se creó para el mapa, el div puede estar vacío solo que debe llevar un id="map"
		defaultLayers.normal.map,                
                {
			zoom:8,//zoom del mapa
			center:{lat:13.99, lng:-88.9}//CENTRADO DEL MAPA EN LA ZONA DE EL SALVADOR
		}
	);
	const mapEvents = new H.mapevents.MapEvents(map);//eventos del mapa
        var ui = H.ui.UI.createDefault(map, defaultLayers, 'es-ES');//ya que se van a crear los botones que sirven como controladores se coloca entre los parámetros 'es-ES' para que los muestre en español        
        
        
	const behavior = new H.mapevents.Behavior(mapEvents);//variable de comportamiento, creo que es para que el mapa no sea estático	
	
      function myDir(){
  // la misma función de Clientes.php, pero esta vez lo definí en un onselect="myDir();"
  //así que ya no será desde un input sino que desde el select que le definí
        if (document.getElementById('direccion_Cliente').value==='' || document.getElementById('direccion_Cliente').value===null) {
            
        sweetAlert("Campo indefinido", "Por favor selecciona un cliente", "error"); 

        }else{
            try {
                var direccion = document.getElementById('direccion_Cliente').value;
                
		var geocodingParams = {
                searchText: direccion
                };
                
// Define a callback function to process the geocoding response:
var onResult = function(result) {
  
  var locations = result.Response.View[0].Result,
    position,
    bubble,
    latitud,
    longitud,
    marker;
  for (i = 0;  i < locations.length; i++) {
  	position = {
        lat: locations[i].Location.DisplayPosition.Latitude,
        lng: locations[i].Location.DisplayPosition.Longitude},
  marker = new H.map.Marker(position);
 
  map.addObject(marker);//acá es donde guardo el marcador de inicio
  bubble=document.getElementById('nombre_Cliente').value;

  }
        if (document.getElementById('direccion_Cliente').value===null || document.getElementById('direccion_Cliente').value==="") {
          //de nuevo comprobamos
            sweetAlert("Campo Vacío", "Por favor Ingrese una dirección correcta", "error"); 
        }else{
            var bubble = new H.ui.InfoBubble({ lng: position.lng, lat: position.lat }, {
            content: bubble
          });
            ui.addBubble(bubble);
            //bubble=document.getElementById('select').value;
        }
        
  	document.getElementById('my_lat').value=latitud = position.lat;//acá le paso los parámetros lat/lng a los input que definí en el formulario HTML
	document.getElementById('my_lng').value=longitud = position.lng;        
      	console.log({latitud,longitud});
        
};

var geocoder = platform.getGeocodingService();
geocoder.geocode(geocodingParams, onResult, function(e) {
  alert(e);
	});
		
            } catch (e) {
                sweetAlert({
                    type: 'error',
                    title: 'Campo Vacío',
                    text: 'Por Favor ingresa una dirección!'+e                    
                  })
            }
    }
}
</script>

</body>
</html>