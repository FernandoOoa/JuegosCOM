<html>
<body>
<?php
include "conexion.php";
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$editorial = $_POST['editorial'];
$edicion = $_POST['edicion'];
$autor = $_POST['autor'];
$precioventa = $_POST['precioventa'];
$preciorenta = $_POST['preciorenta'];
$disponibleventa = $_POST['disponibleventa'];
$disponiblerenta = $_POST['disponiblerenta'];
$imagen = $_POST['imagen'];
$sql = "update libro set titulo = '" . $titulo . "',editorial = '" . $editorial . "',edicion = '" . $edicion . "',autor = '" . $autor . "',precioventa = '" . $precioventa . "',preciorenta = '" . $preciorenta . "',disponibleventa = '" . $disponibleventa . "',disponiblerenta = '" . $disponiblerenta . "',imagen = '" . $imagen . "'  where idlibro='" . $id . "' ";
$resultado = mysqli_query($conexion, $sql);
if ($resultado) {
    echo "<script>
            alert('Actualizacion exitosa');
            location.assign('edicionlibro.php');
            </script>";
} else {
    echo "<script>
            alert('Fallo la actualizacion');
            location.assingn('edicionlibro.php');
            </script>";
}
?>
   </body>
</html>