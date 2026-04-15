<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica3/Views/layoutGeneral.php"; ?>
<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica3/Models/ProductoModel.php"; ?>
<?php $productos = ConsultarProductos(); ?>
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
    <section class="page-section" id="registroAbono">
        <div class="container">
            <form id="abonoForm" class="vendor-form-card" method="post" action="/Practica3/Controllers/AbonoController.php">
                <div class="text-center mb-4">
                    <h2 class="section-heading text-uppercase">Registro</h2>
                    <h3 class="section-subheading text-muted">Por favor seleccione el producto al que desea abonar</h3>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <div class="input-group">
                            <select class="form-control" id="compra" name="compra" required>
                                <option value="">Seleccione un producto *</option>
                                <?php foreach ($productos as $p): ?>
                                    <?php if ($p['Estado'] === 'Pendiente'): ?>
                                        <option value="<?= $p['Id_Compra']; ?>" data-saldo="<?= htmlspecialchars($p['Saldo']); ?>"><?= htmlspecialchars($p['Descripcion']); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <button type="button" id="consultarBtn" class="btn btn-primary text-uppercase">Consultar</button>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <input class="form-control" id="saldo" name="saldo" type="text" placeholder="Saldo Anterior"
                        readonly />
                </div>
                <div class="form-group mb-4">
                    <input class="form-control" id="abono" name="abono" type="number" step="0.01"
                        placeholder="Abono" required />
                </div>
                <div class="text-center">
                    <button class="btn btn-primary btn-xl text-uppercase" id="submitButton" name="btnAbonar"
                        type="submit">Abonar</button>
                </div>
            </form>
        </div>
    </section>
    <?php MostrarFooter(); ?>
    <?php MostrarJS(); ?>
    <script src="../assets/funciones/registroAbono.js"></script>
</body>
</html>