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

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!--here-->
    <link rel="stylesheet" type="text/css" href="css/routing.css" />
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.0/mapsjs-ui.css" />
    <script src="http://js.api.here.com/v3/3.0/mapsjs-core.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-service.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-ui.js" type="text/javascript" charset="utf-8"></script>    
    <script src="http://js.api.here.com/v3/3.0/mapsjs-mapevents.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="http://js.api.here.com/v3/3.0/mapsjs-ui.css" />
    <script src="http://js.api.here.com/v3/3.0/mapsjs-places.js" type="text/javascript" charset="utf-8"></script>
  <!--SweetAlert2-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
        <li class=""><a href="clientes.php"><i class="fa fa-user"></i> <span>Registro de cliente</span></a></li>
          <li class=""><a href="empleados.php"><i class="fa fa-male"></i> <span>Registro de motoristas</span></a></li>
        <li class=""><a href="autos.php"><i class="fa fa-car"></i> <span>Registro de flota Vehícular</span></a></li>
        

    <li class="treeview">
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
      <h1>PEDIDOS</h1>
     <br>

      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">REALIZAR PEDIDO</h3>
            </div>

          <form class="form-horizontal" method="POST" action="logica/Registropedido.php">
              <div class="box-body">
                  
                  <div class="form-group">
                      <label class="col-sm-2 control-label" style="text-align:right;" hidden="true">ID Ruta</label>
                  <div class="hidden col-sm-10"><input type="text" class="form-control" id="marca" name="marca" placeholder="Marca AUTOMOVIL"> </div>
                </div>
                  
              <div class="form-group">
                <label class="col-sm-2 control-label" style="text-align:right;">Vehículo</label>
                <select class="form-control " style="width: 81%; margin: auto;" tabindex="1" aria-hidden="true" name="automovil">
                  <option selected="selected">Seleccionar</option>


                       <?php
                    $q = "SELECT * FROM vehiculo";
                    $query = mysqli_query($conexion,$q);
                ?>
                    <?php
                foreach ($query as $vehiculo):
                    ?>
                    <option value="<?php echo $vehiculo['id_Vehiculo'];?>">
                        <?php 
                        echo $vehiculo['marca'];
                        echo " ";
                        echo $vehiculo['modelo'];
                        ?>
                          

                        </option>
                  <?php
                  endforeach
                  ?> 
                </div>
                </select>
                </div>


                <div class="form-group">
                <label class="col-sm-2 control-label" style="text-align:right;">Lugar de Salida</label>                
                <select class="form-control " style="width: 81%; margin: auto;" name="cliente">
                    <option>Seleccionar</option>
                <?php
                    $q = "SELECT * FROM cliente";
                    $query = mysqli_query($conexion,$q);
                ?>
                    <?php
                foreach ($query as $res):
                    ?>
                    <option value="<?php echo $res['id_Cliente'];?>">
                        <?php echo $res['nombre_Cliente'];?></option>
                  <?php
                  endforeach
                  ?>
                </select>
                </div>



                
                <div class="form-group">
                <label class="col-sm-2 control-label" style="text-align:right;">Confimar Dirección</label>                
                <select class="form-control " style="width: 81%; margin: auto;" tabindex="1" aria-hidden="true" onchange="myDir();" id="select">
                    <option>Seleccionar</option>
                <?php
                    $q = "SELECT * FROM cliente";
                    $query = mysqli_query($conexion,$q);
                ?>
                    <?php
                foreach ($query as $direcciones):
                    ?>
                    <option value="<?php echo $direcciones['direccion_Cliente'];?>">
                        <?php echo $direcciones['nombre_Cliente'];?></option>
                  <?php
                  endforeach
                  ?>
                </select>
                </div>



                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align:right;" hidden>Latitud</label>
                  <div class="col-sm-10"><input readonly type="hidden" class="form-control" id="s_lat" name="s_lat" placeholder="Latitud de Salida"> </div>
                </div>

                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;" hidden>Longitud</label>
                  <div class="col-sm-10"><input readonly type="hidden" class="form-control" id="s_longi" name="s_longi" placeholder="Longitud de Salida" hidden > </div>
                </div>


                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;">Lugar de Destino</label>
                  <div class="col-sm-4">
                        <div class="input-group input-group-sm" style="width: 100%;">
                        <input type="text" name="direccion_Destino" id="direccion_Destino" class="form-control pull-right" placeholder="#Casa Calle Municipio País" onkeypress="return validarDirec(event);" required>
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default" name="bD" id="bD" onclick="destDir();"><i class="fa fa-search"></i></button>
                            <button type="button" class="btn btn-default" name="ruta" id="ruta" onclick="dibujarRuta();"><i class="fa fa-road"></i></button>
                        </div>
                        </div>
                  </div>
                  
                </div>               

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align:right;" hidden>Latitud</label>
                  <div class="col-sm-10"><input readonly type="hidden" class="form-control" id="d_lat" name="d_lat" placeholder="Latitud destino"> </div>
                </div>


                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label" style="text-align:right;" hidden>Longitud</label>
                  <div class="col-sm-10"><input readonly type="hidden" class="form-control" id="d_longi" name="d_longi" placeholder="Longitud destino"> </div>
                </div>

          



                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align:right;">Fecha</label>
                  <div class="col-sm-10"><input type="date" class="form-control" id="fecha_ruta" name="fecha_ruta" > </div>
                </div>

               <!--Lugar para mapa-->
        <div id="map" class="box fluid" style=" height: 55vh; width: 100%;align-content: center">

	</div>
        <div id="panel" style="width: 600px;"></div>

              <div class="box-footer">
                <div class="box-footer">
                  <button type="reset" class="btn btn-warning btn-sm" style="margin:3px; margin-left: 0.1%; font-size: 100%;" 
              name="limpiar" title="Limpiar"><span> Limpiar <i class="fa fa-eraser" aria-hidden="true"></i>
              </span></button>
                <button type="submit" class="btn btn-info btn-sm" style="margin:3px; margin-left: 0.1%; font-size: 100%;" name="guardar" title="Guardar" ><span>Guardar <i class="fa fa-floppy-o" aria-hidden="true"></i>
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
            <h3 class="box-title">REGISTROS CLIENTES &nbsp;&nbsp;<a href="clientes.php"><button class="btn btn-warning" style="margin-right: auto;">REGRESAR A CLIENTES</button></a></h3>
            <div>
           
            </div>
            <div class="box-tools">
            </div>
            </div>
            


           <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Dirección</th>
                  <th>Latitud</th>                  
                  <th>Longitud</th>
                  <th>Correo</th>
                  <th>Teléfono</th>

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
      
    <section class="content container-fluid"></section>
    </section>

  </div>

   <!-- Pie de pagina -->
  <footer class="main-footer">
      <strong>Copyright &copy; 2019 <a href="home.php">La Trailera</a>.</strong>Todos los derechos.
  </footer>






