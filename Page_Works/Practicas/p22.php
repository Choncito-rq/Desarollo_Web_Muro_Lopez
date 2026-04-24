<?php
$res = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = floatval($_POST['a']); $b = floatval($_POST['b']); $c = floatval($_POST['c']);
    if ($a == 0) { $res = "El valor de 'a' no puede ser 0."; }
    else {
        $dis = ($b ** 2) - (4 * $a * $c);
        if ($dis < 0) { $res = "No tiene solución real."; }
        else {
            $x1 = (-$b + sqrt($dis)) / (2 * $a);
            $x2 = (-$b - sqrt($dis)) / (2 * $a);
            $res = "Discriminante: $dis <br> x1 = $x1 <br> x2 = $x2";
        }
    }
}
?>
<h2>Práctica 22: Fórmula General</h2>
<form method="POST">
a: <input type="number" name="a" required>
b: <input type="number" name="b" required>
c: <input type="number" name="c" required><br><br>
<button type="submit">Calcular x1 y x2</button>
</form>
<?php if($res) echo "<div class='res'>$res</div>"; ?>
