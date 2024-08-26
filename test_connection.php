<?php
$servername = "localhost";
$username = "root"; // Usuario que estés probando
$password = ""; // Contraseña que estés probando
$dbname = "gc_inmobiliaria";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
$conn->close();
?>
