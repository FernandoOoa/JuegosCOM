<?php
include "conexion.php";

$salida = "";

if (isset($_POST['consulta'])) {
    $q = $_POST['consulta'];
    $query = "SELECT * FROM libro WHERE idlibro = $q";

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
        <th>Disponibles para vender</th>
        <th>Cantida de articulos</th>
        <th>Acciones</th>
    </thead>
    <tbody>";
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $salida .= "
        <tr>
            <td id='id'>" . $fila['idlibro'] . "</td>
            <td id='titulo'>" . $fila['titulo'] . "</td>
            <td>" . $fila['editorial'] . "</td>
            <td>" . $fila['edicion'] . "</td>
            <td>" . $fila['autor'] . "</td>
            <td id='precioventa'>" . $fila['precioventa'] . "</td>
            <td name='disponibleventa' id='disponibleventa'>" . $fila['disponibleventa'] . "</td>
            <th><input type='number' name='caja_articulo' id= 'caja_articulo'  min ='1'></input></th>
            <td><button type='button' class='btn btn-secondary' name='add'id='add'>Añadir</button></td>
        </tr>";
        }
        $salida .= "</tbody></table>";
    } else {
        $salida .= "No hay datos :'(";
    }
} else {
    $salida .= "<table>
    <thead>
        <th>ID Libro</th>
        <th>Titulo</th>
        <th>Editoria</th>
        <th>Edicion</th>
        <th>Autor</th>
        <th>Precio venta</th>
        <th>Disponibles para vender</th>
        <th>Acciones</th>
    </thead>
    <tbody>";
    $salida .= "
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>";
    $salida .= "</tbody></table>";
}
echo $salida;
$conexion->close();
