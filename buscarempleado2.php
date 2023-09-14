<?php
include "conexion.php";

$salida = "";

if (isset($_POST['consulta']) && $_POST['consulta'] != '') {
    $q = $_POST['consulta'];
    $query = "SELECT * FROM empleado WHERE idempleado = $q";
    $resultado = $conexion->query($query);
    if ($resultado->num_rows > 0) {
        $salida .= "<table>
        <thead>
            <th>Idempleado</th>
            <th>Nombre</th>
        </thead>
        <tbody>";
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $salida .= "
        <tr>
            <td id = 'idempleado'>" . $fila['idempleado'] . "</td>
            <td>" . $fila['nombre'] . "</td>
</tr>";
        }
        $salida .= "</tbody></table>";
    } else {
        $salida .= "No hay datos :'(";
    }
} else {
    $salida .= "<table>
        <thead>
            <th>Idempleado</th>
            <th>Nombre</th>
        </thead>
        <tbody></tbody></table>";
}
echo $salida;
$conexion->close();
