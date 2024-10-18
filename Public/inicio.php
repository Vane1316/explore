<!DOCTYPE html>
<html lang="es">

<head>
<head>
    <title>ExploreLocal</title> <!-- Título de la página -->
    <meta charset="utf-8"> <!-- Conjunto de caracteres UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Configuración de vista para dispositivos móviles -->

    <link rel="apple-touch-icon" href="../public/img/LogoLocalExplore.png"> <!-- Icono para dispositivos Apple -->
    <link rel="shortcut icon" type="image/x-icon" href="../public/img/LogoLocalExplore.png"> <!-- Icono de acceso directo -->

    <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- Hoja de estilos de Bootstrap -->
    <link rel="stylesheet" href="../public/css/templatemo.css"> <!-- Hoja de estilos personalizada -->
    <link rel="stylesheet" href="../public/css/custom.css"> <!-- Hoja de estilos adicional -->

    <!-- Cargar estilos de fuente de Google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="../public/css/fontawesome.min.css"> <!-- Hoja de estilos de Font Awesome -->
</head>




<body>
    <?php
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

            < class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav"> <!-- Navegación colapsable -->
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

    <!-- Modal de Búsqueda -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> <!-- Modal para búsqueda -->
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <!-- Botón para cerrar el modal -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0"> <!-- Formulario dentro del modal -->
                <div class="input-group mb-2">
                    <!-- Campo de búsqueda en el modal -->
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Buscar ..."> <!-- Campo de entrada para búsqueda -->
                    <button type="submit" class="input-group-text bg-success text-light"> <!-- Botón de envío -->
                        <i class="fa fa-fw fa-search text-white"></i> <!-- Icono de búsqueda -->
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Iniciar Banner Principal -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel"> <!-- Carrusel de imágenes -->
        <ol class="carousel-indicators"> <!-- Indicadores del carrusel -->
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li> <!-- Primer indicador -->
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li> <!-- Segundo indicador -->
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li> <!-- Tercer indicador -->
        </ol>
        <div class="carousel-inner"> <!-- Contenedor de elementos del carrusel -->
            <div class="carousel-item active"> <!-- Primer elemento del carrusel -->
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="../public/img/petronio.jpg" alt=""> <!-- Imagen del primer elemento -->
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Petronio Cocina De Autor</b></h1> <!-- Título del primer elemento -->
                                <p>
                                    En Petronio - Cocina de autor, cada uno de nuestros platos están inspirados en Colombia, su historia, su gente y su cultura. La combinación de modernidad y tendencias con tradición son el punto de encuentro en Petronio. Te invitamos a vivir esta experiencia llena de sabor, historia, música, texturas y aromas. <a rel="sponsored" class="text-success" href="shop-single-petronio.php">Mirar más sobre esto</a>
                                </p> <!-- Descripción del primer elemento -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item"> <!-- Segundo elemento del carrusel -->
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="../public/img/lancaster.jpg" alt=""> <!-- Imagen del segundo elemento -->
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Hotel Lancaster House</h1> <!-- Título del segundo elemento -->
                                <p>Descubre por qué tantos viajeros ven Lancaster House como el hotel ideal cuando visitan Bogotá.<a rel="sponsored" class="text-success" href="shop-single-lancaster.php">Mirar más sobre esto</a></p> <!-- Descripción del segundo elemento -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item"> <!-- Tercer elemento del carrusel -->
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="../public/img/paloquemao.jpg" alt=""> <!-- Imagen del tercer elemento -->
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Plaza de Mercado Paloquemao</h1> <!-- Título del tercer elemento -->
                                <p>
                                    La Plaza de Mercado de Paloquemao es un lugar emblemático para el abastecimiento de familias y negocios en Bogotá.<a rel="sponsored" class="text-success" href="shop-single-paloquemao.php">Mirar más sobre esto</a>
                                </p> <!-- Descripción del tercer elemento -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev"> <!-- Control anterior del carrusel -->
            <i class="fas fa-chevron-left"></i> <!-- Icono para control anterior -->
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next"> <!-- Control siguiente del carrusel -->
            <i class="fas fa-chevron-right"></i> <!-- Icono para control siguiente -->
        </a>
    </div>

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

<!-- JavaScript opcional para mostrar el año dinámicamente -->
<script>
    document.getElementById('current-year').textContent = new Date().getFullYear(); // Asigna el año actual al elemento con ID 'current-year'
</script>

<!-- Incluir Font Awesome (si no se incluye en otro lugar) -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> <!-- Script para usar iconos de Font Awesome -->

<!-- CSS opcional para estilos adicionales -->
<style>
    #footer { 
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .logo { 
        font-family: 'Arial', sans-serif; 
    }
    .text-light a { 
        color: #e0e0e0; 
    }
    .text-light a:hover { 
        color: #b0b0b0;
        text-decoration: underline; 
    }
    .fs-5 { 
        font-size: 1.25rem; 
    }
</style>

<!-- End Footer -->

<!-- Iniciar Script -->
<script src="../public/js/jquery-1.11.0.min.js"></script> <!-- Incluir jQuery -->
<script src="../public/js/jquery-migrate-1.2.1.min.js"></script> <!-- Incluir jQuery Migrate -->
<script src="../public/js/bootstrap.bundle.min.js"></script> <!-- Incluir Bootstrap -->
<script src="../public/js/templatemo.js"></script> <!-- Incluir el script principal de Templatemo -->
<script src="../public/js/custom.js"></script> <!-- Incluir script personalizado -->
<!-- End Script -->
</body>

</html>
