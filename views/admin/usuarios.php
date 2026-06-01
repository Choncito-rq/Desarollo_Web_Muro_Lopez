<?php require_once '../../config.php';
$usuarios = $conn->query("SELECT * FROM usuarios");
?>
<h2>Usuarios registrados</h2>
<table border="1">
    <?php while($u = $usuarios->fetch_assoc()): ?>
        <tr><td><?= $u['nombre'] ?></td><td><?= $u['email'] ?></td><td><?= $u['rol'] ?></td></tr>
    <?php endwhile; ?>
</table>
