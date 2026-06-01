<?php require_once 'config.php';
if ($_SESSION['rol'] !== 'admin') die("Acceso denegado");

// Lógica de creación
if (isset($_POST['guardar'])) {
    $nom = $_POST['nombre'];
    $conn->query("INSERT INTO equipos (nombre) VALUES ('$nom')");
}
?>
<h2>Gestión de Equipos</h2>
<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre del equipo" required>
    <button type="submit" name="guardar">Registrar</button>
</form>
