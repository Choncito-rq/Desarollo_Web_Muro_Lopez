<?php
// Lógica para validación de voto
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizamos la entrada de texto y convertimos la edad a entero
    $nombre = isset($_POST['nombre']) ? htmlspecialchars(trim($_POST['nombre'])) : "";
    $edad = isset($_POST['edad']) ? intval($_POST['edad']) : 0;

    if ($nombre != "") {
        if ($edad >= 18) {
            $resultado = "$nombre puede votar., ya que $nombre tiene $edad años.";
        } else {
            $resultado = "$nombre no puede votar., ya que $nombre tiene $edad años.";
        }
    }
}
?>

<h2>Práctica 31: Validación de Derecho al Voto</h2>
<p>Sean Muro Lopez - 301 - Ingenieria en Software</p>

<div style="background: white; padding: 20px; border: 1px solid #ccc; border-radius: 8px; max-width: 450px;">
<form method="POST">
<label>Nombre:</label><br>
<input type="text" name="nombre" value="María" required
style="width: 250px; padding: 5px; margin: 10px 0; border: 2px solid black;">
<br>
<label>Edad:</label><br>
<input type="number" name="edad" value="25" required
style="width: 100px; padding: 5px; margin: 10px 0; border: 2px solid black;">
<br>
<button type="submit" style="background: #2d3748; color: white; padding: 8px 15px; cursor: pointer; border: none; border-radius: 4px;">
Verificar Estatus
</button>
</form>

<?php if ($resultado !== ""): ?>
<div class="res" style="margin-top: 20px; padding: 15px; background: #f0fff4; border-left: 4px solid #48bb78; color: #22543d;">
<?php echo $resultado; ?>
</div>
<?php endif; ?>
</div>
