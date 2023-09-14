<?php
include "conexion.php";

$salida = "";
$query = "SELECT idventa FROM venta order by idventa desc limit 1";

$resultado = $conexion->query($query);
$fila = mysqli_fetch_assoc($resultado);
$numero = intval($fila['idventa']) + 1;
$salida .= "<p>Numero de venta: <a id ='numeroVenta'>" . $numero . "</a></p>";
echo $salida;
$conexion->close();
