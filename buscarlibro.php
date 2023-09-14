<?php
include "conexion.php";

$salida = "";
$query = "SELECT * FROM libro";

if (isset($_POST['consulta'])) {
    $q = $_POST['consulta'];
    $query = "SELECT * FROM libro WHERE idlibro = $q";
}
$resultado = $conexion->query($query);
if ($resultado->num_rows > 0) {
    $salida .= "<table>
    <thead>
        <th>ID Libro</th>
        <th>Titulo</th>
        <th>Editoria</th>
        <th>Edicion</th>
        <th>Autor</th>
        <th>Precio venta</th>
        <th>Precio renta</th>
        <th>Disponibles para vender</th>
        <th>Disponibles para rentar</th>
        <th>URL Imagen</th>
        <th>Acciones</th>
    </thead>
    <tbody>";
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $salida .= "
        <tr>
            <td>" . $fila['idlibro'] . "</td>
            <td>" . $fila['titulo'] . "</td>
            <td>" . $fila['editorial'] . "</td>
            <td>" . $fila['edicion'] . "</td>
            <td>" . $fila['autor'] . "</td>
            <td>" . $fila['precioventa'] . "</td>
            <td>" . $fila['preciorenta'] . "</td>
            <td>" . $fila['disponibleventa'] . "</td>
            <td>" . $fila['disponiblerenta'] . "</td>
            <td>" . $fila['imagen'] . "</td>
            <td><a href='actualizarlibro.php? id=" . $fila['idlibro'] . "'> Editar </a></td>
        </tr>";
    }
    $salida .= "</tbody></table>";
} else {
    $salida .= "No hay datos :'(";
}
echo $salida;
$conexion->close();
