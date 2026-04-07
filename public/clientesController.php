<?php
// Incluimos el modelo para que el controlador pueda usar sus funciones
include_once 'clientesModel.php';

// Detectamos si la petición es POST (para guardar) o GET (para listar)
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'POST') {
    // Leemos los datos que envías desde el Body de Postman
    $data = json_decode(file_get_contents("php://input"), true);
    
    // Verificamos que los datos existan
    if (isset($data['nombre'], $data['email'], $data['telefono'])) {
        $exito = ClientesModel::guardar($data['nombre'], $data['email'], $data['telefono']);
        echo json_encode(["success" => $exito, "message" => "Procesado correctamente"]);
    } else {
        echo json_encode(["success" => false, "message" => "Faltan datos en el JSON"]);
    }
}

if ($method === 'GET') {
    // Si entras por GET, simplemente listamos los clientes
    $lista = ClientesModel::listar();
    echo json_encode($lista);
}
?>