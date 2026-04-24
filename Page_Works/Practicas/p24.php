<?php
date_default_timezone_set('America/Mazatlan');
$dias = ["domingo","lunes","martes","miércoles","jueves","viernes","sábado"];
$meses = ["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
$hoy = $dias[date('w')] . " " . date('d') . " de " . $meses[date('n')-1] . " del " . date('Y');
?>
<h2>Práctica 24: Fecha Actual</h2>
<p>La fecha de hoy es:</p>
<div class="res" style="background: white; border: 2px solid black;"><?php echo "Hoy es $hoy"; ?></div>
