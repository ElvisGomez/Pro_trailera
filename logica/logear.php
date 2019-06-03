<?php

require 'conexion.php';

session_start();
$usuarios=$_POST['usuario'];
$clave=$_POST['password'];

$query="SELECT count(*) as contar from usuario where usuario='$usuarios' and contrasena=sha1('$clave')";
$query1="SELECT * FROM usuario where usuario='$usuarios' and contrasena=sha1('$clave')";

$consulta=mysqli_query($conexion,$query);
$arreglo=mysqli_fetch_array($consulta);

$consulta1= mysqli_query($conexion, $query1);
$row= mysqli_fetch_array($consulta1);
$rol= $row['id_rol'];

if($arreglo['contar']>0)
{
	/*$_SESSION['username'] = $usuarios;
	echo '<script language=javascript>
	self.location = "../home.php"
	</script>';*/
     if ($row['id_rol']==1) {
         echo "<script>alert('Admin.$rol')</script>";
         $_SESSION['username'] = $usuarios;
         $_SESSION['rol'] = $rol;
         echo '<script>self.location = "../home.php"
	</script>';
     }else if ($row['id_rol']==2) {
         echo "<script>alert('Contabilidad.$rol')</script>";
         $_SESSION['username'] = $usuarios;
         $_SESSION['rol'] = $rol;
         echo '<script>self.location = "../home.php"
	</script>';
     }else{
         echo "<script>alert('Usuario.$rol')</script>";
         $_SESSION['username'] = $usuarios;
         $_SESSION['rol'] = $rol;
         echo '<script>self.location = "../home.php"
	</script>';
     }
}
else
{
	echo '<script language=javascript>
	self.location = "../index.php?r=Error"
	</script>';
}


?>