<?php require_once '../../config.php';
if (isset($_GET['aprobar'])) {
    $id = $_GET['aprobar'];
    $conn->query("UPDATE prestamos SET estado = 'aprobado' WHERE id = $id");
}
$solicitudes = $conn->query("SELECT p.*, u.nombre as user, e.nombre as equipo FROM prestamos p JOIN usuarios u ON p.usuario_id = u.id JOIN equipos e ON p.equipo_id = e.id WHERE p.estado = 'pendiente'");
?>
<h2>Solicitudes Pendientes</h2>
<?php while($p = $solicitudes->fetch_assoc()): ?>
    <p><?= $p['user'] ?> pidió <?= $p['equipo'] ?> 
    <a href="?aprobar=<?= $p['id'] ?>">Aprobar</a></p>
<?php endwhile; ?>
