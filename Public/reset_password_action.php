<?php
include_once '../Models/Database.php';
include_once '../Models/userpasModel.php';

// Crear una instancia de la base de datos
$database = new Database();
$db = $database->getConnection();

// Crear una instancia del modelo de usuario
$userModel = new userpasModel($db);

// Verificar que se haya enviado una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el token y la nueva contraseña
    $token = $_POST['token'] ?? null;
    $newPassword = $_POST['new_password'] ?? null;

    if ($token && $newPassword) {
        $newPassword = password_hash($newPassword, PASSWORD_BCRYPT); // Hashear la nueva contraseña

        // Obtener el correo del usuario a partir del token
        $email = $userModel->getEmailByToken($token);

        if ($email) {
            // Intentar actualizar la contraseña del usuario
            if ($userModel->updatePasswordByEmail($email, $newPassword)) {
                // Eliminar el token después de usarlo
                $userModel->deletePasswordResetToken($email);
                echo "La contraseña se ha cambiado con éxito.";
            } else {
                echo "Error al cambiar la contraseña. Por favor, verifica que el usuario exista.";
            }
        } else {
            echo "Token no válido o ha expirado.";
        }
    } else {
        echo "Por favor, proporciona el token y la nueva contraseña.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
