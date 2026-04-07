<?php
// Incluimos la conexión a la base de datos
include_once 'db.php';

class ClientesModel {
    // Función para insertar en la base de datos
    public static function guardar($nombre, $email, $telefono) {
        global $conn; // Variable de conexión de db.php
        
        $query = "INSERT INTO clientes (nombre, email, telefono) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        
        // "sss" indica que los 3 campos son texto (strings)
        $stmt->bind_param("sss", $nombre, $email, $telefono);
        
        return $stmt->execute();
    }

    // Función para traer todos los clientes
    public static function listar() {
        global $conn;
        $result = $conn->query("SELECT * FROM clientes");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>