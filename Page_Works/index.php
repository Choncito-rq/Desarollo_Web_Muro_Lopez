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
    // Se añade la 32 al arreglo
    $practicas = [21, 22, 23, 24, 25, 26, 28, 29, 30, 31, 32];
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
        // Usamos __DIR__ para que PHP busque la carpeta Practicas 
        // siempre en el mismo nivel donde esté este index.php
        $archivo = __DIR__ . "/Practicas/p$p.php";
        
        if (file_exists($archivo)) { 
            include($archivo); 
        } else { 
            echo "<div class='res'>Error: El archivo <b>p$p.php</b> no existe en la carpeta <b>Practicas/</b>.</div>"; 
        }
    } else {
        echo "<h1>Bienvenido</h1><p>Selecciona una práctica del menú para ejecutarla.</p>";
    }
    ?>
    </div>
</main>
</body>
</html>
