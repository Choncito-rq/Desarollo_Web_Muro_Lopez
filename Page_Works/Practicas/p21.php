<?php
$res = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = isset($_POST['a']) ? floatval($_POST['a']) : 0;
    $b = isset($_POST['b']) ? floatval($_POST['b']) : 0;
    $op = $_POST['op'];
    switch ($op) {
        case '+': $res = "Suma: $a + $b = " . ($a + $b); break;
        case '-': $res = "Resta: $a - $b = " . ($a - $b); break;
        case '/': $res = ($b != 0) ? "División: $a / $b = " . ($a / $b) : "Error: Div por 0"; break;
        case '**': $res = "Exponenciación: $a ** $b = " . ($a ** $b); break;
    }
}
?>
<h2>Práctica 21: Operaciones Aritméticas</h2>
<p>Sean Muro Lopez - 301</p>
<form method="POST">
<input type="number" name="a" value="10"> <input type="number" name="b" value="2"><br><br>
<button name="op" value="+">Suma</button>
<button name="op" value="-">Resta</button>
<button name="op" value="/">División</button>
<button name="op" value="**">Exponenciación</button>
</form>
<?php if($res) echo "<div class='res'>$res</div>"; ?>
