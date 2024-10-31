<!DOCTYPE html>
<html lang="en">

<head>
    <title>Planes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="../public/img/LogoLocalExplore.png">
    <link rel="shortcut icon" type="image/x-icon" href="../public/img/LogoLocalExplore.png">

    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/templatemo.css">
    <link rel="stylesheet" href="../public/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="../public/css/fontawesome.min.css">
<body>
    <?php
            // Inicia la sesión
                    session_start();
                    ?>
    
 
 
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
                            <a class="nav-link font-bold" style="font-family: 'Arial Black'; font-size: 29px;" href="../Views/subidanegocio.php">SUBIR NEGOCIO</a> <!-- Enlace a la página de locales -->
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



    <!-- Cerrar Header -->
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content border-0 p-0">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="get">
                    <div class="modal-body">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                            <button type="submit" class="input-group-text bg-success text-light">
                                <i class="fa fa-fw fa-search text-white"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Close Modal -->

<!-- Contenido -->
<div class="container py-5">
    <h1 class="h2 pb-4 text-center">Elige tu Plan para Publicitar tu Negocio</h1>
    
    <form action="procesar_pago.php" method="post">
        <div class="row justify-content-center">
            <!-- Plan Básico -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow transition-card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Plan Básico</h5>
                        <p class="card-text">Ideal para pequeños negocios que quieren comenzar a publicitar.</p>
                        <h2 class="text-success">$10 USD</h2>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><i class="fas fa-check-circle"></i> Publicación por 1 mes</li>
                            <li><i class="fas fa-check-circle"></i> 1 imagen destacada</li>
                            <li><i class="fas fa-check-circle"></i> Ubicación en el mapa</li>
                        </ul>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="plan" id="plan_basico" value="basico" required>
                            <label class="form-check-label" for="plan_basico">Seleccionar</label>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Plan Avanzado -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow border-primary transition-card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Plan Avanzado</h5>
                        <p class="card-text">Perfecto para negocios medianos que desean más visibilidad.</p>
                        <h2 class="text-primary">$30 USD</h2>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><i class="fas fa-check-circle"></i> Publicación por 3 meses</li>
                            <li><i class="fas fa-check-circle"></i> 3 imágenes destacadas</li>
                            <li><i class="fas fa-check-circle"></i> Ubicación en el mapa</li>
                            <li><i class="fas fa-check-circle"></i> Destacado en las búsquedas</li>
                        </ul>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="plan" id="plan_avanzado" value="avanzado">
                            <label class="form-check-label" for="plan_avanzado">Seleccionar</label>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Plan Premium -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 shadow border-danger transition-card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Plan Premium</h5>
                        <p class="card-text">Para grandes negocios que quieren máxima visibilidad y ventajas.</p>
                        <h2 class="text-danger">$50 USD</h2>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li><i class="fas fa-check-circle"></i> Publicación por 6 meses</li>
                            <li><i class="fas fa-check-circle"></i> 6 imágenes destacadas</li>
                            <li><i class="fas fa-check-circle"></i> Ubicación en el mapa</li>
                            <li><i class="fas fa-check-circle"></i> Destacado en la página principal</li>
                            <li><i class="fas fa-check-circle"></i> Publicidad en redes sociales</li>
                        </ul>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="plan" id="plan_premium" value="premium">
                            <label class=" form-check-label" for="plan_premium">Seleccionar</label>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="text-center">
<a href="../Views/Pagar.php" class="btn btn-primary btn-lg">Continuar al Pago</a>

