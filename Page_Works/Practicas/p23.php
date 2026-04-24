<?php
$res = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $p = floatval($_POST['peso']); $h = floatval($_POST['altura']);
    if ($h > 0) {
        $imc = $p / ($h ** 2);
        $res = "Tu IMC es: " . number_format($imc, 2);
    }
}
?>
<h2>Práctica 23: Calculadora de IMC</h2>
<form method="POST">
Peso (kg): <input type="number" name="peso" step="0.1" required><br>
Altura (m): <input type="number" name="altura" step="0.01" required><br><br>
<button type="submit">Calcular IMC</button>
</form>
<?php if($res) echo "<div class='res'>$res</div>"; ?>
