<!DOCTYPE html>
<html lang="es">

<head>
    <!-- basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <!-- site metas -->
    <title>Libros CUCEI</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- bootstrap css -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/styletable.css" />
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
  </head>
<!-- body -->

<body class="main-layout contact-page">
    <!-- header -->
    <header>
     <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">Libreria CUCEI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Libro
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="edicionlibro.php">Añadir</a></li>
            <li><a class="dropdown-item" href="consultalibro.php">Consultar/Edicion Libro</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Empleado
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="edicionempledo.php">Añadir empleado</a></li>
            <li><a class="dropdown-item" href="consultaempleado.php">Consultar/Editar empleado</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cliente
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="edicioncliente.php">Añadir cliente</a></li>
            <li><a class="dropdown-item" href="consultacliente.php">Consultar/Editar cliente</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ventas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="edicionventa.php">Crear venta</a></li>
            <li><a class="dropdown-item" href="consultaventa.php">Consultar venta</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Rentas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="edicionrenta">Crear Renta</a></li>
            <li><a class="dropdown-item" href="consultarenta.php">Consultar venta</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pedidos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="edicionpedido.php">Crear Pedido</a></li>
            <li><a class="dropdown-item" href="consultapedido.php">Consultar Pedido</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
    <!-- end header -->
    <a name="Modificar--Cliente" />
    <div class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="abouttitle">
                        <h2>Consulta/Edicion Cliente</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class = "form-1-2">
            <label for="caja_busqueda">Busqueda: </label>
            <input type="number" name="caja_busqueda" id= "caja_busqueda"></input>
        </div>
        <div id ="datos">
        </div>
        <div class="copyright">
            <div class="container">
                <p>Copyright 2019 All Right Reserved By Libreria CUCEI</p>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!--Busqueda-->
    <script src="js/cliente.js"></script>
</body>

</html>
