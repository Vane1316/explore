<?php
if (isset($_GET['token'])) {
    $token = $_GET['token'];
} else {
    $token = null; // En caso de que no se le pase ningun token 
    echo '<script>
        alert("El enlace de recuperación es inválido o ha expirado.");
        window.location = "../Views/recuperar_contrasena.php";
    </script>';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva Contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
     <!-- Header -->
     <nav class="navbar navbar-expand-lg navbar-light shadow"> <!-- Barra de navegación -->
        <div class="container d-flex justify-content-between align-items-center"> <!-- Contenedor flex para alinear elementos -->
            <a class="navbar-brand text-success logo h1 align-self-center d-flex align-items-center" href="index.php"> <!-- Logo de la marca -->
                <img src="../public/img/LogoLocalExplore.png" alt="Logo" class="logo-img"> <!-- Imagen del logo -->
                <span class="ml-2">ExploreLocal</span> <!-- Nombre de la marca -->
            </a>

            <!-- Botón para colapsar la navbar en pantallas pequeñas -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> <!-- Icono del botón de colapso -->
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav"> <!-- Navegación colapsable -->
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto"> <!-- Lista de navegación -->
                    
                        <li class="nav-item">
                            <a class="nav-link font-bold" style="font-family: 'Arial Black'; font-size: 29px;" href="../Views/admin.php">INICIO ADMINISTRADOR</a> <!-- Enlace a la página de usuario -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-bold" style="font-family: 'Arial Black'; font-size: 29px;" href="../Views/localadmi.php">LOCALES</a> <!-- Enlace a la página de locales -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-bold" style="font-family: 'Arial Black'; font-size: 29px;" href="../Views/about.php">PLANES</a> <!-- Enlace a la página de locales -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-bold" style="font-family: 'Arial Black'; font-size: 29px;" href="../Views/contactadmi.php">CONTACTOS</a> <!-- Enlace a la página de contactos -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-bold" style="font-family: 'Arial Black'; font-size: 29px;" href="../Views/subidanegocio.php">SUBIR NEGOCIOS</a> <!-- Enlace a la página de locales -->
                        </li>
                     

                    </ul>
                </div>
            </div>

        
        </div>
         
<!-- Contenido adicional del menú -->
<div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
    <div class="auth flex items-center w-full md:w-full">
            <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="../public/logout_action.php">Cerrar sesión</a>
    </nav>
    

<!-- Cerrar Header -->

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-6">Nueva Contraseña</h2>
        <form action="../Controllers/RecuperarControlador.php" method="POST">
            <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Nueva Contraseña</label>
                <input type="password" id="password" name="password" required class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Ingrese su nueva contraseña">
            </div>
            <button type="submit" name="actualizar" class="w-full bg-green-500 text-white p-2 rounded-lg font-bold hover:bg-green-600 transition duration-300">Actualizar Contraseña</button>
        </form>
    </div>
</body>
</html>
