<?php
include_once '../Models/Database.php';
include_once '../Controller/PasswordController.php';

// Crear una instancia de la base de datos
$database = new Database();
$db = $database->getConnection();

// Crear una instancia del controlador de contraseñas
$passwordController = new \Controller\PasswordController($db);

// Verificar que se haya enviado una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el correo electrónico del formulario
    $email = $_POST['email'];

    // Llamar al método para enviar el restablecimiento de contraseña
    if ($passwordController->sendPasswordReset($email)) {
        // Mensaje de éxito manejado dentro del controlador
        header("Location: ../Views/reset_password.php?success=1");
    } else {
        // Notificación de error
        header("Location: ../views/error.php?message=Hubo un problema al enviar el enlace de restablecimiento de contraseña. Por favor, asegúrate de que el correo electrónico esté registrado.");
        exit();
    }
}
