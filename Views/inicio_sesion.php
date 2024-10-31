<!DOCTYPE html>
<html lang="es">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="../public/img/LogoLocalExplore.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/LogoLocalExplore.png">

    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/templatemo.css">
    <link rel="stylesheet" href="../public/css/custom.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="../public/css/fontawesome.min.css">

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
            background: rgba(255, 255, 255, 0.95);
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
      
    .navbar-brand {
        margin-right: 50px; /* Espacio entre el logo y los enlaces */
    }
    @media (max-width: 991px) {
        .navbar-brand {
            margin-right: 20px; /* Ajuste para pantallas pequeñas */
        }
    }
    </style>
</head>
<body>
    <div class="form-wrapper">
        <div class="form-container animate__animated animate__fadeIn">
            <img src="../public/img/LogoLocalExplore.png" alt="Logo" class="logo">
            <h1 class="form-title text-black font-bold" style="font-family: 'Algerian', sans-serif; font-size: 34px;">Inicio de Sesión</h1>
            <p class="form-title text-black font-bold">Accede a tu cuenta</p>
            <form action="../Public/login_action.php" method="post" onsubmit="return validarFormulario()">
                <div class="input-group">
                    <input type="email" id="email" name="email" placeholder=" " required>
                    <label for="email">Correo Electrónico</label>
                </div>

                <div class="input-group">
                    <input type="password" id="password " name="password" placeholder=" " required>
                    <label for="password">Contraseña</label>
                </div>

                <button type="submit" class="btn-submit">Inicio de sesión</button>

                <div class="footer-text">
                    <p>¿Aún no estás en ExploreLocal? <a href="../Views/registro.php">Regístrate</a></p>
                     <!--todavia no  esta disponible -->
                  <p>¿Olvidaste tu contraseña? <a href="../Views/recuperar_contrasena.php">Recuperar contraseña</a></p>
                </div>
            </form>
        </div>
    </div>
    <script>
        function validarFormulario() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
    
            if (email === "" || password === "") {
                alert("Por favor completa todos los campos.");
                return false;
            }
    
            return true;
        }
    </script>

    <!-- Start Footer -->
    <footer class="bg-dark text-light py-5" id="footer">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-4 mb-3 mb-md-0">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">ExploreLocal</h2>
                    <ul class="list-unstyled mt-4">
                        <li class="d-flex align-items-center mb-3">
                            <i class="fas fa-map-marker-alt me-2 fs-5"></i>
                            <span>Villeta</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="fa fa-phone me-2 fs-5"></i>
                            <a class="text-light text-decoration-none" href="tel:3135657271">313 565 7271</a>
                        </li>
                        <li class="d-flex align-items-center">
                            <i class="fa fa-envelope me-2 fs-5"></i>
                            <a class="text-light text-decoration-none" href="mailto:Infinity@company.com">Infinity@company.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="d-flex flex-wrap justify-content-center justify-md-end mb-3">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mx-2">
                                <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/">
                                    <i class="fab fa-facebook-f fa-2x"></i>
                                </a>
                            </li>
                            <li class="list-inline-item mx-2">
                                <a class="text-light text-decoration-none" target="_blank" href="http://twitter.com/">
                                    <i class="fab fa-twitter fa-2x"></i>
                                </a>
                            </li>
                            <li class="list-inline-item mx-2">
                                <a class="text-light text-decoration-none" target="_blank" href="http://instagram.com/">
                                    <i class="fab fa-instagram fa-2x"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row border-top pt-3">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">© 2024 ExploreLocal. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a class="text-light text-decoration-none me-3" href="../Views/terminos.html">Términos del servicio</a>
                    <a class="text-light text-decoration-none" href="../Views/politica_privacidad.html">Política de privacidad</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="../public/js/jquery.min.js"></script> <!-- Script de jQuery -->
    <script src="../public/js/bootstrap.bundle.min.js"></script>
</body>
</html>