<!-- Estilos adicionales -->
<style>
    .transition-card {
        transition: all 0.3s ease-in-out;
    }
    .transition-card:hover {
        transform: scale(1.05);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .card-body {
        padding: 2rem;
    }
    .card-title {
        font-weight: bold;
        font-size: 1.2rem;
    }
    .card-text {
        font-size: 1rem;
        color: #666;
    }
    .list-unstyled {
        padding-left: 0;
        list-style: none;
    }
    .list-unstyled li {
        padding-bottom: 0.5rem;
    }
    .list-unstyled li i {
        margin-right: 0.5rem;
    }
    .form-check {
        padding-top: 1rem;
    }
    .form-check-input {
        margin-top: 0.2rem;
    }
    .form-check-label {
        font-size: 1rem;
    }
</style>
  
<!--Brands-->
<section class="bg-light py-5"> <!-- Sección que muestra las marcas con fondo claro y espaciado vertical -->
    <div class="container my-4"> <!-- Contenedor principal con márgenes verticales -->
        <div class="row text-center py-3"> <!-- Fila para alinear el contenido en el centro y espaciado vertical -->
            <div class="col-lg-6 m-auto"> <!-- Columna centrada para el título y descripción -->
                <h1 class="h1">Marcas</h1> <!-- Título de la sección -->
                <p>
                    Marcas reconocidas del mercado <!-- Descripción de la sección -->
                </p>
            </div>
            <div class="col-lg-9 m-auto tempaltemo-carousel"> <!-- Columna para el carrusel de marcas -->
                <div class="row d-flex flex-row"> <!-- Fila flexible para los controles y carrusel -->
                    <!--Controls-->
                    <div class="col-1 align-self-center"> <!-- Columna para el control de deslizamiento hacia la izquierda -->
                        <a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev"> <!-- Enlace para retroceder en el carrusel -->
                            <i class="text-light fas fa-chevron-left"></i> <!-- Ícono de flecha hacia la izquierda -->
                        </a>
                    </div>
                    <!--End Controls-->

                    <!--Carousel Wrapper-->
                    <div class="col"> <!-- Columna para el contenedor del carrusel -->
                        <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example" data-bs-ride="carousel"> <!-- Carrusel que se desliza automáticamente -->
                            <!--Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox"> <!-- Contenedor de las diapositivas -->
                                <!-- First slide -->
                                <div class="carousel-item active"> <!-- Primera diapositiva activa -->
                                    <div class="row"> <!-- Fila para alinear las marcas -->
                                        <div class="col-3 p-md-5"> <!-- Columna para una marca -->
                                            <a href="https://www.kfc.co/"><img class="img-fluid brand-img" src="../public/img/marca1.png" alt="Brand Logo"></a> <!-- Imagen de la marca -->
                                        </div>
                                        <div class="col-3 p-md-5"> <!-- Columna para otra marca -->
                                            <a href="https://www.ea.com/es-es"><img class="img-fluid brand-img" src="../public/img/marca2.png" alt="Brand Logo"></a> <!-- Imagen de la marca -->
                                        </div>
                                        <div class="col-3 p-md-5"> <!-- Columna para otra marca -->
                                            <a href="https://www.adidas.co/"><img class="img-fluid brand-img" src="../public/img/marca3.png" alt="Brand Logo"></a> <!-- Imagen de la marca -->
                                        </div>
                                        <div class="col-3 p-md-5"> <!-- Columna para otra marca -->
                                            <a href="https://www.gucci.com/es/es/"><img class="img-fluid brand-img" src="../public/img/marca4.png" alt="Brand Logo"></a> <!-- Imagen de la marca -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End First slide -->

                                <!-- Second slide -->
                                <div class="carousel-item"> <!-- Segunda diapositiva -->
                                    <div class="row"> <!-- Fila para alinear las marcas -->
                                        <div class="col-3 p-md-5"> <!-- Columna para una marca -->
                                            <a href="https://www.tesla.com/"><img class="img-fluid brand-img" src="../public/img/logo1.png" alt="Brand Logo"></a> <!-- Imagen de la marca -->
                                        </div>
                                        <div class="col-3 p-md-5"> <!-- Columna para otra marca -->
                                            <a href="https://www.apple.com/co/"><img class="img-fluid brand-img" src="../public/img/logo2.png" alt="Brand Logo"></a> <!-- Imagen de la marca -->
                                        </div>
                                        <div class="col-3 p-md-5"> <!-- Columna para otra marca -->
                                            <a href="https://www.microsoft.com/es-co"><img class="img-fluid brand-img" src="../public/img/logo3.png" alt="Brand Logo"></a> <!-- Imagen de la marca -->
                                        </div>
                                        <div class="col-3 p-md-5"> <!-- Columna para otra marca -->
                                            <a href="https://www.nike.com/es/"><img class="img-fluid brand-img" src="../public/img/logo4.png" alt="Brand Logo"></a> <!-- Imagen de la marca -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Second slide -->
                            </div>
                            <!-- End Slides -->
                        </div>
                    </div>
                    <!--End Carousel Wrapper-->

                    <!--Controls-->
                    <div class="col-1 align-self-center"> <!-- Columna para el control de deslizamiento hacia la derecha -->
                        <a class="h1" href="#multi-item-example" role="button" data-bs-slide="next"> <!-- Enlace para avanzar en el carrusel -->
                            <i class="text-light fas fa-chevron-right"></i> <!-- Ícono de flecha hacia la derecha -->
                        </a>
                    </div>
                    <!--End Controls-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Brands-->
    
<!-- Start Footer -->
<footer class="bg-dark text-light py-5" id="footer"> <!-- Sección de pie de página con fondo oscuro y texto claro -->
    <div class="container"> <!-- Contenedor principal del pie de página -->
        <div class="row mb-4"> <!-- Fila para el contenido del pie de página -->
            <!-- Company Info Section -->
            <div class="col-md-4 mb-3 mb-md-0"> <!-- Columna para la información de la empresa -->
                <h2 class="h2 text-success border-bottom pb-3 border-light logo">ExploreLocal</h2> <!-- Título de la empresa -->
                <ul class="list-unstyled mt-4"> <!-- Lista de contacto sin estilo -->
                    <li class="d-flex align-items-center mb-3"> <!-- Elemento de lista con icono y texto -->
                        <i class="fas fa-map-marker-alt me-2 fs-5"></i> <!-- Icono de ubicación -->
                        <span>Villeta</span> <!-- Ubicación de la empresa -->
                    </li>
                    <li class="d-flex align-items-center mb-3"> <!-- Elemento de lista para el teléfono -->
                        <i class="fa fa-phone me-2 fs-5"></i> <!-- Icono de teléfono -->
                        <a class="text-light text-decoration-none" href="tel:3135657271">313 565 7271</a> <!-- Número de teléfono -->
                    </li>
                    <li class="d-flex align-items-center"> <!-- Elemento de lista para el correo -->
                        <i class="fa fa-envelope me-2 fs-5"></i> <!-- Icono de correo electrónico -->
                        <a class="text-light text-decoration-none" href="mailto:Infinity@company.com">Infinity@company.com</a> <!-- Correo electrónico -->
                    </li>
                </ul>
            </div>
            <!-- Social Media Section -->
            <div class="col-md-8"> <!-- Columna para los enlaces de redes sociales -->
                <div class="d-flex flex-wrap justify-content-center justify-md-end mb-3"> <!-- Contenedor flexible para alinear los iconos de redes sociales -->
                    <ul class="list-inline mb-0"> <!-- Lista de iconos de redes sociales sin estilo -->
                        <li class="list-inline-item mx-2"> <!-- Icono de Facebook -->
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2"> <!-- Icono de Instagram -->
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2"> <!-- Icono de Twitter -->
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/">
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mx-2"> <!-- Icono de LinkedIn -->
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/">
                                <i class="fab fa-linkedin fa-2x"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="w-100 my-4 border-top border-light"></div> <!-- Línea horizontal separadora -->
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="w-100 bg-black py-3"> <!-- Contenedor para la parte inferior del pie de página -->
            <div class="container text-center"> <!-- Contenedor centrado -->
                <p class="mb-2">
                    &copy; <span id="current-year"></span> <a href="#" class="text-light text-decoration-none">Company Infinity</a>. All Rights Reserved. <!-- Texto de derechos de autor -->
                </p>
                <p class="mb-0"> <!-- Texto de política de privacidad y términos de servicio -->
                    <a href="#privacy-policy" class="text-light text-decoration-none">Privacy Policy</a> | 
                    <a href="#terms-of-service" class="text-light text-decoration-none">Terms of Service</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
<!-- Iniciar Script -->
<script src="../public/js/jquery-1.11.0.min.js"></script> <!-- Incluir jQuery -->
<script src="../public/js/jquery-migrate-1.2.1.min.js"></script> <!-- Incluir jQuery Migrate -->
<script src="../public/js/bootstrap.bundle.min.js"></script> <!-- Incluir Bootstrap -->
<script src="../public/js/templatemo.js"></script> <!-- Incluir el script principal de Templatemo -->
<script src="../public/js/custom.js"></script> <!-- Incluir script personalizado -->
<!-- End Script -->
    <!-- Agrega los scripts de Bootstrap -->
    <script src="../public/js/bootstrap.bundle.min.js"></script>
</body>
</html>
