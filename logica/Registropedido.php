<?php 

require 'conexion.php';
	
$auto = $_POST['automovil'];
$cliente = $_POST['cliente'];
$l_salida= $_POST['s_lat'];
$lo_salida =$_POST['s_longi'];
$des = $_POST['direccion_Destino'];
$l_destino= $_POST['d_lat'];
$lo_destino =$_POST['d_longi'];
$fecha = $_POST['fecha_ruta'];


$insertar = "INSERT INTO ruta(id_Vehiculo,id_Cliente,latitud_inicio,longitud_inicio,direccion_destino,latitud_fin,longitud_fin,fecha_pedido) VALUES ('$auto','$cliente','$l_salida','$lo_salida','$des','$l_destino','$lo_destino','$fecha')";



if (isset($_POST['guardar'])) {
	
		if ($conexion->query($insertar)==TRUE) 
		{
			echo '<script language=javascript>
			self.location="../rutas.php"
			</script>';
		}
		else{
			echo '<script language=javascript>
			alert("No se intrujo datos")
			self.location="../rutas.php"
			</script>';

		}

	}	









 ?>