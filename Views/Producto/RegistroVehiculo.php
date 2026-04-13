<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica3/Practica3/Views/layoutGeneral.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica3/Practica3/Models/VehiculoModel.php";
$vendedores = ObtenerVendedores();
?>
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
    <!-- Registro Vehiculos-->
    <section class="page-section" id="registroVehiculo">

        <div class="container">
            <form id="vehiculoForm" class="vendor-form-card" method="post"
                action="/Practica2/Controllers/VehiculoController.php">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Registro de Vehículos</h2>
                        <h3 class="section-subheading text-muted">Por favor ingrese los datos del vehículo</h3>
                    </div>
                    <div class="row justify-content-center mb-4">
                        <div class="col-12 col-md-10 col-lg-8">
                            <div class="form-group">
                                <!-- Marca input-->
                                <input class="form-control" id="marca" name="marca" type="text" placeholder="Marca *"
                                    required />
                            </div>
                            <div class="form-group">
                                <!-- Modelo input-->
                                <input class="form-control" id="modelo" name="modelo" type="text" placeholder="Modelo *"
                                    required />
                            </div>
                            <div class="form-group">
                                <!-- Color input-->
                                <input class="form-control" id="color" name="color" type="text" placeholder="Color *"
                                    required />
                            </div>
                            <div class="form-group">
                                <!-- Precio input-->
                                <input class="form-control" id="precio" name="precio" type="number" step="0.01" min="0.01"
                                    placeholder="Precio *" required />
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="vendedor" name="vendedor" required>
                                    <option value="">Seleccione un vendedor *</option>
                                    <?php foreach ($vendedores as $v): ?>
                                        <option value="<?= $v['IdVendedor']; ?>">
                                            <?= htmlspecialchars($v['Nombre']); ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    </div>
                        <!-- Mensaje de exito-->

                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center text-white mb-3">
                                <div class="fw-bolder">¡Vehículo registrado exitosamente!</div>
                            </div>
                        </div>
                        <!-- SMensaje de error-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Hubo un error al registrar el vehículo, por favor
                                intente de nuevo mas tarde.</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="text-center">
                            <?php if (isset($_GET['registro']) && $_GET['registro'] === 'ok') { ?>
                                <div class="text-center text-success mb-3">Vehículo registrado exitosamente.</div>
                            <?php } elseif (isset($_GET['registro']) && $_GET['registro'] === 'error') { ?>
                                <div class="text-center text-danger mb-3">Error al registrar el vehículo.</div>
                            <?php } ?>

                            <button class="btn btn-primary btn-xl text-uppercase" id="submitButton" name="btnRegistro"
                                type="submit">Registrar</button>
                        </div>
            </form>
        </div>
    </section>
    <?php MostrarFooter(); ?>
    <?php MostrarJS(); ?>
    <script src="../assets/funciones/registro.js"></script>
</body>

</html>