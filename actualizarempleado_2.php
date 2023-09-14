
<html>
<body>
<?php
include "conexion.php";
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$rfc = $_POST['rfc'];
$domicilio = $_POST['domicilio'];
$celular = $_POST['celular'];
$nss = $_POST['nss'];
$puesto = $_POST['puesto'];
$password = $_POST['password'];
$sql = "update empleado set nombre = '" . $nombre . "',edad = '" . $edad . "',rfc = '" . $rfc . "',domicilio = '" . $domicilio . "',celular = '" . $celular . "',nss = '" . $nss . "',puesto = '" . $puesto . "',password = '" . $password . "' where idempleado='" . $id . "'";
$resultado = mysqli_query($conexion, $sql);
if ($resultado) {
    echo "<script>
            alert('Actualizacion exitosa');
            location.assign('edicionempleado.php');
            </script>";
} else {
    echo "<script>
            alert('Fallo la actualizacion');
            location.assingn('edicionempleado.php');
            </script>";
}
?>
   </body>
</html>