<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. 
 -->

<script>
function validarNum(e){
		//para mandarlo a llamar lo haces desde un atributo onkeypress="return validarNum(event);"
		key = e.keyCode || e.wich;
		tecla = String.fromCharCode(key).toLowerCase();
		numeros = "0123456789";
		especiales = "8, 45, 13, 37, 38,46";
		tecla_especial = false;
		for (var i in especiales) {
			if (key==especiales[i]) {
				tecla_especial=true;				
			}
		}
		if (numeros.indexOf(tecla)==-1 && !tecla_especial) {
			return false;
		}
	}
function validarLetras(e){
		//para mandarlo a llamar lo haces desde un atributo onkeypress="return validarLetras(event);"
		key = e.keyCode || e.wich;
		tecla = String.fromCharCode(key).toLowerCase();
		letras = "ABCDEFGHIJKLMNÑOPQRSTUVWXYabcdefghijklmnñopqrstuvwxyzáéíóú ";
		especiales = "8, 45, 46, 44, 35, 32, 95, 13, 37, 38,46";
		tecla_especial = false;
		for (var i in especiales) {
			if (key==especiales[i]) {
				tecla_especial=true;				
			}
		}
		if (letras.indexOf(tecla)==-1 && !tecla_especial) {
			return false;
		}
	}
        
