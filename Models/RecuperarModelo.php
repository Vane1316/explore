<?php

require_once __DIR__ . '/../Models/Database.php';

class RecuperarModelo {
    private $db;

    // Constructor que inicializa la conexión a la base de datos
    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    // Verifica si el correo existe en la base de datos
// Verifica si el email existe en la base de datos
public function verificarEmail($email) {
    $stmt = $this->db->prepare("SELECT user_id FROM usuarios WHERE email = :email");
    $stmt->bindParam(':email', $email, PDO::PARAM_STR); // Asegúrate de que el nombre del parámetro coincida aquí
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC); // Retorna el resultado de la consulta como un arreglo asociativo
}


    // Inserta un nuevo token de recuperación en la tabla 'password_resets'
    public function insertarToken($usuario_id, $token) {
        $stmt = $this->db->prepare("INSERT INTO password_resets (user_id, token) VALUES (:usuario_id, :token)");
        $stmt->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);
        $stmt->bindParam(':token', $token, PDO::PARAM_STR);
        return $stmt->execute(); // Retorna verdadero si la inserción fue exitosa
    }

    // Verifica si el token es válido y no ha expirado (menos de 24 horas)
    public function verificarToken($token) {
        $stmt = $this->db->prepare("SELECT user_id FROM password_resets WHERE token = :token AND NOW() < DATE_ADD(created_at, INTERVAL 24 HOUR)");
        $stmt->bindParam(':token', $token, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); // Retorna el resultado de la verificación del token como un arreglo asociativo
    }

    // Actualiza la contraseña del usuario utilizando un nuevo valor
    public function actualizarContrasena($usuario_id, $nueva_contrasena) {
        // Hashear la nueva contraseña antes de almacenarla
        $nueva_contrasena = password_hash($nueva_contrasena, PASSWORD_BCRYPT);
        
        $stmt = $this->db->prepare("UPDATE usuarios SET password = :nueva_contrasena WHERE user_id = :user_id ");
        $stmt->bindParam(':nueva_contrasena', $nueva_contrasena, PDO::PARAM_STR);
        $stmt->bindParam(':user_id ', $usuario_id, PDO::PARAM_INT);
        return $stmt->execute(); // Retorna verdadero si la actualización fue exitosa
    }

    // Elimina el token de recuperación de la base de datos
    public function eliminarToken($token) {
        $stmt = $this->db->prepare("DELETE FROM password_resets WHERE token = :token");
        $stmt->bindParam(':token', $token, PDO::PARAM_STR);
        return $stmt->execute(); // Retorna verdadero si la eliminación fue exitosa
    }
}
?>
