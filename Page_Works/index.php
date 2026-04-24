<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Laboratorio PHP - Sean Muro</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<nav>
<h3>MENÚ PRÁCTICAS</h3>
<?php
$practicas = [21, 22, 23, 24, 25, 26, 28, 29, 30, 31];
foreach ($practicas as $i) {
    $active = (isset($_GET['p']) && $_GET['p'] == $i) ? 'class="active"' : '';
    echo "<a href='?p=$i' $active>Práctica $i</a>";
}
?>
</nav>
<main>
<div class="card">
<?php
$p = isset($_GET['p']) ? intval($_GET['p']) : 0;
if (in_array($p, $practicas)) {
    $archivo = "Practicas/p$p.php";
    if (file_exists($archivo)) { include($archivo); }
    else { echo "Archivo p$p.php no encontrado."; }
} else {
    echo "<h1>Bienvenido</h1><p>Selecciona una práctica del menú.</p>";
}
?>
</div>
</main>
</body>
</html>
