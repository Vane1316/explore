<?php
class userpasModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }
    public function updatePasswordByEmail($email, $newPassword) {
        $query = "UPDATE usuarios SET password = :password WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':password', $newPassword);
        $stmt->bindParam(':email', $email);
        return $stmt->execute();
    }

    public function deletePasswordResetToken($email) {
        // Elimina el token de restablecimiento
        $query = "DELETE FROM password_resets WHERE user_id = (SELECT user_id FROM usuarios WHERE email = :email)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email);
        return $stmt->execute();
    }
    public function getEmailByToken($token) {
        // Verifica que el token no haya expirado
        $query = "SELECT user_id FROM password_resets WHERE token = :token AND expires_at > NOW()"; 
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':token', $token);
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            $userId = $stmt->fetchColumn(); // Obtener el user_id
    
            // Obtener el email del usuario utilizando el user_id
            $queryEmail = "SELECT email FROM usuarios WHERE user_id = :user_id";
            $stmtEmail = $this->db->prepare($queryEmail);
            $stmtEmail->bindParam(':user_id', $userId);
            $stmtEmail->execute();
    
            if ($stmtEmail->rowCount() > 0) {
                $rowEmail = $stmtEmail->fetch(PDO::FETCH_ASSOC);
                return $rowEmail['email'];
            }
        }
        return null; // Token no válido o ha expirado
    }
    
}
