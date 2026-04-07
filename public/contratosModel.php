<?php
include_once __DIR__ . '/db.php';

class ContratosModel {
    public static function crear($id_cliente, $id_propiedad, $fecha, $total) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO contratos (id_cliente, id_propiedad, fecha, total) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iisd", $id_cliente, $id_propiedad, $fecha, $total);
        return $stmt->execute();
    }

    public static function listar() {
        global $conn;
        $result = $conn->query("SELECT id_contrato, id_cliente, id_propiedad, fecha, total FROM contratos");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>