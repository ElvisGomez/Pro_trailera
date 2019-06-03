<?php date_default_timezone_set('America/El_Salvador');//seteamos zona horaria
require_once('class.ezpdf.php');//llamamos libreria
require '../logica/conexion.php';
$pdf = new Cezpdf('a4',"landscape"); //instacia de la clase, defino papel
$pdf->selectFont('fonts/Helvetica.afm');//setemos la fuente
$pdf->ezSetCmMargins(1,1,1.5,1.5); //seteamos margenes
//seleccionamos la tabla a mostrar
$datos = $conexion->query("select kilometraje, marca from ruta, vehiculo where ruta.id_Vehiculo = vehiculo.id_Vehiculo");
$datos1 = $conexion->query("select nombre_motorista from motorista");
while($fila = mysqli_fetch_assoc($datos)) { //recorrer tabla y extraer filas
    $data[] = array_merge($fila);//formamos arreglo
}

$titles = array(//formo arreglo con titulon de columna
'marca'=>'<b>Vehiculo</b>',
'kilometraje'=>'<b>Kilometraje</b>',
);
$txttit = "<b>Reporte de kilometraje por vehiculo</b>\n";
$pdf->ezText($txttit, 12);//imprime texto 
$options = array( 
'shadeCol'=>array(0.9,2,0.9,0.5),//color de filas de tabla
'xOrientation'=>'center',//orientacion de tabla
'width'=>500//ancho de tabla
);
$pdf->ezTable($data,$titles,'Kilometraje por vehiculo', $options);
$pdf->ezText("\n\n\n", 24);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
?>