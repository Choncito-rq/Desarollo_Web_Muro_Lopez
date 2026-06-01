<?php require_once '../../config.php';
if (isset($_POST['guardar'])) {
    $nombre = $_POST['nombre'];
    $facultad_id = $_POST['facultad_id'];
    $conn->query("INSERT INTO carreras (nombre, facultad_id) VALUES ('$nombre', $facultad_id)");
}
$carreras = $conn->query("SELECT c.*, f.nombre as facultad FROM carreras c JOIN facultades f ON c.facultad_id = f.id");
?>
<h2>Carreras</h2>
<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre Carrera" required>
    <select name="facultad_id">
        <?php $f_list = $conn->query("SELECT * FROM facultades"); 
        while($f = $f_list->fetch_assoc()) echo "<option value='{$f['id']}'>{$f['nombre']}</option>"; ?>
    </select>
    <button type="submit" name="guardar">Registrar</button>
</form>
