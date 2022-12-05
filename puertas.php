<?php
$conexion = mysqli_connect("localhost", "root", "toringo12");
mysqli_select_db($conexion, "pruebas");
$consulta = mysqli_query($conexion, ' SELECT `ESTADO` FROM `puertas` WHERE  `ID_PUERTA`="P001" ');
$estado = mysqli_fetch_array($consulta);
echo "estado=" . end($estado) . ";";
?>

