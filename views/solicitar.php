<?php require_once 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $equipo_id = $_POST['equipo_id'];
    $usuario_id = $_SESSION['user_id'];
    $conn->query("INSERT INTO prestamos (usuario_id, equipo_id, estado) VALUES ($usuario_id, $equipo_id, 'pendiente')");
    echo "Solicitud enviada.";
}
$equipos = $conn->query("SELECT * FROM equipos WHERE estado = 'disponible'");
?>
<form method="POST">
    <select name="equipo_id">
        <?php while($e = $equipos->fetch_assoc()) echo "<option value='{$e['id']}'>{$e['nombre']}</option>"; ?>
    </select>
    <button type="submit">Solicitar</button>
</form>
