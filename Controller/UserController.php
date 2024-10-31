<?php
include_once '../Models/UserModel.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    // Método para registrar un nuevo usuario
    public function register($username, $email, $password, $role) {
        // Validar que los campos no estén vacíos
        if (empty($username) || empty($email) || empty($password) || empty($role)) {
            echo "<script>
                    alert('Todos los campos son obligatorios.');
                    window.history.back();
                  </script>";
            return;
        }

        // Verifica si el rol es válido
        if ($role !== 'empresa' && $role !== 'usuario') {
            echo "<script>
                    alert('Rol no válido. Debe ser empresa o usuario.');
                    window.history.back();
                  </script>";
            return;
        }

        // Comprobar si el usuario ya está registrado por su email
        $user = $this->userModel->getUserByEmail($email);

        if ($user) {
            // Si el usuario ya existe, mostrar alerta y redirigir
            echo "<script>
                    alert('Usuario ya registrado. Redirigiendo a inicio de sesión.');
                    window.location.href = '../Views/inicio_sesion.php';
                  </script>";
            return;
        }

        // Si el usuario no está registrado, proceder a registrarlo
        $hashed_password = password_hash($password, PASSWORD_BCRYPT); // Hashear la contraseña
        $this->userModel->createUser($username, $email, $hashed_password, $role);

        // Mostrar mensaje de éxito y redirigir a inicio de sesión
        echo "<script>
                alert('Usuario registrado con éxito. Redirigiendo a inicio de sesión.');
                window.location.href = '../Views/inicio_sesion.php';
              </script>";
    }
}




