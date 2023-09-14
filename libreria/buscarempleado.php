<?php
include "conexion.php";

$salida = "";
$query = "SELECT * FROM empleado";

if (isset($_POST['consulta'])) {
    $q = $_POST['consulta'];
    $query = "SELECT * FROM empleado WHERE idempleado = $q";
}
$resultado = $conexion->query($query);
if ($resultado->num_rows > 0) {
    $salida .= "<table>
        <thead>
            <th>Idempleado</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Rfc</th>
            <th>Domicilio</th>
            <th>Celular</th>
            <th>Nss</th>
            <th>Puesto</th>
            <th>Password</th>
            <th>Acciones</th>
        </thead>
        <tbody>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $salida .= "
        <tr>
            <td>" . $fila['idempleado'] . "</td>
            <td>" . $fila['nombre'] . "</td>
            <td>" . $fila['edad'] . "</td>
            <td>" . $fila['rfc'] . "</td>
            <td>" . $fila['domicilio'] . "</td>
            <td>" . $fila['celular'] . "</td>
            <td>" . $fila['nss'] . "</td>
            <td>" . $fila['puesto'] . "</td>
            <td>" . $fila['password'] . "</td>
            <td><a href='actualizarempleado.php? id=" . $fila['idempleado'] . "'>Editar</a></td>
</tr>";
    }
    $salida .= "</tbody></table>";
} else {
    $salida .= "No hay datos :'(";
}
echo $salida;
$conexion->close();
