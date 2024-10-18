<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro</title>
    <meta charset="utf-8"> <!-- Conjunto de caracteres UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Configuración de vista para dispositivos móviles -->

    <link rel="apple-touch-icon" href="../public/img/LogoLocalExplore.png"> <!-- Icono para dispositivos Apple -->
    <link rel="shortcut icon" type="image/x-icon" href="../public/img/LogoLocalExplore.png"> <!-- Icono de acceso directo -->

    <link rel="stylesheet" href="../public/css/bootstrap.min.css"> <!-- Hoja de estilos de Bootstrap -->
    <link rel="stylesheet" href="../public/css/templatemo.css"> <!-- Hoja de estilos personalizada -->
    <link rel="stylesheet" href="../public/css/custom.css"> 
    <!-- Cargar estilos de fuente de Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="../public/css/fontawesome.min.css"> <!-- Hoja de estilos de Font Awesome -->


</head>
<body>
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
                            <a class="nav-link" href="../Views/inicio.php">Inicio</a> <!-- Enlace a la página de inicio -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Views/localesinicio.php">Locales</a> <!-- Enlace a la página de locales -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Views/contact.php">Contactos</a> <!-- Enlace a la página de contactos -->
                        </li>
                        <!-- Links para login y registro -->
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white" href="../Views/inicio_sesion.php">Login</a> <!-- Enlace a la página de login -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white" href="../Views/registro.php">Register</a> <!-- Enlace a la página de registro -->
                        </li>

                    </ul>
                </div>
            </div>

        
        </div>
    </nav>
    <!-- Cerrar Header -->
    <!-- Contenedor del formulario -->
<div class="flex items-center justify-center h-screen">
    <div class="form-container">
        <img src="../public/img/LogoLocalExplore.png" alt="Logo de ExploreLocal" class="logo" /> <!-- Cambia la ruta de la imagen -->
        <h2>¡Únete a Nuestra Plataforma!</h2>
        <p class="text-gray-600 mb-6 text-center">Regístrate como usuario o empresa y comienza a disfrutar de todos nuestros servicios.</p>

        <form action="../Public/register_action.php" method="post" class="flex flex-col">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre Completo</label>
                <input type="text" id="nombre" name="username" class="form-input" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="form-input" required>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" id="password" name="password" class="form-input" required>
            </div>

            <div class="mb-4">
                <label for="role" class="form-label">Rol</label>
                <select id="role" name="role" class="form-input" required>
                    <option value="" disabled selected>Seleccione un rol</option>
                    <option value="admin">Empresa</option>
                    <option value="usuario">Usuario</option>
                </select>
            </div>

            <button type="submit" class="btn-submit">Registrarse</button>
        </form>
        <p class="footer-text">¿Ya tienes una cuenta? <a href="../Views/inicio_sesion.php" class="text-primary">Iniciar Sesión</a></p>
    </div>
</div>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Roboto', sans-serif; /* Usar fuente moderna */
        background-color: #f0f4f8; /* Color de fondo suave */
    }

    .form-container {
        background: rgba(255, 255, 255, 0.95); /* Fondo blanco con un poco de transparencia */
        border-radius: 20px; /* Esquinas más redondeadas */
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2); /* Sombra más pronunciada */
        padding: 50px 40px; /* Espaciado interno */
        width: 800px; /* Ancho fijo del formulario */
        margin: auto; /* Centrar el formulario horizontalmente */
        text-align: left; /* Alinear texto a la izquierda */
        position: relative; /* Para posicionar elementos internos */
        margin-top: 20px; /* Margen superior para separar del encabezado */
    }

    .logo {
        display: block; /* Para centrar la imagen */
        margin: 0 auto 20px; /* Margen automático para centrar y margen inferior */
        max-width: 80%; /* Limitar el tamaño del logo */
    }

    .form-container h2 {
        margin-bottom: 20px; /* Espacio debajo del título */
        font-weight: 600; /* Peso de la fuente */
        color: #333; /* Color del texto */
        text-align: center; /* Título centrado */
    }

    .form-label {
        display: block; /* Asegura que el label esté en su propia línea */
        margin-bottom: 8px; /* Espacio debajo del label */
        color: #555; /* Color del texto */
    }

    .form-input, .form-select {
        width: 100%; /* Ocupa todo el ancho */
        padding: 12px; /* Espaciado interno */
        border: 1px solid #ccc; /* Borde suave */
        border-radius: 10px; /* Esquinas redondeadas */
        transition: border-color 0.3s, box-shadow 0.3s; /* Transición suave en el borde */
        font-size: 14px; /* Tamaño de fuente */
    }

    .form-input:focus, .form-select:focus {
        border-color: #007bff; /* Color de borde al enfocar */
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Sombra suave al enfocar */
        outline: none; /* Eliminar el borde de enfoque predeterminado */
    }

    .btn-submit {
        width: 100%; /* Botón ocupa todo el ancho */
        padding: 12px; /* Espaciado interno */
        background-color: #007bff; /* Color de fondo */
        color: white; /* Color del texto */
        border: none; /* Sin borde */
        border-radius: 10px; /* Esquinas redondeadas */
        font-size: 18px; /* Tamaño de fuente */
        cursor: pointer; /* Cambiar cursor a puntero */
        transition: background-color 0.3s, transform 0.2s; /* Transición suave en el fondo */
    }

    .btn-submit:hover {
        background-color: #0056b3; /* Color de fondo al pasar el mouse */
        transform: translateY(-2px); /* Efecto de elevación al pasar el mouse */
    }

    .footer-text {
        text-align: center; /* Centrando el texto del pie */
        opacity: 0.7; /* Sutil opacidad */
        color: #333; /* Color del texto */
        margin-top: 20px; /* Margen superior */
    }

    .footer-text a {
        color: #007bff; /* Color de enlace */
        text-decoration: none; /* Sin subrayado */
    }

    .footer-text a:hover {
        text-decoration: underline; /* Subrayar al pasar el mouse */
    }
