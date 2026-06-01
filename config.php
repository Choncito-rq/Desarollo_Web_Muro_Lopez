<?php
// Lee las variables de entorno de Render
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db   = getenv('DB_NAME');

// Si alguna variable está vacía, mostrar error para depurar
if (!$host || !$user || !$pass || !$db) {
    die("Error: Variables de entorno no configuradas correctamente.");
}

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
