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
    <link rel="stylesheet" href="css/style.container.css" />
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
  </head>
<!-- body -->

<body class="main-layout">
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
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="books.php">Libros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="library.html">Libreria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Suscribirse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin.html">Administracio</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
    <!-- end header -->
   <div class="about-bg">
      <div class="container">
         <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
               <div class="abouttitle">
                  <h2>Nuestros libros</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--Books -->
   <div class="Books">
      <div class="container">
         <div class="row">
            <div class="col-md-10 offset-md-1">
               <div class="titlepage">
                  <span>Aquí encontraras el catalogo de todos nuestros libros</span>
                  <span>
                     <div class="catalogo">
                        <?php
$host = 'localhost';
$bd = 'id19655823_libreria';
$user = 'root';
$pass = '';
$conexion = new mysqli($host, $user, $pass, $bd);
$query = 'SELECT * FROM libro';
$consulta = mysqli_query($conexion, $query);
if ($consulta) {
    if (mysqli_num_rows($consulta) > 0) {
        while ($obj = mysqli_fetch_object($consulta)) {
            ?>

                                 <dib class="card">
                                    <img src="<?php echo $obj->imagen ?>" width="100px" height="100px"></h1>
                                    <h1>ID: <?php echo $obj->idlibro . '<br>' ?> </h1>
                                    <h1>Titulo: <?php echo $obj->titulo . '<br>' ?></h1>
                                    <h1>Autor: <?php echo $obj->autor . '<br>' ?></h1>
                                    <h1>Editorial: <?php echo $obj->editorial . '<br>' ?></h1>
                                    <h1>Precio venta: <?php echo $obj->precioventa . '<br>' ?></h1>
                                    <h1>Precio renta: <?php echo $obj->preciorenta . '<br>' ?></h1>
                                 </dib>
                        <?php
}
    }
}
?>
                        </div>
                  </span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end Books -->
   <!-- footer -->
   <footer>
      <div class="footer">
         <div class="container">
            <div class="row pdn-top-30">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Follow">
                     <h3>Siguenos</h3>
                  </div>
                  <ul class="location_icon">
                     <li><a href="https://es-la.facebook.com/"><img src="icon/facebook.png" /></a></li>
                     <li><a href="https://www.twitch.tv/videos/1596598949"><img src="icon/Twitter.png" /></a></li>
                     <li><a href="https://mx.linkedin.com/"><img src="icon/linkedin.png" /></a></li>
                     <li><a href="https://www.instagram.com/"><img src="icon/instagram.png" /></a></li>
                  </ul>
               </div>
            </div>
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
</body>

</html>
