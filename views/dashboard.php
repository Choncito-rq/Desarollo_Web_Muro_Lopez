<?php require_once 'config.php';
if (!isset($_SESSION['user_id'])) header("Location: /login");

echo "<h1>Bienvenido</h1>";
if ($_SESSION['rol'] == 'admin') {
    echo '<a href="/admin/prestamos">Gestionar Préstamos</a><br>';
    echo '<a href="/admin/equipos">CRUD Equipos</a><br>';
    echo '<a href="/admin/usuarios">CRUD Usuarios</a><br>';
    echo '<a href="/admin/carreras">CRUD Carreras</a><br>';
    echo '<a href="/admin/facultades">CRUD Facultades</a><br>';
    echo '<a href="/admin/reportes">Ver Reportes</a>';
} else {
    echo '<a href="/solicitar">Solicitar Equipo</a><br>';
    echo '<a href="/mis-prestamos">Mis Préstamos</a>';
}
?>