function validarDirec(e){
		//para mandarlo a llamar lo haces desde un atributo onkeypress="return validarLetras(event);"
		key = e.keyCode || e.wich;
		tecla = String.fromCharCode(key).toLowerCase();
		letras = "ABCDEFGHIJKLMNÑOPQRSTUVWXYabcdefghijklmnñopqrstuvwxyzáéíóú 0123456789";
		especiales = "8, 45, 46, 44, 35, 32, 95, 13, 37, 38,46";
		tecla_especial = false;
		for (var i in especiales) {
			if (key==especiales[i]) {
				tecla_especial=true;				
			}
		}
		if (letras.indexOf(tecla)==-1 && !tecla_especial) {
			return false;
		}
	}
</script>
<script>
    
    
    
    const platform = new H.service.Platform({
		"app_id":"DOgHMr10wWR8AsvSsaSO",
		"app_code":"ywVpTlUrhu9ODD9j4WZ0hA"
	});
        var defaultLayers = platform.createDefaultLayers();
	var map = new H.Map(
		document.getElementById("map"),
		defaultLayers.normal.map,                
                {
			zoom:8,
			center:{lat:13.99, lng:-88.9}//CENTRADO DEL MAPA EN LA ZONA DE EL SALVADOR
		}
	);
        var ui = H.ui.UI.createDefault(map, defaultLayers, 'es-ES');
	const mapEvents = new H.mapevents.MapEvents(map);
        
	const behavior = new H.mapevents.Behavior(mapEvents);	
        var sMarker;// definí esta variable para el marcador de inicio
        var eMarker;// definí esta variable para el marcador de final
        var latitudO;// definí esta variable para guardar la lat de Origen
        var longitudO;// definí esta variable para guardar la lng de Origen
        var latitudD;// definí esta variable para guardar la lat de Destino
        var longitudD;// definí esta variable para guardar la lng de Destino

