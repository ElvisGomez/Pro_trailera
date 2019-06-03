<?php 

require 'conexion.php';

$auto = $_POST['automovil'];
$cliente = $_POST['cliente'];
$client = $_POST['client'];
$l_salida= $_POST['s_lat'];
$lo_salida =$_POST['s_longi'];
$des = $_POST['direccion_Destino'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$l_destino= $_POST['d_lat'];
$lo_destino =$_POST['d_longi'];
$dis = $_POST['distancia'];
$fecha = $_POST['fecha_ruta'];
$costo = $_POST['costo'];

date_default_timezone_set('America/el_salvador');
$fecFac=date("Y-m-d H:i:s");



$insertar = "INSERT INTO ruta(id_Vehiculo,id_Cliente,lugar_salida,latitud_inicio,longitud_inicio,direccion_destino,latitud_fin,longitud_fin,kilometraje,fecha_pedido,producto,cantidad_carga,precio) VALUES ('$auto','$cliente','$client','$l_salida','$lo_salida','$des','$l_destino','$lo_destino','$dis','$fecha','$producto','$cantidad','$costo')";

$insertarFact="INSERT INTO factura(id_Factura, id_Cliente, fecha_factura) values('','$cliente','$fecFac')";
function calcTotal(){
    $IVA=0.13;
    $pKm=3.00;
    $subTotal=((($distancia = $_POST['distancia'])/100) * $pKm);    
    $totalP=$subTotal+($subTotal*$IVA);
    return $totalP;
}
//$comprobar="SELECT * FROM vehiculo";
//$DetaFact="INSERT INTO `detalle_factura` (`id_detalle_Factura`, `id_ruta`, `id_factura`, `subtotal`, `totalP`) VALUES (NULL, 'ruta', 'factura', '100', '200');
//$update="UPDATE vehiculo SET estado_v=1 WHERE id_Vehiculo='$id_v';";
//$update1="UPDATE vehiculo SET estado_v=0 WHERE id_Vehiculo='$id_v';";
if (isset($_POST['guardar'])) {
	
		if ($conexion->query($insertar)==TRUE && $conexion->query($insertarFact)==TRUE) 
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