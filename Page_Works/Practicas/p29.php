<?php
// Lógica para determinar Par o Impar
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = isset($_POST['numero']) ? intval($_POST['numero']) : 0;

    // El operador % obtiene el residuo de la división
    if ($numero % 2 == 0) {
        $resultado = "<strong>Par</strong> ya que $numero dividido entre 2 tiene un resto de 0, por lo que es par.";
    } else {
        $resultado = "<strong>Impar</strong> ya que $numero dividido entre 2 tiene un resto de 1, por lo que es impar.";
    }
}
?>

<h2>Práctica 29: Número Par o Impar</h2>
<p>Sean Muro Lopez - 301 - Ingenieria en Software</p>

<div style="background: white; padding: 20px; border: 1px solid #ccc; border-radius: 8px; max-width: 450px;">
<form method="POST">
<label>Ingresa un número:</label><br>
<input type="number" name="numero" value="7" required
style="width: 100px; padding: 5px; margin: 10px 0; border: 2px solid black;">
<br>
<button type="submit" style="background: #2d3748; color: white; padding: 8px 15px; cursor: pointer; border: none; border-radius: 4px;">
Verificar
</button>
</form>

<?php if ($resultado !== ""): ?>
<div class="res" style="margin-top: 20px; padding: 15px; background: #fff5f5; border-left: 4px solid #f56565;">
<?php echo $resultado; ?>
</div>
<?php endif; ?>
</div>
