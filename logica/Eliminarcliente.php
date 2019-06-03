<?php 

require 'conexion.php';

$id = $_GET['id'];


$sql = "DELETE FROM cliente WHERE id_Cliente='".$id."'";



if ($conexion->query($sql)==TRUE) 
		{
			echo '<script language=javascript>
			self.location="../clientes.php"
			</script>';
		
		}
 ?>