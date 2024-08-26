<?php
// Configuración de la base de datos
$servername = "localhost"; // Cambia esto si tu servidor MySQL está en otra ubicación
$username = "root"; // Reemplaza con tu usuario de MySQL
$password = ""; // Reemplaza con tu contraseña de MySQL
$dbname = "gc_inmobiliaria";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $apellido = $conn->real_escape_string($_POST['apellido']);
    $email = $conn->real_escape_string($_POST['email']);
    $numero = $conn->real_escape_string($_POST['numero']);

    $sql = "INSERT INTO contactos (nombre, apellido, email, numero)
            VALUES ('$nombre', '$apellido', '$email', '$numero')";

if ($conn->query($sql) === TRUE) {
    // Redirigir a la página de agradecimiento si el registro se crea exitosamente
    header("Location: gracias.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

// Cerrar la conexión
$conn->close();
?>
