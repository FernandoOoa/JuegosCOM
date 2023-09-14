<?php
include "conexion.php";
$query = 'SELECT idempleado FROM empleado order by idempleado desc limit 1';
$consulta = mysqli_query($conexion, $query);
$obj = mysqli_fetch_object($consulta);
$idempleado = intval($obj->idempleado) + 1;
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$rfc = $_POST['rfc'];
$domicilio = $_POST['domicilio'];
$celular = $_POST['celular'];
$nss = $_POST['nss'];
$puesto = $_POST['puesto'];
$password = $_POST['password'];

$query = "INSERT INTO empleado  VALUES('$idempleado','$nombre','$edad','$rfc','$domicilio','$celular','$nss','$puesto','$password')";

if (mysqli_query($conexion, $query)) {
    echo "<script>
            alert('Empleado añadido correctamente');
            location.assign('edicionempleado.php');
            </script>";
} else {
    echo "<script>
            alert('No se pudo añadir');
            location.assingn('edicionempleado.php');
            </script>";
}
die();
