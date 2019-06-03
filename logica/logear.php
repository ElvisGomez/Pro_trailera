<?php

require 'conexion.php';

session_start();
$usuarios=$_POST['usuario'];
$clave=$_POST['password'];

$query="SELECT count(*) as contar from usuario where usuario='$usuarios' and contrasena=sha1('$clave')";


$consulta=mysqli_query($conexion,$query);
$arreglo=mysqli_fetch_array($consulta);



if($arreglo['contar']>0)
{
	$_SESSION['username'] = $usuarios;
	echo '<script language=javascript>
	self.location = "../home.php"
	</script>';
	

}
else
{
	echo '<script language=javascript>
	self.location = "../index.php?r=Error"
	</script>';
}


?>