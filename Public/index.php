<?php
require_once __DIR__ . "/../Libreria/AutoCargador.php";  // Asegúrate de que la letra "A" esté mayúscula
require_once __DIR__ . "/../Rutas/RutasWeb.php";

// Ejecuta el enrutador para manejar la solicitud actual
Libreria\Enrutador::obtenerRuta();
