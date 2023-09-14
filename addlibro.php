<?php
include "conexion.php";
$query = 'SELECT idlibro FROM libro order by idlibro desc limit 1';
$consulta = mysqli_query($conexion, $query);
$obj = mysqli_fetch_object($consulta);
$idlibro = intval($obj->idlibro) + 1;
$titulo = $_POST['titulo'];
$editorial = $_POST['editorial'];
$edicion = $_POST['edicion'];
$autor = $_POST['autor'];
$precioventa = $_POST['precioventa'];
$preciorenta = $_POST['preciorenta'];
$disponibleventa = $_POST['disponibleventa'];
$disponiblerenta = $_POST['disponiblerenta'];
$imagen = $_POST['imagen'];

$query = "INSERT INTO libro  VALUES($idlibro,'$titulo','$editorial','$edicion','$autor','$precioventa','$preciorenta','$disponibleventa','$disponiblerenta','$imagen')";

if (mysqli_query($conexion, $query)) {
    echo "<script>
            alert('Libro añadido correctamente');
            location.assign('edicionlibro.php');
            </script>";
} else {
    echo "<script>
            alert('No se pudo añadir');
            location.assingn('edicionlibro.php');
            </script>";
}
die();
