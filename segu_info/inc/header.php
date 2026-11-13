<?php /* Uso: $titulo = '...'; include 'inc/header.php'; */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= h($titulo ?? 'Helados Jujuy') ?> Helados Jujuy</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <div class="wrap bar">
    <a class="logo" href="helados.php">🍦 Helados Jujuy</a>
    <?php if (!empty($_SESSION['ingreso'])): ?>
    <nav>
      <a href="helados.php">Helados</a>
      <a href="politicas.php">Políticas de seguridad</a>
      <a class="salir" href="logout.php">Salir</a>
    </nav>
    <?php endif; ?>
  </div>
</header>