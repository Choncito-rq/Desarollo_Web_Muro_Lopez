<?php require_once '../config.php';
$sql = "SELECT p.*, u.nombre as usuario, e.nombre as equipo 
        FROM prestamos p 
        JOIN usuarios u ON p.usuario_id = u.id 
        JOIN equipos e ON p.equipo_id = e.id";
$reportes = $conn->query($sql);
?>
<table>
    <tr><th>Usuario</th><th>Equipo</th><th>Fecha</th><th>Estado</th></tr>
    <?php while($row = $reportes->fetch_assoc()): ?>
        <tr>
            <td><?=$row['usuario']?></td>
            <td><?=$row['equipo']?></td>
            <td><?=$row['fecha_solicitud']?></td>
            <td><?=$row['estado']?></td>
        </tr>
    <?php endwhile; ?>
</table>
