<?php
include "conexion.php";
$id = $_GET['id'];
$sql = "select * from empleado where idempleado='" . $id . "'";
$resultado = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_assoc($resultado);
$nombre = $fila["nombre"];
$edad = $fila["edad"];
$rfc = $fila["rfc"];
$domicilio = $fila["domicilio"];
$celular = $fila["celular"];
$nss = $fila["nss"];
$puesto = $fila["puesto"];
$password = $fila["password"];
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
                        <h2>Empleado</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="Contact">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form action="actualizarempleado_2.php" method="post">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h2 style="color:#FF0000">ID(No se edita)</h2>
                                <input class="form-control"  name="id" type="number" readonly value="<?php echo $id; ?>"required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h2 style="color:#FF0000">Nombre:</h2>
                                <input class="form-control" name="nombre" type="text"value="<?php echo $nombre; ?>" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h2 style="color:#FF0000">Edad:</h2>
                                <input class="form-control"  name="edad" type="number" value="<?php echo $edad; ?>" required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h2 style="color:#FF0000">RFC:</h2>
                            <input class="form-control" value="<?php echo $rfc; ?>" name="rfc" type="text" required >
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h2 style="color:#FF0000">Domicilio:</h2>
                                <input class="form-control" value="<?php echo $domicilio; ?>" name="domicilio" type="text"required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h2 style="color:#FF0000">Numero telefonico:</h2>
                                <input class="form-control" value="<?php echo $celular; ?>" name="celular" type="number"required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h2 style="color:#FF0000">Numero de seguro social:</h2>
                                <input class="form-control" value="<?php echo $nss; ?>" name="nss" type="number"required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h2 style="color:#FF0000">Puesto de trabajo:</h2>
                                <input class="form-control" value="<?php echo $puesto; ?>" name="puesto" type="text"required>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <h2 style="color:#FF0000">Contraseña:</h2>
                                <input class="form-control" value="<?php echo $password; ?>" name="password" type="number" max="9999"required >
                            </div>
                        </div>
                    </div>
                    <button class="send-btn">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <div>
        <a href="edicionempleado.php"><h2 style="color:#FF0000">Regresar</h2></a>
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

        <script src="js/plugin.js"></script>
        <!-- sidebar -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/custom.js"></script>
    </body>

    </html>