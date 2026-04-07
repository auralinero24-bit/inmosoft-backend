<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Captura el endpoint de la URL (?endpoint=...)
$request = $_GET['endpoint'] ?? '';

// Este switch permite que los módulos funcionen sin errores de Laravel
switch ($request) {
    case 'clientes':
        include_once __DIR__ . '/clientesController.php';
        break;
    case 'propiedades':
        include_once __DIR__ . '/propiedadesController.php';
        break;
    case 'contratos':
        include_once __DIR__ . '/contratosController.php';
        break;
    default:
        echo json_encode(["error" => "Endpoint no encontrado"]);
        break;
}
?>