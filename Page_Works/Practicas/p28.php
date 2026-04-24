<?php
$res = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $c = floatval($_POST['c']);
    $f = ($c * 9/5) + 32;
    $res = number_format($c,0)." Celsius = ".number_format($f,1)." Fahrenheit";
}
?>
<h2>Práctica 28: Conversor de Temperatura</h2>
<form method="POST">
Celsius: <input type="number" name="c" value="25" step="any" required>
<button type="submit">Convertir</button>
</form>
<?php if($res) echo "<div class='res'>$res</div>"; ?>
