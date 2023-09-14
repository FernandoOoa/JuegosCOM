<html>
    <body>
    <?php
include "conexion.php";
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$domicilio = $_POST['domicilio'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$sql = "update cliente set nombre = '" . $nombre . "',edad = '" . $edad . "',domicilio = '" . $domicilio . "',celular = '" . $celular . "',correo = '" . $correo . "' where idcliente='" . $id . "'";
$resultado = mysqli_query($conexion, $sql);
if ($resultado) {
    echo "<script>
                alert('Actualizacion exitosa');
                location.assign('edicioncliente.php');
                </script>";
} else {
    echo "<script>
                alert('Fallo la actualizacion');
                location.assingn('edicioncliente.php');
                </script>";
}
?>
       </body>
    </html>