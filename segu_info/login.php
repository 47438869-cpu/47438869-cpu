<?php
require 'config.php';

if (!empty($_SESSION['ingreso'])) { header('Location: helados.php'); exit; }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_regenerate_id(true);
    $_SESSION['ingreso'] = true;
    header('Location: helados.php');
    exit;
}

$titulo = 'Bienvenido';
include 'inc/header.php';
?>
<main class="login">
  <form method="post" class="card form">
    <div class="ic" aria-hidden="true">🍦</div>
    <h1>Helados Jujuy</h1>
    <p class="muted">Helados artesanales. Tocá el botón para ver nuestras variedades.</p>
    <button class="btn" type="submit">Ingresar</button>
  </form>
</main>
<?php include 'inc/footer.php'; ?>