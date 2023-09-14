<?php
include "conexion.php";

$salida = "";
$query = "SELECT * FROM cliente";

if (isset($_POST['consulta'])) {
    $q = $_POST['consulta'];
    $query = "SELECT * FROM cliente WHERE idcliente = $q";
}
$resultado = $conexion->query($query);
if ($resultado->num_rows > 0) {
    $salida .= "<table>
        <thead>
            <th>IDCliente</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Domicilio</th>
            <th>Celular</th>
            <th>Correo</th>
            <th>Acciones</th>
        </thead>
        <tbody>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $salida .= "
        <tr>
    <td>" . $fila['idcliente'] . "</td>
    <td>" . $fila['nombre'] . "</td>
    <td>" . $fila['edad'] . "</td>
    <td>" . $fila['domicilio'] . "</td>
    <td>" . $fila['celular'] . "</td>
    <td>" . $fila['correo'] . "</td>
    <td><a href='actualizarcliente.php? id=" . $fila['idcliente'] . "'>Editar</a></td>
</tr>";
    }
    $salida .= "</tbody></table>";
} else {
    $salida .= "No hay datos :'(";
}
echo $salida;
$conexion->close();
