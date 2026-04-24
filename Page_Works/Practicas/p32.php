<?php
// Lógica de calificación por letra
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $puntuacion = isset($_POST['puntuacion']) ? intval($_POST['puntuacion']) : 0;
    $letra = "";

    // Implementación obligatoria con if, elseif, else
    if ($puntuacion >= 90) {
        $letra = "A";
    } elseif ($puntuacion >= 80) {
        $letra = "B";
    } elseif ($puntuacion >= 70) {
        $letra = "C";
    } elseif ($puntuacion >= 60) {
        $letra = "D";
    } else {
        $letra = "F";
    }

    $resultado = "La calificación es <strong>$letra</strong> ya que $puntuacion está en el rango correspondiente.";
}
?>

<h2>Práctica 32: Convertidor de Puntuación a Letra</h2>
<p>Sean Muro Lopez - 301 - Ingenieria en Software</p>

<div style="background: white; padding: 20px; border: 1px solid #ccc; border-radius: 8px; max-width: 450px;">
<form method="POST">
<label>Introduce la puntuación (0-100):</label><br>
<input type="number" name="puntuacion" min="0" max="100" value="85" required
style="width: 120px; padding: 5px; margin: 10px 0; border: 2px solid black;">
<br>
<button type="submit" style="background: #2d3748; color: white; padding: 8px 15px; cursor: pointer; border: none; border-radius: 4px;">
Obtener Calificación
</button>
</form>

<?php if ($resultado !== ""): ?>
<div class="res" style="margin-top: 20px; padding: 15px; background: #fffaf0; border-left: 4px solid #ed8936; color: #7b341e;">
<?php echo $resultado; ?>
</div>
<?php endif; ?>
</div>
