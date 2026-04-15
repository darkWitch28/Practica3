<?php

include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica3/Models/ProductoModel.php";

if (isset($_GET['action']) && $_GET['action'] === 'saldo') {
    $idCompra = intval($_GET['id'] ?? 0);
    header('Content-Type: application/json; charset=utf-8');

    if ($idCompra <= 0) {
        echo json_encode(['success' => false, 'message' => 'Id de compra inválido.']);
        exit;
    }

    $saldo = ObtenerSaldoProducto($idCompra);
    if ($saldo === null) {
        echo json_encode(['success' => false, 'message' => 'No se encontró el producto.']);
        exit;
    }

    echo json_encode(['success' => true, 'saldo' => $saldo]);
    exit;
}

if (isset($_POST['btnAbonar'])) {
    $idCompra = intval($_POST['compra'] ?? 0);
    $monto = floatval($_POST['abono'] ?? 0);

    $result = RegistrarAbono($idCompra, $monto);
    
    if($result) {
        header("Location: /Practica3/Views/Abonos/RegistroAbono.php?success=abono_registrado#registroAbono");
        exit;
    } else {
        header("Location: /Practica3/Views/Abonos/RegistroAbono.php?error=abono_no_registrado#registroAbono");
        exit;
    }
}

// Si se necesita soporte POST u otras acciones en el futuro, se puede extender aquí.
