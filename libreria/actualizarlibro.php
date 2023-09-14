<?php
include "conexion.php";
$id = $_GET['id'];
$sql = "select * from libro where idlibro='" . $id . "'";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_assoc($resultado);
$titulo = $fila["titulo"];
$editorial = $fila['editorial'];
$edicion = $fila["edicion"];
$autor = $fila["autor"];
$precioventa = $fila["precioventa"];
$preciorenta = $fila["preciorenta"];
$disponibleventa = $fila["disponibleventa"];
$disponiblerenta = $fila["disponiblerenta"];
$imagen = $fila["imagen"];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Libreria CUCEI</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/styletable.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script
    ><![endif]-->
</head>
<!-- body -->

<body class="main-layout contact-page">
    <a name="Modificar--Libro" />
    <div class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="abouttitle">
                        <h2>Libro</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <div class="Contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form action="actualizarlibro_2.php" method="post">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h2 style="color:#FF0000">ID:</h2>
                                <input class="form-control"  name="id" type="number" readonly value="<?php echo $id; ?>"required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h2 style="color:#FF0000">Titulo:</h2>
                                <input class="form-control" name="titulo" value="<?php echo $titulo; ?>"type="text" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h2 style="color:#FF0000">Editorial:</h2>
                                <input class="form-control" name="editorial" type="text" value="<?php echo $editorial; ?>" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h2 style="color:#FF0000">Numero de edicion:</h2>
                                <input class="form-control" name="edicion" type="text" value="<?php echo $edicion; ?>" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h2 style="color:#FF0000">Autor del libro:</h2>
                                <input class="form-control" name="autor" type="text" value="<?php echo $autor; ?>" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h2 style="color:#FF0000">Precio para vender:</h2>
                                <input class="form-control" name="precioventa" type="number" value="<?php echo $precioventa; ?>" step="0.01" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h2 style="color:#FF0000">Precio para rentar:</h2>
                                <input class="form-control"  name="preciorenta" type="number" value="<?php echo $preciorenta; ?>" step="0.01" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h2 style="color:#FF0000">Libros para venta:</h2>
                                <input class="form-control" name="disponibleventa" type="number" value="<?php echo $disponibleventa; ?>" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h2 style="color:#FF0000">Libros para renta:</h2>
                                <input class="form-control" name="disponiblerenta" type="number" value="<?php echo $disponiblerenta; ?>" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h2 style="color:#FF0000">URL:</h2>
                                <input class="form-control" name="imagen" type="url" value="<?php echo $imagen; ?>" required>
                            </div>
                        </div>
                </div>
                <button class="send-btn">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<a href="edicionlibro.php"><h2 style="color:#FF0000">Regresar</h2></a>
    <!-- footer -->
    <footer>
        <div class="copyright">
            <div class="container">
                <p>Copyright 2019 All Right Reserved By Libreria CUCEI</p>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>