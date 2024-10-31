<!DOCTYPE html>
<html lang="es">

<head>
<head>
    <title>ExploreLocal</title> <!-- Título de la página -->
    <meta charset="utf-8"> <!-- Conjunto de caracteres UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Configuración de vista para dispositivos móviles -->

    <link rel="apple-touch-icon" href="../public/img/LogoLocalExplore.png"> <!-- Icono para dispositivos Apple -->
    <link rel="shortcut icon" type="image/x-icon" href="../public/img/LogoLocalExplore.png"> <!-- Icono de acceso directo -->

    <link rel="stylesheet" href="../public/css/bootstrap.min.css"> <!-- Hoja de estilos de Bootstrap -->
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

            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between" id="templatemo_main_nav"> <!-- Navegación colapsable -->
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto"> <!-- Lista de navegación -->

                        <li class="nav-item">
                            <a class="nav-link" href="../Views/user.php">Inicio Usuario</a> <!-- Enlace a la página de usuario -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Views/localesUser.php">Locales</a> <!-- Enlace a la página de locales -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Views/contactuser.php">Contactos</a> <!-- Enlace a la página de contactos -->
                        </li>
                     
                       
                    </ul>
                </div>
            </div>

            <div class="navbar align-self-center d-flex"> <!-- Sección de búsqueda en la navbar -->
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3"> <!-- Oculta en pantallas grandes -->
                    <div class="input-group">
                        <!-- Campo de búsqueda móvil -->
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Buscar ..."> <!-- Campo de entrada para búsqueda -->
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i> <!-- Icono de búsqueda -->
                        </div>
                    </div>
                </div>           
            </div>
        </div>
          <!-- Contenido adicional del menú --> 
           <div class="flex items-center justify-end mr-0 md:mr-4" id="nav-content">
                <div class="auth flex items-center w-full md:w-full">
                  <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="../public/logout_action.php">Cerrar sesión</a>
                </div>
            </div>
   
    </nav>
    <!-- Cerrar Header -->


  
<!-- Iniciar Banner Principal -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicadores del carrusel -->
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    
    <div class="carousel-inner">
        <!-- Primer elemento del carrusel -->
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5 align-items-center">
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center animated fadeInLeft">
                            <h1 class="h1 text-success"><b>Petronio Cocina De Autor</b></h1>
                            <p class="animate__animated animate__fadeIn animate__delay-1s">
                                En Petronio - Cocina de autor, cada plato es una obra maestra inspirada en Colombia. Fusionamos tradición y modernidad para crear experiencias culinarias únicas.
                            </p>
                          
                        </div>
                    </div>
                    <div class="col-lg-6 animated fadeInRight">
                        <img class="img-fluid rounded shadow" src="../public/img/petronio.jpg" alt="Petronio Cocina De Autor">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Segundo elemento del carrusel -->
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5 align-items-center">
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left animated fadeInLeft">
                            <h1 class="h1 text-primary"><b>Hotel Lancaster House</b></h1>
                            <p class="animate__animated animate__fadeIn animate__delay-1s">
                                Experimenta el lujo y la comodidad en el corazón de Bogotá. Con habitaciones elegantes y servicios de primera clase, Lancaster House es tu hogar lejos de casa.
                            </p>
                           
                        </div>
                    </div>
                    <div class="col-lg-6 animated fadeInRight">
                        <img class="img-fluid rounded shadow" src="../public/img/lancaster.jpg" alt="Hotel Lancaster House">
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Tercer elemento del carrusel -->
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5 align-items-center">
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left animated fadeInLeft">
                            <h1 class="h1 text-warning"><b>Plaza de Mercado Paloquemao</b></h1>
                            <p class ="animate__animated animate__fadeIn animate__delay-1s">
                                Descubre la riqueza gastronómica de Colombia en la Plaza de Mercado Paloquemao. Un lugar emblemático para disfrutar de la comida y la cultura colombiana.
                            </p>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 animated fadeInRight">
                        <img class="img-fluid rounded shadow" src="../public/img/paloquemao.jpg" alt="Plaza de Mercado Paloquemao">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Controles del carrusel -->
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>



<!-- Sección de Destacados -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Destacados de la Semana</h1>
                <p>Negocios Imperdibles En Villeta</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="shop-single.html">
                        <img src="../Public/img/estelar3.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">

                            
                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark">Estelar Suites Jones</a>
                        <p class="card-text">
                        El Hotel está ubicado en Chapinero Alto barrio de fácil acceso gracias a sus corredores viales como lo son la Carrera Séptima, Avenida 39, la carrera 5ta y la avenida circunvalar, los cuales reducen los tiempos de recorrido entre el sur , centro histórico y norte de la ciudad. Su estratégica ubicación a pocas cuadras del eje financiero de la ciudad, lo hace el Hotel ideal para el desarrollo de sus negocios, eventos y reuniones en Bogotá.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="shop-single.html">
                        <img src="../Public/img/hilton1.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            
                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark">Hilton Garden Inn Bogota Airport</a>
                        <p class="card-text">
                        Hilton Garden Inn Bogota Airport es una magnífica elección para los viajeros que visiten Bogotá, ya que ofrece un ambiente con encanto y numerosos servicios diseñados para mejorar tu estancia. Ubicado cerca de la mayoría de los puntos de referencia de Bogotá, como BotaniK (0,9 km) y la Catedral de Fontibón (2,9 km), es un fantástico destino para turistas.
                        </p>
                       
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="shop-single.html">
                        <img src="../Public/img/mercaboy3.png" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            
                           
                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark">Mercaboy Mercados y Droguería</a>
                        <p class="card-text">
                        Mercaboy Mercados y Droguería es un establecimiento que combina servicios de supermercado y farmacia, ofreciendo a sus clientes una amplia variedad de productos en un solo lugar. En la sección de mercados, los usuarios pueden encontrar alimentos frescos, productos de despensa, lácteos, carnes, frutas y verduras, así como artículos de limpieza y cuidado personal. En la droguería, Mercaboy ofrece medicamentos de venta libre, productos farmacéuticos, suplementos y artículos para la salud y el bienestar.
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Testimonios -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Lo que nuestros clientes dicen</h1>
                <p>Experiencias reales de nuestros clientes</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <p class="card-text">
                            "Me encanta ir a Mercaboy, siempre encuentro todo lo que necesito sin tener que hacer muchas paradas. La sección de mercado tiene productos frescos, y la droguería es bastante completa. Me gustaría que tuvieran más ofertas en productos de higiene personal, pero en general es un excelente lugar para hacer las compras de la semana."
                        </p>
                        <p class="text-muted">- Juan Pérez</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <p class="card-text">
                            "Tuve una estancia maravillosa en el Hilton Garden Inn Bogotá Airport. El servicio fue excepcional desde el momento en que llegué. Las habitaciones eran modernas, limpias y cómodas, lo que me permitió descansar antes de mi vuelo. Además, el restaurante del hotel ofrece una excelente variedad de platos."
                        </p>
                        <p class="text-muted">- María Rodríguez</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <p class="card-text">
                            "El Estelar Suites Jones tiene un ambiente cálido y acogedor. Me hospedé aquí durante un viaje de trabajo y el servicio al cliente fue excelente. El desayuno incluido es variado y delicioso. Mi única sugerencia sería mejorar la velocidad del Wi-Fi, ya que por momentos era un poco lenta. Sin embargo, el hotel es cómodo."
                        </p>
                        <p class="text-muted">- Carlos Gómez</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
