<?php
require 'config.php';
requiere_login();
include 'inc/helados_data.php';

$titulo = 'Helados';
include 'inc/header.php';
?>
<main class="wrap">
  <h1>Nuestros helados</h1>
  <p class="muted">Elaboración artesanal cada mañana.</p>
  <div class="grid">
    <?php foreach ($helados as [$nombre, $desc, $color, $precio]): ?>
      <div class="card">
        <div class="scoop" style="background:<?= h($color) ?>"></div>
        <h2><?= h($nombre) ?></h2>
        <p class="muted"><?= h($desc) ?></p>
        <p class="precio">$<?= number_format($precio, 0, ',', '.') ?></p>
      </div>
    <?php endforeach; ?>
  </div>
  <p class="cta"><a class="btn" href="politicas.php">Políticas de seguridad</a></p>
</main>
<?php include 'inc/footer.php'; ?>