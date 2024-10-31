<?php 
namespace Controller;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php'; // Cargar el autoload de Composer
require_once __DIR__.'/../Models/Database.php';
class PasswordController {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Enviar el correo de restablecimiento de contraseña
    public function sendPasswordReset($email) {
        // Verifica si el correo electrónico está registrado
        $query = "SELECT user_id FROM usuarios WHERE email = :email"; 
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $userId = $stmt->fetchColumn();  // Obtiene el ID del usuario
            $token = bin2hex(random_bytes(50)); // Genera un token seguro
            $expires_at = date("Y-m-d H:i:s", strtotime('+1 hour')); // Token válido por 1 hora

            // Guarda el token en la tabla password_resets
            if ($this->savePasswordResetToken($userId, $token, $expires_at)) {
                // Envía el correo de restablecimiento de contraseña
                return $this->sendResetEmail($email, $token);
            }
        }

        return false; // El correo no está registrado
    }

    // Guardar el token de restablecimiento de contraseña
    private function savePasswordResetToken($userId, $token, $expires_at) {
        $query = "INSERT INTO password_resets (user_id, token, expires_at) VALUES (:user_id, :token, :expires_at)"; 
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':token', $token);
        $stmt->bindParam(':expires_at', $expires_at);
        return $stmt->execute();
    }

    // Enviar el correo con el token
    private function sendResetEmail($email, $token) {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'localexplore13@gmail.com'; 
            $mail->Password = 'ogdy nkvd tdbx fswn';        
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('localexplore13@gmail.com', 'LocalExplore');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Restablecer contraseña';
            $mail->Body = "Haz clic en este enlace para restablecer tu contraseña: <a href='http://tu_dominio/reset_password.php?token=$token'>Restablecer contraseña</a>";
            $mail->AltBody = "Haz clic en este enlace para restablecer tu contraseña: http://tu_dominio/reset_password.php?token=$token";

            $mail->send();
            return true;
        } catch (Exception $e) {
            echo "Error al enviar el correo: {$mail->ErrorInfo}";
            return false;
        }
    }
}
