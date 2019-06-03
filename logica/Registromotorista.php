<?php 

require 'conexion.php';


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dui = $_POST['dui'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$genero = $_POST['genero'];
$correo = $_POST['correo'];




$insertar="INSERT INTO motorista(nombre_motorista,apellido_motorista,dui_motorista,telefono_motorista,direccion_motorista,genero_motorista,correo_motorista) values ('$nombre','$apellido','$dui','$telefono','$direccion','$genero','$correo')";




	if (isset($_POST['guardar'])) {
	
		if ($conexion->query($insertar)==TRUE) 
		{
			echo '<script language=javascript>
			self.location="../empleados.php"
			</script>';
		}

	}		




 ?>




