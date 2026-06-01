<?php require_once '../../config.php';
if ($_SESSION['rol'] !== 'admin') die("Acceso denegado");

if (isset($_POST['guardar'])) {
    $nombre = $_POST['nombre'];
    $conn->query("INSERT INTO facultades (nombre) VALUES ('$nombre')");
}
$facultades = $conn->query("SELECT * FROM facultades");
?>
<h2>Facultades</h2>
<form method="POST"><input type="text" name="nombre" placeholder="Nombre" required><button type="submit" name="guardar">Registrar</button></form>
<ul>
    <?php while($f = $facultades->fetch_assoc()): ?>
        <li><?= $f['nombre'] ?></li>
    <?php endwhile; ?>
</ul>
