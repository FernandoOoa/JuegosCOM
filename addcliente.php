<?php
include "conexion.php";
$query = 'SELECT idcliente FROM cliente order by idcliente desc limit 1';
$consulta = mysqli_query($conexion, $query);
$obj = mysqli_fetch_object($consulta);
$idcliente = intval($obj->idcliente) + 1;
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$domicilio = $_POST['domicilio'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];

$query = "INSERT INTO cliente  VALUES('$idcliente','$nombre','$edad','$domicilio','$celular','$correo')";

if (mysqli_query($conexion, $query)) {
    echo "<script>
            alert('Cliente añadido correctamente');
            location.assign('edicioncliente.php');
            </script>";
} else {
    echo "<script>
            alert('No se pudo añadir');
            location.assingn('edicioncliente.php');
            </script>";
}
die();
