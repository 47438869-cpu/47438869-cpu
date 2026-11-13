<?php
require 'config.php';
requiere_login();
include 'inc/politicas_data.php';

$titulo = 'Políticas de seguridad';
include 'inc/header.php';
?>
<main class="wrap">
  <h1>Políticas de seguridad</h1>
  <p class="muted">Elegí un tema para ver el detalle.</p>

  <h2 class="seccion">Políticas de Seguridad – Ámbito Externo (Clientes y Visitantes)</h2>
  <div class="aviso"><p><?= h($intro_clientes) ?></p></div>
  <div class="grid">
    <?php foreach ($politicas as $clave => $p) if ($p['ambito'] === 'clientes') tarjeta_politica($clave, $p); ?>
  </div>

  <h2 class="seccion">Políticas de Seguridad de la Información – Ámbito Interno (Personal y Operación)</h2>
  <div class="aviso"><p><?= h($intro_personal) ?></p></div>
  <div class="grid">
    <?php foreach ($politicas as $clave => $p) if ($p['ambito'] === 'personal') tarjeta_politica($clave, $p); ?>
  </div>

  <p class="cta"><a class="btn alt" href="helados.php">Volver a los helados</a></p>
</main>
<?php include 'inc/footer.php'; ?>