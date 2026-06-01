<?php
// Sustituye con tus datos reales de InfinityFree
$host = "sql211.infinityfree.com"; 
$user = "if0_42065518";
$pass = "TU_CONTRASEÑA_DE_CPANEL"; // La contraseña que pusiste al crear la cuenta
$db   = "if0_42065518_sistema_prestamos";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
