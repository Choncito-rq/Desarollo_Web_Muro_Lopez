<h2>Práctica 25: Tablas del 1 al 10</h2>
<form method="POST"><button name="gen">Generar todas las tablas</button></form>
<div style="margin-top:20px;">
<?php
if (isset($_POST['gen'])) {
    for ($i = 1; $i <= 10; $i++) {
        echo "<div style='display:inline-block; border:1px solid; margin:5px; padding:10px; background:white;'>";
        echo "<strong>Tabla del $i</strong><br>";
        for ($j = 1; $j <= 10; $j++) { echo "$i x $j = ".($i*$j)."<br>"; }
        echo "</div>";
    }
}
?>
</div>
