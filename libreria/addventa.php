<?php
include "conexion.php";

$idventa = $_POST['idventa'];
$idempleado = $_POST['idempleado'];
$fecha = $_POST['fecha'];
$data = $_POST['datos'];
$query = "INSERT INTO venta  VALUES('$idventa','$idempleado','$fecha')";
if (!mysqli_query($conexion, $query)) {
    echo "<script>
            alert('No se pudo añadir');
            location.assingn('edicionventa.php');
            window.location.reload()
            </script>";
    return;
}
$query = 'SELECT idventaLibro FROM ventaLibro order by idventaLibro desc limit 1';
$consulta = mysqli_query($conexion, $query);
$obj = mysqli_fetch_object($consulta);
$idventaLibro = intval($obj->idventaLibro);
foreach ($data as $value) {
    $idventaLibro++;
    $salida = "INSERT INTO ventaLibro  VALUES('$idventaLibro','$value[0]','$idventa','$value[3]','$value[2]')";
    if (!mysqli_query($conexion, $salida)) {
        echo "<script>
            alert('No se pudo añadir');
            location.assingn('edicionventa.php');
            window.location.reload()
            </script>";
        return;
    }
}

foreach ($data as $value) {
    $query = "SELECT disponibleventa FROM libro where idlibro = '$value[0]'";
    $consulta = mysqli_query($conexion, $query);
    $obj = mysqli_fetch_object($consulta);
    $existencia = intval($obj->disponibleventa);
    $existencia -= $value[3];
    $query = "UPDATE libro SET disponibleventa = '$existencia' WHERE idlibro='$value[0]'";
    mysqli_query($conexion, $query);
}
echo "<script>
            alert('Venta registrada');
            window.location.reload()
            </script>";
die();
