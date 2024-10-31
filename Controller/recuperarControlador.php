<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluye el archivo de configuración para la conexión a la base de datos
require_once __DIR__ . '/../Models/Database.php';

// Incluye el modelo de recuperación que maneja la lógica para el proceso de recuperación
require_once __DIR__ . '/../Models/RecuperarModelo.php'; // Incluye el modelo

// Inicia la sesión para gestionar la información del usuario a lo largo de la aplicación
session_start();

// Importa las clases necesarias de PHPMailer para el envío de correos electrónicos
use PHPMailer\PHPMailer\PHPMailer; // Clase principal para el envío de correos
use PHPMailer\PHPMailer\Exception; // Clase de excepción para manejar errores en PHPMailer

// Incluye los archivos necesarios de PHPMailer para su funcionamiento
require_once __DIR__ . '/../PHPmailer/Exception.php'; // Archivo de excepciones de PHPMailer
require_once __DIR__ . '/../PHPmailer/PHPMailer.php'; // Archivo principal de PHPMailer
require_once __DIR__ . '/../PHPmailer/SMTP.php'; // Archivo para el soporte de SMTP en PHPMailer


class RecuperarControlador {
    private $modelo;

    public function __construct() {
        // Instancia del modelo que maneja la lógica de recuperación
        $this->modelo = new RecuperarModelo(); 
    }

    public function enviarEnlace() {
        // Obtiene el correo electrónico enviado desde el formulario
        $correo = $_POST['email'];
    
        // Verifica si el correo está registrado en la base de datos
        $result = $this->modelo->verificarEmail($correo); // Cambiado $email por $correo
        
        if ($result) { // Verificamos si hay resultado
            // Si el correo está registrado, obtiene el ID del usuario
            $user_id = $result['user_id']; // Cambiado 'id' por 'user_id' según tu consulta
            
            // Genera un token único para la recuperación de la contraseña
            $token = bin2hex(random_bytes(16));
            
            // Inserta el token en la base de datos asociado al usuario
            $this->modelo->insertarToken($user_id, $token);
    
            // Envía el correo electrónico con el enlace de recuperación
            $this->enviarCorreo($correo, $token); // Cambiado $email por $correo
        } else {
            // Si el correo no está registrado, muestra un mensaje de alerta
            echo '<script>
                alert("El correo electrónico no está registrado.");
                window.location = "/explore/views/Recuperar_Contrasena.php";
            </script>';
        }
    }
    
    private function enviarCorreo($email, $token) {
        // Crea una nueva instancia de PHPMailer
        $mail = new PHPMailer(true);
        
        // Configura opciones de seguridad para SMTP
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false, // Desactiva la verificación del certificado del servidor
                'verify_peer_name' => false, // Desactiva la verificación del nombre del servidor
                'allow_self_signed' => true // Permite certificados autofirmados
            )
        );
    
        try {
            // Configura el uso de SMTP
            $mail->isSMTP(); // Activa la funcionalidad SMTP
            $mail->Host       = 'smtp.gmail.com'; // Establece el servidor SMTP de Gmail
            $mail->SMTPAuth   = true; // Habilita la autenticación SMTP
            $mail->Username   = 'localexplore13@gmail.com'; // Tu dirección de correo de Gmail
            $mail->Password   = 'ogdy nkvd tdbx fswn'; // Tu contraseña de Gmail (considera usar una contraseña de aplicación)
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Activa el cifrado TLS
            $mail->Port       = 587; // Establece el puerto TCP para la conexión
        
            // Configuración del correo
            $mail->setFrom('localexplore13@gmail.com', 'Sneak~Flow'); // Asegúrate de incluir .com
            $mail->addAddress($email); // Agrega el destinatario (correo del usuario que solicita recuperación)
            $mail->isHTML(true); // Establece que el correo será en formato HTML
            $mail->Subject = 'Instrucciones para Restablecer tu Contraseña'; // Asunto del correo
        
            // Cuerpo del correo en HTML
            $mail->Body    = '
                <div style="font-family: Arial, sans-serif; color: #333;">
                    <h2 style="color: #4CAF50;">Recuperación de Contraseña</h2>
                    <p>Hola,</p>
                    <p>Hemos recibido una solicitud para restablecer tu contraseña. Si no solicitaste este cambio, por favor ignora este correo. De lo contrario, puedes restablecer tu contraseña haciendo clic en el enlace a continuación:</p>
                    <p style="text-align: center;">
                        <a href="http://localhost/explore/views/nueva_contrasena.php?token=' . $token . '" style="background-color: #4CAF50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Restablecer Contraseña</a>
                    </p>
                    <p>Este enlace es válido por 24 horas. Después de este tiempo, deberás solicitar un nuevo enlace de recuperación.</p>
                    <p>Si tienes alguna pregunta o necesitas asistencia, no dudes en contactarnos.</p>
                    <p>Gracias,</p>
                    <p>El equipo de SneakFlow</p>
                    <hr style="border: none; border-top: 1px solid #ddd;">
                    <p style="font-size: 12px; color: #777;">Este es un mensaje automático, por favor no respondas a este correo.</p>
                </div>';                    
    
            // Envía el correo
            $mail->send(); // Intenta enviar el correo
        
            // Mensaje de éxito
            echo '<script>
                alert("El enlace de recuperación ha sido enviado a tu correo electrónico.");
                window.location = "/explore/views/Recuperar_Contrasena.php"; // Redirige al usuario a la página de recuperación
            </script>';
        } catch (Exception $e) {
            // Manejo de errores en caso de que no se envíe el correo
            echo "El correo no pudo ser enviado. Mailer Error: {$mail->ErrorInfo}"; // Muestra un mensaje de error
        }
    }
         

    public function actualizarContrasena() {
        // Obtiene el token y la nueva contraseña del formulario
        $token = $_POST['token'];
        $nueva_contrasena = $_POST['password'];
    
        // Cifra la nueva contraseña usando password_hash
        $nueva_contrasena = password_hash($nueva_contrasena, PASSWORD_DEFAULT);
    
        // Verifica si el token es válido
        $result = $this->modelo->verificarToken($token);
        
        if ($result->num_rows > 0) {
            // Si el token es válido, obtiene el ID del usuario asociado
            $usuario_id = $result->fetch_assoc()['user_id'];
    
            // Actualiza la contraseña del usuario en la base de datos
            $this->modelo->actualizarContrasena($usuario_id, $nueva_contrasena);
    
            // Elimina el token de la base de datos (ya no es necesario)
            $this->modelo->eliminarToken($token);
    
            // Mensaje de éxito y redirección al inicio de sesión
            echo '<script>
                alert("Contraseña actualizada correctamente.");
                window.location = "explore/views/inicio_sesion"; // Redirige al usuario a la página de inicio de sesión
            </script>';
        } else {
            // Si el token no es válido, muestra un mensaje de error
            echo '<script>
                alert("El enlace de recuperación es inválido o ha expirado.");
                window.location = "/explore/views/Recuperar_Contrasena"; // Redirige al usuario a la página de recuperación
            </script>';
        }
    }
}    
?>
