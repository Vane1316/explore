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

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f0f4f8;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px; /* Esquinas más redondeadas */
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15); /* Sombra más pronunciada */
            padding: 50px 40px; /* Espaciado interno aumentado */
            width: 450px; /* Ancho aumentado */
            margin: 40px auto; 
            text-align: left;
        }

        .my-form h1 {
            margin-bottom: 25px;
            font-weight: 600; /* Peso de la fuente más fuerte */
            color: #333;
            text-align: center;
            font-size: 24px; /* Tamaño de fuente del título aumentado */
        }

        .form-label {
            display: block;
            margin-bottom: 10px;
            color: #555;
            font-weight: 500; /* Peso de la fuente del label */
        }

        .form-input {
            width: 100%;
            padding: 12px; /* Espaciado interno aumentado */
            border: 1px solid #ccc;
            border-radius: 10px;
            transition: border-color 0.3s;
            font-size: 16px; /* Tamaño de fuente aumentado */
        }

        .form-input:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn-submit {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 18px; /* Tamaño de fuente aumentado */
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        .text-link {
            color: #007bff;
            text-decoration: none;
        }

        .text-link:hover {
            text-decoration: underline;
        }

        .footer-text {
            text-align: center;
            opacity: 0.6;
            color: white;
            margin-top: 20px;
        }
    </style>
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
                            <a class="nav-link" href="../Views/inicio.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Views/localesinicio.php">Locales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Views/contact.php">Contactos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white" href="../Views/inicio_sesion.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white" href="../Views/registro.php">Register</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>
    <!-- Cerrar Header -->

    <br>

    <div class="form-container">
        <form action="../Public/login_action.php" method="post" class="my-form" onsubmit="return validarFormulario()">
            <h1>Inicio de Sesión</h1>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" id="email" name="email" placeholder="Email" class="form-input" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Contraseña" class="form-input" required>
            </div>

            <div class="flex items-center justify-between mb-5">
                <a href="../Views/forgot_password.php" class="text-sm text-blue-500 hover:underline">¿Olvidaste tu contraseña?</a>
            </div>

            <button type="submit" class="btn-submit">Inicio de sesión</button>

            <div class="text-center mt-3">
                <p>¿Aún no estás en Saudade? <a href="../Views/registro.php" class="text-link">Regístrate</a></p>
            </div>
        </form>
    </div>

    <div class="footer-text">
        <p>Si continúas, aceptas los Términos del servicio y confirmas que has leído nuestra política de privacidad.</p>
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

    <script src="../public/js/bootstrap.bundle.min.js"></script>
</body>
</html>