</style>

<!-- Start Footer -->
<footer class="bg-dark text-light py-5" id="footer"> <!-- Sección del pie de página -->
    <div class="container"> <!-- Contenedor del pie de página -->
        <div class="row mb-4"> <!-- Fila para información de la empresa y redes sociales -->
            <!-- Company Info Section -->
            <div class="col-md-4 mb-3 mb-md-0"> <!-- Sección de información de la empresa -->
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">ExploreLocal</h2> <!-- Título de la sección -->
                <ul class="list-unstyled mt-4"> <!-- Lista de información de contacto -->
                    <li class="d-flex align-items-center mb-3"> <!-- Dirección -->
                        <i class="fas fa-map-marker-alt me-2 fs-5"></i> <!-- Icono de ubicación -->
                        <span>Villeta</span> <!-- Nombre de la ubicación -->
                    </li>
                    <li class="d-flex align-items-center mb-3"> <!-- Teléfono -->
                        <i class="fa fa-phone me-2 fs-5"></i> <!-- Icono de teléfono -->
                        <a class="text-light text-decoration-none" href="tel:3135657271">313 565 7271</a> <!-- Número de teléfono -->
                    </li>
                    <li class="d-flex align-items-center"> <!-- Correo electrónico -->
                        <i class="fa fa-envelope me-2 fs-5"></i> <!-- Icono de correo -->
                        <a class="text-light text-decoration-none" href="mailto:Infinity@company.com">Infinity@company.com</a> <!-- Dirección de correo -->
                    </li>
                </ul>
            </div>
            <!-- Social Media Section -->
            <div class="col-md-8"> <!-- Sección de redes sociales -->
                <div class="d-flex flex-wrap justify-content-center justify-md-end mb-3"> <!-- Contenedor para los enlaces de redes -->
                    <ul class="list-inline mb-0"> <!-- Lista de redes sociales -->
                        <li class="list-inline-item mx-2"> <!-- Enlace a Facebook -->
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/">
                                <i class="fab fa-facebook-f fa-2x"></i> <!-- Icono de Facebook -->
                            </a>
                        </li>
                        <li class="list-inline-item mx-2"> <!-- Enlace a Instagram -->
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/">
                                <i class="fab fa-instagram fa-2x"></i> <!-- Icono de Instagram -->
                            </a>
                        </li>
                        <li class="list-inline-item mx-2"> <!-- Enlace a Twitter -->
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/">
                                <i class="fab fa-twitter fa-2x"></i> <!-- Icono de Twitter -->
                            </a>
                        </li>
                        <li class="list-inline-item mx-2"> <!-- Enlace a LinkedIn -->
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/">
                                <i class="fab fa-linkedin fa-2x"></i> <!-- Icono de LinkedIn -->
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-100 my-4 border-top border-light"></div> <!-- Línea divisoria -->
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="w-100 bg-black py-3"> <!-- Parte inferior del pie de página -->
            <div class="container text-center"> <!-- Contenedor centrado -->
                <p class="mb-2">
                    &copy; <span id="current-year"></span> <a href="#" class="text-light text-decoration-none">Company Infinity</a>. All Rights Reserved. <!-- Derechos de autor -->
                </p>
                <p class="mb-0"> <!-- Enlaces a políticas -->
                    <a href="#privacy-policy" class="text-light text-decoration-none">Privacy Policy</a> | 
                    <a href="#terms-of-service" class="text-light text-decoration-none">Terms of Service</a> <!-- Políticas de privacidad y servicio -->
                </p>
            </div>
        </div>
    </div>
</footer>
    <!-- Scripts -->
    <script src="../public/js/jquery.min.js"></script> <!-- Script de jQuery -->
    <script src="../public/js/bootstrap.bundle.min.js"></script> <!-- Script de Bootstrap -->
</body>
</html>
