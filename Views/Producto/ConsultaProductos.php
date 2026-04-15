<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/PROYECTOS/Practica3/Views/layoutGeneral.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/PROYECTOS/Practica3/Models/ProductoModel.php";
$vehiculos = ConsultarProductos();
?>

<!DOCTYPE html>
<html lang="en">
<?php MostrarFuentes(); ?>
<?php MostrarCSS(); ?>
<body>
    <?php MostrarNavbar(); ?>

    <section class="page-section" id="consultaProducto">
        <div class="container">
            <div class="vendor-form-card">
                <div class="text-center mb-4">
                    <h2 class="section-heading text-uppercase">Consulta de Productos</h2>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-light">
                        <thead>
                            <tr>
                                <th>Código Compra</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Saldo</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($vehiculos) > 0): ?>
                                <?php foreach ($vehiculos as $item): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($item["Id_Compra"]) ?></td>
                                        <td><?= htmlspecialchars($item["Descripcion"]) ?></td>
                                        <td><?= htmlspecialchars($item["Precio"]) ?></td>
                                        <td><?= htmlspecialchars($item["Saldo"]) ?></td>
                                        <td><?= htmlspecialchars($item["Estado"]) ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5" class="text-center">No hay productos registrados.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <?php MostrarFooter(); ?>
    <?php MostrarJS(); ?>
</body>
</html>
