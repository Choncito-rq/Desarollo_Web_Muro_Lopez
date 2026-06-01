<?php
$host = "sql211.infinityfree.com"; 
$user = "if0_42065518";
$pass = "Choncito2323"; 
$db   = "if0_42065518_sistema_prestamos";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
