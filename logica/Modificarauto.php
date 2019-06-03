<?php 

	require 'conexion.php';

	
	$id = $_POST['id'];
		
	$marca = $_POST['marca'];
	$modelo = $_POST['modelo'];
	$placa = $_POST['placa'];
	$carga = $_POST['Carga'];
	


	$sql = "UPDATE vehiculo SET marca='$marca', modelo='$modelo', placa='$placa', cap_carga='$carga' WHERE id_Vehiculo ='$id'";


	$resultado = $conexion->query($sql);




	if ($resultado==TRUE)
	{
		
		echo'<script lenguage= javascript>
          self.location= "../autos.php?m=BIEN"
          </script>';
	}
	else
	{
		echo'<script lenguage= javascript> 
          self.location= "../autos.php?p=0x80249005"
          </script>';
	}











 ?>