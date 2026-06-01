<?php
$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db   = getenv('DB_NAME');

// Depuración: esto nos dirá qué está vacío
if (empty($host) || empty($user) || empty($pass) || empty($db)) {
    echo "Falta configurar: ";
    if (empty($host)) echo "DB_HOST ";
    if (empty($user)) echo "DB_USER ";
    if (empty($pass)) echo "DB_PASS ";
    if (empty($db)) echo "DB_NAME ";
    die(); // Detenemos aquí para ver el mensaje
}

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
