<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Iconos para la app y favicon -->
    <link href="../public/img/LogoLocalExplore.png">
    <link rel="shortcut icon" type="image/x-icon" href="../public/img/LogoLocalExplore.png">

    <!-- Estilos de Bootstrap y otros archivos CSS -->
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/templatemo.css">
    <link rel="stylesheet" href="../public/css/custom.css">

    <!-- Fuentes de Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="../public/css/fontawesome.min.css">

    <!-- Slick para carruseles -->
    <link rel="stylesheet" type="text/css" href="../public/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="../public/css/slick-theme.css">


</head>
<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand text-success logo h1 align-self-center d-flex align-items-center" href="index.php">
            <img src="../public/img/LogoLocalExplore.png" alt="Logo" class="logo-img">
            <span class="ml-2">ExploreLocal</span>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto"> 
                <li class="nav-item">
                            <a class="nav-link font-bold" style="font-family: 'Arial Black'; font-size: 29px;" href="../Public/inicio.php">INICIO</a> <!-- Enlace a la página de inicio -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-bold" style="font-family: 'Arial Black'; font-size: 29px;" href="../Views/localesinicio.php">LOCALES</a> <!-- Enlace a la página de locales -->
                        </li>
                     <!--   <li class="nav-item">
                            <a class="nav-link" href="../Views/contact.php">Contactos</a> (Enlace a la página de contactos)
                        </li> 
                    -->
                        <!-- Links para login y registro -->
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white nav-link font-bold" style="font-family: 'Arial Black'; font-size: 29px;" href="../Views/inicio_sesion.php">LOGIN</a> <!-- Enlace a la página de login -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white nav-link font-bold" style="font-family: 'Arial Black'; font-size: 29px;" href="../Views/registro.php">REGISTER</a> <!-- Enlace a la página de registro -->
                        </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

    </div>
<!-- Cerrar Header -->
 
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }

        .form-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .form-container {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 400px;
        }

        .logo {
            display: block;
            margin: 0 auto 20px;
            width: 120px;
            height: auto;
        }

        .form-title {
            font-size: 24px;
            color: #333;
            text-align: center;
            margin-bottom: 10px;
        }

        .form-subtitle {
            font-size: 16px;
            color: #666;
            text-align: center;
            margin-bottom: 30px;
        }

        .input-group {
            margin-bottom: 30px;
            position: relative;
        }
        .navbar-brand {
        margin-right: 50px; /* Espacio entre el logo y los enlaces */
    }
    @media (max-width: 991px) {
        .navbar-brand {
            margin-right: 20px; /* Ajuste para pantallas pequeñas */
        }
    }
        .input-group input {
            width: 100%;
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
            color: #333;
        }

        .input-group label {
            position: absolute;
            top: 50%;
            left: 20px;
            transform: translateY(-50%);
            font-size: 16px;
            color: #999;
            pointer-events: none;
            transition: 0.3s ease all;
        }

        .input-group input:focus,
        .input-group input:not(:placeholder-shown) {
            border-color: #4CAF50;
        }

        .input-group input:focus + label,
        .input-group input:not(:placeholder-shown) + label {
            top: -12px;
            left: 10px;
            font-size: 12px;
            color: #4CAF50;
            background-color: #fff;
            padding: 0 5px;
        }

        .input-group select {
            width: 100%;
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
            color: #333;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%23333' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'%3E%3C/path%3E%3C/svg%3E");
            background-size: 12px 12px;
            background-position: 95% 50%;
            background-repeat: no-repeat;
        }

        .btn-submit {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
    display: block;  /* Cambio: de inline a block */
    margin: 0 auto;  /* Añadido: para centrar el botón */
    width: 50%;
        }

        .btn-submit:hover {
            background-color: #3e8e41;
        }

        .footer-text {
            font-size: 14px;
            color: #666;
            text-align: center;
            margin-top: 20px;
        }

        .footer-text a {
            color: #4CAF50;
            text-decoration: none;
        }

        .footer-text a:hover {
            color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="form-wrapper">
        <div class="form-container animate__animated animate__fadeIn">
            <img src="../public/img/LogoLocalExplore.png" alt="Logo de ExploreLocal" class="logo animate__animated animate__pulse animate__infinite" />
            <h2 class="form-title text-black font-bold" style="font-family: 'Algerian', sans-serif; font-size: 34px;">¡Únete a Nuestra Plataforma!</h2>
            <p class="form-subtitle text-black">Regístrate como usuario o empresa y comienza a disfrutar de todos nuestros servicios.</p>

            <form action="../Public/register_action.php" method="post">
                <div class="input-group animate__animated animate__fadeInLeft animate__delay-1s">
                    <input type="text" id="nombre" name="username" required>
                    <label for="nombre">Nombre Completo</label>
                </div>

                <div class="input-group animate__animated animate__fadeInRight animate__delay-1s">
                    <input type="email" id="email" name="email" required>
                    <label for="email">Correo Electrónico</label>
                </div>

                <div class="input-group animate__animated animate__fadeInLeft animate__delay-2s">
                    <input type="password" id="password" name="password" required>
                    <label for="password">Contraseña</label>
                </div>

                <div class="input-group animate__animated animate__fadeInRight animate__delay-2s">
                    <select id="role" name="role" required>
                        <option value="" disabled selected>Seleccione un rol</option>
                        <option value="empresa">Empresa</option>
                        <option value="usuario">Usuario</option>
                    </select>
                </div>

                <button type="submit " class="btn-submit animate__animated animate__bounceIn animate__delay-3s  font-bold">Registrarse</button>
            </form>
            <p class="footer-text animate__animated animate__fadeIn animate__delay-3s  font-bold">¿Ya tienes una cuenta? <a href="../Views/inicio_sesion.php">Iniciar Sesión</a></p>
        </div>
    </div>

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
    
    <script src="../public/js/slick.min.js"></script>
</body>
</html>