function myDir(){
  // la misma función de Clientes.php, pero esta vez lo definí en un onselect="myDir();"
  //así que ya no será desde un input sino que desde el select que le definí
        if (document.getElementById('select').value==='' || document.getElementById('select').value===null || document.getElementById('select').value==='Seleccionar') {
            
        sweetAlert("Campo indefinido", "Por favor selecciona un cliente", "error"); 

        }else{
            try {
                var direccion = document.getElementById('select').value;
                
		var geocodingParams = {
                searchText: direccion
                };
                
// Define a callback function to process the geocoding response:
var onResult = function(result) {
  
  var locations = result.Response.View[0].Result,
    position,
    //bubble,
    latitud,
    longitud;
  for (i = 0;  i < locations.length; i++) {
  	position = {
        lat: locations[i].Location.DisplayPosition.Latitude,
        lng: locations[i].Location.DisplayPosition.Longitude},
  sMarker = new H.map.Marker(position);
 
  map.addObject(sMarker);//acá es donde guardo el marcador de inicio
  bubble=document.getElementById('select').value;

  }
        if (document.getElementById('select').value===null || document.getElementById('select').value==="" || document.getElementById('select').value==="Seleccionar") {
          //de nuevo comprobamos
            sweetAlert("Campo Vacío", "Por favor seleccione un cliente", "error"); 
        }else{
            var bubble = new H.ui.InfoBubble({ lng: position.lng, lat: position.lat }, {
            content: bubble
          });
            ui.addBubble(bubble);
            //bubble=document.getElementById('select').value;
        }
        
  	document.getElementById('s_lat').value=latitud = position.lat;
      	document.getElementById('s_longi').value=longitud = position.lng;        
      	console.log({latitud,longitud});
        latitudO = position.lat;//igualo la lat ontenida a lat de origen en la variable global que definí
        longitudO = position.lng;//igualo la lat ontenida a lng de origen en la variable global que definí
        console.log({latitudO,longitudO});//cargo en consola solo para comprobar que sí le pasa los datos
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


function destDir(){
  //es la misma función solo que esta vez si le pediré nuevamente al usuario la dirección pero será nuestra dirección de destino ;)
        if (document.getElementById('direccion_Destino').value==='' || document.getElementById('direccion_Destino').value===null) {
            
        sweetAlert("Campo indefinido", "Por escriba la dirección de destino", "error"); 

        }else{
            try {
                var direccion = document.getElementById('direccion_Destino').value;
                
		var geocodingParams = {
                searchText: direccion
                };
                
// Define a callback function to process the geocoding response:
                var onResult = function(result) {
                  var locations = result.Response.View[0].Result,
                    position,
                    bubble,
                    lati,
                    longi;
                  for (i = 0;  i < locations.length; i++) {
                        position = {
                        lat: locations[i].Location.DisplayPosition.Latitude,
                        lng: locations[i].Location.DisplayPosition.Longitude},
                        eMarker = new H.map.Marker(position);

                  map.addObject(eMarker);

                 }
                if (document.getElementById('direccion_Destino').value===null || document.getElementById('direccion_Destino').value==="") {
                    sweetAlert("Campo Vacío", "Por favor seleccione un cliente", "error"); 
                }else{
                    var bubble = new H.ui.InfoBubble({ lng: position.lng, lat: position.lat }, {
                    content: bubble       
                  });

                }

                document.getElementById('d_lat').value=lati = position.lat;
                document.getElementById('d_longi').value=longi = position.lng;
                console.log({lati,longi});
                latitudD = position.lat;
                longitudD = position.lng;
                console.log({latitudD,longitudD});                
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

var tiempo;
var distancia;
/*Empieza*/
function dibujarRuta(){
    function calculateRouteFromAtoB (platform) {
  var router = platform.getRoutingService(),
    routeRequestParams = {
      mode: 'fastest;car;traffic:enabled',
      representation: 'display',
      routeattributes : 'waypoints,summary,shape,legs',
      maneuverattributes: 'direction,action',
      waypoint0: latitudO+","+longitudO, // Punto de Inicio
      waypoint1: latitudD+","+longitudD  // Punto de destino
    };


  router.calculateRoute(
    routeRequestParams,
    onSuccess,
    onError
  );
}

function onSuccess(result) {
  var route = result.response.route[0];

  addRouteShapeToMap(route);
  addManueversToMap(route);

  addWaypointsToPanel(route.waypoint);
  addManueversToPanel(route);
  addSummaryToPanel(route.summary);
  
}

function onError(error) {
  sweetAlert('Ooops!');
}

//var mapContainer = document.getElementById('map'),
  routeInstructionsContainer = document.getElementById('panel');

// Hold a reference to any infobubble opened
var bubble;


/**
 * Opens/Closes a infobubble
 * @param  {H.geo.Point} position     The location on the map.
 * @param  {String} text              The contents of the infobubble.
 */
function openBubble(position, text){
 if(!bubble){
    bubble =  new H.ui.InfoBubble(
      position,
      // The FO property holds the province name.
      {content: text}
      );
    ui.addBubble(bubble);
  } else {
    bubble.setLanguage('es-ES');
    bubble.setPosition(position);
    bubble.setContent(text);
    
    bubble.open();
  }
}

/**
 * Creación de la línea de ruta
 */
function addRouteShapeToMap(route){
  var strip = new H.geo.Strip(),
    routeShape = route.shape,
    polyline;

  routeShape.forEach(function(point) {
    var parts = point.split(',');
    strip.pushLatLngAlt(parts[0], parts[1]);
  });

  polyline = new H.map.Polyline(strip, {
    style: {
      lineWidth: 4,
      strokeColor: 'rgba(0, 128, 255, 0.7)'
    }
  });
  // Agrega la linea de ruta trazada
  map.addObject(polyline);
  // Se hace un zoom de la ruta en el mapa
  map.setViewBounds(polyline.getBounds(), true);
}

function addManueversToMap(route){
  var svgMarkup = '<svg width="18" height="18" ' +
    'xmlns="http://www.w3.org/2000/svg">' +
    '<circle cx="8" cy="8" r="8" ' +
      'fill="#1b468d" stroke="white" stroke-width="1"  />' +
    '</svg>',
    dotIcon = new H.map.Icon(svgMarkup, {anchor: {x:8, y:8}}),
    group = new  H.map.Group(),
    i,
    j;

  // Add a marker for each maneuver
  for (i = 0;  i < route.leg.length; i += 1) {
    for (j = 0;  j < route.leg[i].maneuver.length; j += 1) {
      // Get the next maneuver.
      maneuver = route.leg[i].maneuver[j];
      // Add a marker to the maneuvers group
      var marker =  new H.map.Marker({
        lat: maneuver.position.latitude,
        lng: maneuver.position.longitude} ,
        {icon: dotIcon});
      marker.instruction = maneuver.instruction;
      group.addObject(marker);
    }
  }

  group.addEventListener('tap', function (evt) {
    map.setCenter(evt.target.getPosition());
    openBubble(
       evt.target.getPosition(), evt.target.instruction,'es-ES');
  }, false);

  map.addObject(group);
}

function addWaypointsToPanel(waypoints){

  var nodeH3 = document.createElement('h3'),
    waypointLabels = [],
    i;


   for (i = 0;  i < waypoints.length; i += 1) {
    waypointLabels.push(waypoints[i].label)
   }

   nodeH3.textContent = waypointLabels.join(' - ');

  routeInstructionsContainer.innerHTML = '';
  routeInstructionsContainer.appendChild(nodeH3);
}

/**
 * Creates a series of H.map.Marker points from the route and adds them to the map.
 * @param {Object} route  A route as received from the H.service.RoutingService
 */
function addSummaryToPanel(summary){
  distancia = summary.distance;
  var summaryDiv = document.createElement('div'),
   content = '';
   content += '<b>Distancia Total</b>: ' + distancia  + 'm. <br/>';
   content += '<b>Tiempo de viaje(aproximado)</b>: ' + summary.travelTime.toMMSS();


  summaryDiv.style.fontSize = 'small';
  summaryDiv.style.marginLeft ='5%';
  summaryDiv.style.marginRight ='5%';
  summaryDiv.innerHTML = content;
  routeInstructionsContainer.appendChild(summaryDiv);
}

/**
 * Crea una serie continua de punteros en el mapa en cada cruce de calle
 */
function addManueversToPanel(route){
  var nodeOL = document.createElement('ol'),
    i,
    j;

  nodeOL.style.fontSize = 'small';
  nodeOL.style.marginLeft ='5%';
  nodeOL.style.marginRight ='5%';
  nodeOL.className = 'directions';

     // Add a marker for each maneuver
  for (i = 0;  i < route.leg.length; i += 1) {
    for (j = 0;  j < route.leg[i].maneuver.length; j += 1) {
      // Get the next maneuver.
      maneuver = route.leg[i].maneuver[j];

      var li = document.createElement('li'),
        spanArrow = document.createElement('span'),
        spanInstruction = document.createElement('span');

      spanArrow.className = 'arrow '  + maneuver.action;
      spanInstruction.innerHTML = maneuver.instruction;
      li.appendChild(spanArrow);
      li.appendChild(spanInstruction);

      nodeOL.appendChild(li);
    }
  }

  routeInstructionsContainer.appendChild(nodeOL);
}


Number.prototype.toMMSS = function () {
  tiempo = Math.floor(this / 60)  +' minutes '+ (this % 60)  + ' seconds.';
  return  tiempo;
}


// Finalmente se usa la función calcular ruta para plantear todo el código anterior
calculateRouteFromAtoB (platform);
}
/*Termina*/
</script>
</body>
</html>
