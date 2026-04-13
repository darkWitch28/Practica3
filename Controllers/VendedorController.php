<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica3/Practica3/Models/VendedorModel.php";

if (isset($_POST["btnRegistrar"])) {

    $cedula = trim($_POST["cedula"] ?? "");
    $nombre = trim($_POST["nombre"] ?? "");
    $correoElectronico = trim($_POST["email"] ?? "");

    if ($cedula === "" || $nombre === "" || $correoElectronico === "" || !filter_var($correoElectronico, FILTER_VALIDATE_EMAIL)) {
        header("Location: /Practica2/Views/Vendedores/RegistroVendedor.php?registro=error#registroVendedor");
        exit;
    }

    $result = RegistrarVendedor($cedula, $nombre, $correoElectronico);

    if ($result) {
        header("Location: /Practica2/Views/Vendedores/RegistroVendedor.php?registro=ok#registroVendedor");
        exit;
    } else {
        header("Location: /Practica2/Views/Vendedores/RegistroVendedor.php?registro=error#registroVendedor");
        exit;
    }
}

