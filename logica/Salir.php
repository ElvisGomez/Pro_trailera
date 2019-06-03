<?php
session_start();
session_destroy();


if(!isset($usuarios))
{
	echo '<script language=javascript>
	self.location = "../index.php"
	</script>';
}
else
{
	echo '<script language=javascript>
	self.location = "../home.php"
	</script>';
}





?>

