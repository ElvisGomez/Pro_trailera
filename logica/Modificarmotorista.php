<?php 

	require 'conexion.php';

	
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$dui = $_POST['dui'];
	$telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];
	$correo = $_POST['correo']; 


	$sql = "UPDATE motorista SET nombre_motorista='$nombre',apellido_motorista='$apellido',dui_motorista='$dui',telefono_motorista='$telefono',direccion_motorista='$direccion',correo_motorista='$correo' WHERE id_Motorista='$id'";


	$resultado = $conexion->query($sql);




	if ($resultado==TRUE)
	{
		
		echo'<script lenguage= javascript>
          self.location= "../empleados.php?m=BIEN"
          </script>';
	}
	else
	{
		echo'<script lenguage= javascript> 
          self.location= "../empleados.php?p=0x80249005"
          </script>';
	}



 ?>





