<?php
session_start();

function h($t) { return htmlspecialchars($t, ENT_QUOTES, 'UTF-8'); }

// Llamar al inicio de cada página privada
function requiere_login() {
    if (empty($_SESSION['ingreso'])) {
        header('Location: login.php');
        exit;
    }
}