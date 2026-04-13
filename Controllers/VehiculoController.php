<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica3/Practica3/Models/VehiculoModel.php";

if (isset($_POST["btnRegistro"])) {

    $marca = trim($_POST["marca"] ?? "");
    $modelo = trim($_POST["modelo"] ?? "");
    $color = trim($_POST["color"] ?? "");
    $precio = str_replace(',', '.', trim($_POST["precio"] ?? ""));
    $vendedor = trim($_POST["vendedor"] ??"");

    if ($marca === "" || $modelo === "" || $color === "" || $precio === "" || $vendedor === "") {
        header("Location: /Practica2/Views/Vehiculos/RegistroVehiculo.php?registro=error#registroVehiculo");
        exit;
    }
    if (!is_numeric($precio) || (float)$precio <= 0) {
    header("Location: /Practica2/Views/Vehiculos/RegistroVehiculo.php?registro=error#registroVehiculo");
    exit;
}

    $result = RegistrarVehiculo($marca, $modelo, $color, $precio, $vendedor);

    if ($result) {
        header("Location: /Practica2/Views/Vehiculos/RegistroVehiculo.php?registro=ok#registroVehiculo");
        exit;
    } else {
        header("Location: /Practica2/Views/Vehiculos/RegistroVehiculo.php?registro=error#registroVehiculo");
        exit;
    }
}