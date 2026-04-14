<?php

function MostrarCSS()
{

    echo '<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pagos en Linea</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
        <link rel="stylesheet" href="../assets/css/styles.css">
    </head>';
}
function MostrarFuentes()
{
    //Font Awesome icons 
    echo '<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>';
    //Google fonts
    echo '<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />';
    echo '<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />';
}

function MostrarNavbar()
{
    echo '<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="../Home/Homepage.php"><img src="../assets/img/navbar-logo.png" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="../Vendedores/RegistroVendedor.php">Registro de Vendedores</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Vehiculos/RegistroVehiculo.php">Registro de Vehículos</a></li>
                    <li class="nav-item"><a class="nav-link" href="../Vehiculos/ConsultaVehiculo.php">Consulta de Vehículos</a></li>
                </ul>
            </div>
        </div>
    </nav>';
}

function MostrarFooter()
{
    echo '<footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="centered">Copyright &copy; Pagos en Línea 2026</div>
            </div>
        </div>
    </footer>';
}

function MostrarJS()
{
    echo '<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
              <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>';
    //Bootstrap core JS
    echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>';
    //Core theme JS
    echo '<script src="../assets/js/scripts.js"></script>';
}