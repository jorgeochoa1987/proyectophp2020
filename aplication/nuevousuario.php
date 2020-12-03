<!doctype html>
<html class="no-js h-100" lang="es">
<?php
//Reanudamos la sesión
session_start();
//Comprobamos si el usario está logueado
//Si no lo está, se le redirecciona al index
//Si lo está, definimos el botón de cerrar sesión y la duración de la sesión
if(!isset($_SESSION['usuario']) and $_SESSION['estado'] != 'Autenticado') {
    header('Location: index.php');
    $nombre = $_SESSION['usuario'];
} else {
  $estado = $_SESSION['usuario'];
  $nombre = $_SESSION['nombre'];
  $salir = '<a  style="padding-left: 13px;" class="class="dropdown-item text-danger" href="../recursos/salir.php" target="_self"><i class="material-icons text-danger">&#xE879;</i>Cerrar sesión</a>';
  require('../recursos/sesiones.php');
  date_default_timezone_set('date.timezone = "America/Bogota";');
};
?> 
<!doctype html>
<html class="no-js h-100" lang="es">
<head>
  
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mr caballo</title>
    <meta name="description" content="Sistema de apuestas">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <link rel="icon" href="images/money.png" type="image/png" sizes="16x16">
    <script src="js/ohsnap.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

    .show-menu-arrow
    {
      width: 110% !important;
    }
    .bootstrap-select.btn-group .dropdown-menu.inner {
    position: static;
    float: none;
    border: 0;
    padding: 0;
    margin: 0;
    border-radius: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.dropdown-menu {
    z-index: 1000;
    min-width: 10rem;
    padding: 10px 0;
    margin: 0 0 0;
    font-size: 1rem;
    color: #5a6169;
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.05);
    border-radius: .375rem;
    box-shadow: 0 0.5rem 4rem rgba(0,0,0,.11), 0 10px 20px rgba(0,0,0,.05), 0 2px 3px rgba(0,0,0,.06);
}
  @media (max-width: 500px){ 
    .promo-popup.hidden {
    bottom: -74% !important;
}
}
  </style>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css"> </head>
  </head>
  <body class="h-100">
   
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="images/menu.svg" alt="Menú de sistema">
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link " href="nuevousuario.php">
                  <i class="material-icons">group_add</i>
                  <span>Nuevo Usuario</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="listarusuario.php">
                  <i class="material-icons">accessibility</i>
                  <span>Listar Usuario</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="carteracrear.php">
                  <i class="material-icons">account_balance_wallet</i>
                  <span>Nueva apuesta</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="listarcartera.php">
                  <i class="material-icons">format_align_left</i>
                  <span>Bitacora de apuesta</span>
                </a>
              </li>  
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">     
              <ul class="navbar-nav border-left flex-row ">
                <li class="nav-item border-right dropdown notifications">
                 
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle mr-2" src="../images/<?php  echo $foto ;?>" alt="User Avatar">
                    <span class="d-none d-md-inline-block"><?php echo  $nombreApe; ?></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item" href="user-profile.php">
                    <!--  <i class="material-icons">&#xE7FD;</i>Mi cuenta</a>-->
                    
                    <div class="dropdown-divider"></div>
                   <?php echo $salir ?>
                      
                  </div>
                </li> 
            
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>

          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Agregar</span>
                <h3 class="page-title">Nuevo usuario</h3>
              </div>
            </div>
            <div class="row">       
              <div class="col-lg-12">
                <div class="card card-small mb-12">
                  <div class="card-header border-bottom">
                    <h6 class="m-0">Información básica</h6>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col-md-12">
                        <form action="modules/creacionUsuario.php" method="post"> 
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feFirstName">Nombre</label>
                                <input type="text" class="form-control" name="feFirstName" placeholder="Ingrese nombre"> </div>
                              <div class="form-group col-md-6">
                                <label for="feLastName">Apellido</label>
                                <input type="text" class="form-control" name="feLastName" placeholder="Ingrese apellido"> </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Correo</label>
                                <input type="email" class="form-control" name="feEmailAddress" placeholder="sierra@correo.com"> </div>
                              <div class="form-group col-md-6">
                              <label for="feInputUser">Usuario</label>
                              <input type="text" class="form-control" name="feInputUser" placeholder="Ingrese usuario"> </div>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="feInputCed">Cédula</label>
                              <input type="text" class="form-control" name="feInputCed" placeholder="Ingrese Cédula"> </div>
                            </div>
                            <div class="form-group col-md-6">
                            <div class="form-group">
                              <label for="feInputPass">Contraseña</label>
                              <input type="text" class="form-control" name="feInputPass" placeholder="Ingrese Contraseña"> </div>
                              </div>
                            <button type="submit" id="crearCliente" class="btn btn-accent">Crear usuario</button>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
           
           </form>
          </div>
          <footer></footer> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="scripts/extras.1.1.0.min.js"></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js'></script>
   
  </body>
</html> 