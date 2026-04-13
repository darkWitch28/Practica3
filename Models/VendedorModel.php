<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/Practica3/Practica3/Models/UtilitarioModel.php";

function RegistrarVendedor($cedula, $nombre, $correo)
{
    $context = OpenDatabase();

    $sp = "CALL sp_registrar_vendedor('$cedula', '$nombre', '$correo')";
    $result = $context->query($sp);
    
    CloseDatabase($context);
    return $result;
}

