<?php
$res = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = trim($_POST['nom']); $ape = trim($_POST['ape']);
    $user = strtolower($nom . $ape);
    $ini = strtoupper($nom[0] . $ape[0]);
    $res = "Nombre de usuario: $user<br>Iniciales: $ini";
}
?>
<h2>Práctica 30: Generador de Usuario</h2>
<form method="POST">
<input type="text" name="nom" placeholder="Nombre (ej. Juan)" required><br>
<input type="text" name="ape" placeholder="Apellido (ej. Lopez)" required><br><br>
<button type="submit">Generar Datos</button>
</form>
<?php if($res) echo "<div class='res'>$res</div>"; ?>
