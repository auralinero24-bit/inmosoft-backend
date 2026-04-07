<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "inmosoft"; // Asegúrate de que este sea el nombre de tu BD

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die(json_encode(["error" => "Conexión fallida: " . $conn->connect_error]));
}
?>