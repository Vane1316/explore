<?php
// Recuperar.php

require_once __DIR__ . '/../Controller/RecuperarControlador.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recuperar'])) {
    $controlador = new RecuperarControlador();
    $controlador->enviarEnlace();
}
?>
