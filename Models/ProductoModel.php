<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/PROYECTOS/Practica3/Models/UtilitarioModel.php";

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