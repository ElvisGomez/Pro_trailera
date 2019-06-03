<?php 

require 'conexion.php';

$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$carga = $_POST['Carga'];
$moto = $_POST['motorista'];



$insertar = "INSERT INTO vehiculo (marca,modelo,placa,cap_carga,id_motorista) values('$marca','$modelo','$placa','$carga','$moto')";


	
		if ($conexion->query($insertar)==TRUE) 
		{
			echo '<script language=javascript>
			self.location="../autos.php"
			</script>';
		}

	








 ?>