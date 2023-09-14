<?php
include "conexion.php";
$iva = .16;
$salida = "";
$query = "SELECT * FROM venta";

if (isset($_POST['consulta'])) {
    $q = $_POST['consulta'];
    $query = "SELECT * FROM ventaLibro v INNER JOIN venta b ON v.idventa = $q and b.idventa = $q";
    $resultado = $conexion->query($query);
    if ($resultado->num_rows > 0) {
        $salida .= "<table>
            <thead>
                    <th>ID Venta</th>
                    <th>ID Vendedor</th>
                    <th>Nombre vendedor</th>
                    <th>Fecha</th>
                    <th>ID Venta libro</th>
                    <th>ID libro</th>
                    <th>Nombre libro</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Importe</th>
            </thead>
            <tbody>";
        $cont = 0;
        $total = 0;
        $importe = 0;
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $idempleado = $fila['idempleado'];
            $idlibro = $fila['idlibro'];
            $query = "SELECT nombre FROM empleado where idempleado = $idempleado";
            $resultadonombre = $conexion->query($query);
            $auxiliar = mysqli_fetch_assoc($resultadonombre);
            $nombre = $auxiliar['nombre'];
            $query = "SELECT titulo FROM libro where idlibro = $idlibro";
            $resultadonombrelibro = $conexion->query($query);
            $auxiliar = mysqli_fetch_assoc($resultadonombrelibro);
            $nombrelibro = $auxiliar['titulo'];
            $cont++;
            $importe = $fila['precio'] * $fila['cantidad'];
            $total = $total + $importe;
            if ($cont == 1) {
                $salida .= "
                <tr>
                <th>" . $fila['idventa'] . "</th>
                <th>" . $fila['idempleado'] . "</th>
                <th>" . $nombre . "</th>
                <th>" . $fila['fechaventa'] . "</th>
                <th>" . $fila['idventaLibro'] . "</th>
                <th>" . $fila['idlibro'] . "</th>
                <th>" . $nombrelibro . "</th>
                <th>" . $fila['cantidad'] . "</th>
                <th>" . $fila['precio'] . "</th>
                <th>" . $importe . "</th>
                </tr>";
            } else {
                $salida .= "
                <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>" . $fila['idventaLibro'] . "</th>
                <th>" . $fila['idlibro'] . "</th>
                <th>" . $nombrelibro . "</th>
                <th>" . $fila['cantidad'] . "</th>
                <th>" . $fila['precio'] . "</th>
                <th>" . $importe . "</th>
                </tr>";
            }
        }
        $calculoiva = $total * $iva;
        $total2 = $total + $calculoiva;
        $salida .= "
        <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>Sub Total </th>
                <th>" . $total . "</th>
                </tr>
        <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>IVA </th>
                <th>" . $calculoiva . "</th>
                </tr>
        <tr>
                <td></td>
                <td></td>
                <td></td>
                <th></th>
                <th></th>
                <th></th>
                <td></td>
                <th></th>
                <th>Total</th>
                <th>" . $total2 . "</th>
                </tr>
        </tbody></table>";
    } else {
        $salida .= "No hay datos :'(";
    }
} else {
    $resultado = $conexion->query($query);
    if ($resultado->num_rows > 0) {
        $salida .= "<table>
        <thead>
        <th>ID Venta</th>
        <th>ID Vendedor</th>
        <th>Fecha</th>
        </thead>
        <tbody>";
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $salida .= "
            <tr>
            <td>" . $fila['idventa'] . "</td>
            <td>" . $fila['idempleado'] . "</td>
            <td>" . $fila['fechaventa'] . "</td>
            </tr>";
        }
        $salida .= "</tbody></table>";
    }
}
echo $salida;
$conexion->close();
