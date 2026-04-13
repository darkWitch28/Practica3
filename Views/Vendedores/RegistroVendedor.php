<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica3/Practica3/Views/layoutGeneral.php"; ?>

<!DOCTYPE html>
<html lang="en">

<?php
MostrarFuentes();
?>

<?php
MostrarCSS();
?>

<body>
    <!-- Navigation-->
    <?php MostrarNavbar(); ?>
    <!--Formulario-->
    <!-- Registro Vendedores-->
    <section class="page-section" id="registroVendedor">

        <div class="container">
            <form id="vendedorForm" class="vendor-form-card" method="post"
                action="/Practica2/Controllers/VendedorController.php">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Registro de Vendedores</h2>
                        <h3 class="section-subheading text-muted">Por favor ingrese los datos del vendedor</h3>
                    </div>
                    <div class="row justify-content-center mb-4">
                        <div class="col-12 col-md-10 col-lg-8">
                            <div class="form-group">
                                <!-- Cedula input-->
                                <input class="form-control" id="cedula" name="cedula" type="text" placeholder="Cedula *"
                                    required />
                                
                            </div>
                            <div class="form-group">
                                <!-- Email input-->
                                <input class="form-control" id="email" name="email" type="email"
                                    placeholder="Correo electrónico *" required />
                             </div> 
                            <div class="form-group">
                                <!-- Nombre input-->
                                <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre *"
                                   required />
                        </div>
                    </div>
                    <!-- Mensaje de exito-->

                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">¡Vendedor registrado exitosamente!</div>
                        </div>
                    </div>
                    <!-- SMensaje de error-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Hubo un error al registrar el vendedor, por favor
                            intente de nuevo mas tarde.</div>
                    </div>
                    <!-- Submit Button-->
                    <div class="text-center">
                        <?php if (isset($_GET['registro']) && $_GET['registro'] === 'ok') { ?>
                            <div class="text-center text-success mb-3">Vendedor registrado exitosamente.</div>
                        <?php } elseif (isset($_GET['registro']) && $_GET['registro'] === 'error') { ?>
                            <div class="text-center text-danger mb-3">Error al registrar el vendedor.</div>
                        <?php } ?>

                        <button class="btn btn-primary btn-xl text-uppercase" id="submitButton" name="btnRegistrar"
                            type="submit">Registrar</button>
                    </div>
            </form>
        </div>
        </div>
    </section>
    <?php MostrarFooter(); ?>
    <?php MostrarJS(); ?>
    <script src="../assets/funciones/registroVendedor.js"></script>
</body>
</html>