<?php
include_once __DIR__ . '/contratosModel.php';

// Maneja la creación de un nuevo contrato (POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    // Vincula el cliente con la propiedad
    $ok = ContratosModel::crear($data['id_cliente'], $data['id_propiedad'], $data['fecha'], $data['total']);
    echo json_encode(["success" => $ok]);
}

// Maneja el listado de contratos (GET)
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $contratos = ContratosModel::listar();
    echo json_encode($contratos);
}
?>