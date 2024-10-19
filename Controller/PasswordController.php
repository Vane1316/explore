<?php
include_once '../Models/UserModel.php';

class PasswordController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function sendPasswordReset($email) {
        // Obtén el usuario por email
        $user = $this->userModel->getUserByEmail($email);

        // Verificamos si el usuario existe antes de intentar acceder al id
        if ($user && isset($user['id'])) {
            $token = bin2hex(random_bytes(50)); // Genera un token único
            $this->userModel->savePasswordResetToken($user['id'], $token);

            $resetLink = "http://yourdomain.com/public/reset_password.php?token=$token";
            $subject = "Recuperación de contraseña";
            $message = "Haga clic en el siguiente enlace para restablecer su contraseña: $resetLink";
            $headers = "From: no-reply@yourdomain.com";

            mail($email, $subject, $message, $headers);
            echo "Se ha enviado un enlace de recuperación a su correo electrónico.";
        } else {
            // Si el usuario no existe, muestra un mensaje de error
            echo "<script>alert('No se encontró una cuenta con ese correo electrónico.');</script>";
        }
    }

    public function resetPassword($token, $newPassword) {
        // Obtén el id del usuario a partir del token
        $userId = $this->userModel->getUserIdByToken($token);

        // Si encontramos un usuario con ese token
        if ($userId) {
            $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
            $this->userModel->updatePassword($userId, $hashedPassword);
            $this->userModel->deletePasswordResetToken($userId);
            echo "Su contraseña ha sido actualizada exitosamente.";
        } else {
            echo "<script>alert('El enlace de restablecimiento de contraseña no es válido o ha expirado.');</script>";
        }
    }
}
