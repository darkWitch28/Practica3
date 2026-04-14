<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica3/Views/layoutGeneral.php"; ?>

<!DOCTYPE html>
<html lang="en">

<?php
MostrarFuentes();
?>

<?php
MostrarCSS();
?>

<body id="page-top">
    <!-- Navigation-->
    <?php MostrarNavbar(); ?>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-heading text-uppercase">¡Bienvenido!</div>
        </div>
    </header>

    <section class="page-section" id="opciones">
        <div class="container h-100 d-flex flex-column justify-content-center">
            <div class="text-center">
                <h3 class="section-subheading text-muted">¿Qué deseas hacer?</h3>
            </div>
            
            <div class="row justify-content-center gap-3">
                <div class="col-auto">
                    <a href="../Vehiculos/RegistroPago.php" class="btn btn-primary btn-xl text-uppercase"
                         type="submit">Registrar un Pago</a>
                </div>
                <div class="col-auto">
                    <a href="../Producto/ConsultaProductos.php" class="btn btn-primary btn-xl text-uppercase"
                         type="submit">Consultar Productos</a>
                </div>
            </div>
        </div>  
    </section>      
    <?php 
    MostrarFooter(); 
    MostrarJS();
    ?>
</body>

</html>