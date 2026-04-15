<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica3/Models/UtilitarioModel.php";

// function RegistrarVehiculo($marca, $modelo, $color, $precio, $vendedor)
// {
//     $context = OpenDatabase();

//     $sp = "CALL sp_registrar_vehiculo('$marca', '$modelo', '$color', '$precio', '$vendedor')";
//     $result = $context->query($sp);
    
//     CloseDatabase($context);
//     return $result;
// }
// function ObtenerVendedores()
// {
//     $context = OpenDatabase();
//     $sp = "CALL sp_obtener_vendedores()";
//     $result = $context->query($sp);

//     $vendedores = [];
//     while ($row = $result->fetch_assoc()) {
//         $vendedores[] = $row;
//     }

//     CloseDatabase($context);
//     return $vendedores;
// }

function ConsultarProductos()
{
    $context = OpenDatabase();
    
    $sp = "CALL sp_consultar_productos()";
    $result = $context->query($sp);

    $lista = [];
    while ($row = $result->fetch_assoc()) {
        $lista[] = $row;
    }

    CloseDatabase($context);
    return $lista;
}

function ObtenerSaldoProducto($idCompra)
{
    try {
        $context = OpenDatabase();
        $id = intval($idCompra);
        
        $sp = "CALL sp_obtener_saldo($id)";
        $result = $context->query($sp);

        if (!$result) {
            CloseDatabase($context);
            return null;
        }
        
        $row = $result->fetch_assoc();
        CloseDatabase($context);
        
        return $row['Saldo'] ?? null;
    }
    catch (Exception $e) {
        return null;
    }
}

function RegistrarAbono($idCompra, $monto)
{
    try {
        $context = OpenDatabase();
        $id = intval($idCompra);
        $mto = floatval($monto);
        
        $sp = "CALL sp_registrar_abono($id, $mto)";
        $result = $context->query($sp);
        
        CloseDatabase($context);
        return $result !== false;
    }
    catch (Exception $e) {
        return false;
    }
}