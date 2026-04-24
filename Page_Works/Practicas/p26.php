<?php $n = isset($_POST['n']) ? intval($_POST['n']) : 0; ?>
<h2>Práctica 26: Tabla Personalizada</h2>
<form method="POST">
¿Qué tabla quieres?: <input type="number" name="n" required>
<button type="submit">Generar</button>
</form>
<?php if ($n > 0): ?>
<div class="res" style="width:120px;">
<strong>Tabla del <?php echo $n; ?></strong><br>
<?php for($i=1; $i<=10; $i++) { echo "$n x $i = ".($n*$i)."<br>"; } ?>
</div>
<?php endif; ?>
