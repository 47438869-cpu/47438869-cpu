<?php
require 'config.php';
requiere_login();
include 'inc/politicas_data.php';

$tema = $_GET['tema'] ?? '';
if (!isset($politicas[$tema])) { header('Location: politicas.php'); exit; }
$p = $politicas[$tema];
$etiqueta = $p['ambito'] === 'personal' ? 'Uso interno · Personal y operación' : 'Para clientes';

$titulo = $p['titulo'];
include 'inc/header.php';
?>
<main class="wrap narrow">
  <p><a href="politicas.php">← Políticas de seguridad</a></p>
  <p class="muted small"><?= h($etiqueta) ?></p>
  <h1><?= $p['icono'] ?> <?= h($p['titulo']) ?></h1>
  <div class="card" style="margin-top:16px">
    <?php if (isset($p['texto'])): ?>
      <p class="texto"><?= h($p['texto']) ?></p>
    <?php else: ?>
      <ul>
        <?php foreach ($p['puntos'] as $punto): ?><li><?= h($punto) ?></li><?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
  <p class="cta"><a class="btn alt" href="politicas.php">Ver otras políticas</a></p>
</main>
<?php include 'inc/footer.php'; ?>