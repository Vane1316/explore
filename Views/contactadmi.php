<?php
session_start(); // Inicia la sesión para el manejo de usuarios
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ExploreLocal</title> <!-- Título de la página -->
    <meta charset="utf-8"> <!-- Establece la codificación de caracteres -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Hace que la página sea responsiva -->

    <link rel="apple-touch-icon" href="../public/img/LogoLocalExplore.png"> <!-- Icono para dispositivos Apple -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/LogoLocalExplore.png"> <!-- Icono de acceso directo -->

    <link rel="stylesheet" href="../public/css/bootstrap.min.css"> <!-- Estilos de Bootstrap -->
    <link rel="stylesheet" href="../public/css/templatemo.css"> <!-- Estilos de la plantilla -->
    <link rel="stylesheet" href="../public/css/custom.css"> <!-- Estilos personalizados -->

    <!-- Cargar fuentes después de renderizar los estilos de la plantilla -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap"> <!-- Fuente Roboto -->
    <link rel="stylesheet" href="../public/css/fontawesome.min.css"> <!-- Estilos de Font Awesome -->

    <!-- Estilo personalizado -->
    <style>
        /* Ajuste del mapa para hacerlo más grande */
        .map-container {
            text-align: center;
            margin: 20px;
        }
        iframe {
            border: 0;
            width: 1000px; /* Aumenta el ancho del mapa */
            height: 700px; /* Aumenta la altura del mapa */
        }

        /* Estilo del formulario */
        form {
            border: 2px solid black; /* Añadir borde negro */
            padding: 20px;
            background-color: #fff;
        }

        /* Ajuste de los campos de entrada */
        input, textarea {
            width: 100%; /* Hacer los campos más grandes */
            padding: 15px; /* Aumentar el espacio dentro de los campos */
            margin-bottom: 15px; /* Espacio entre los campos */
            border-radius: 5px; /* Bordes redondeados */
            border: 1px solid #ccc; /* Borde gris claro */
        }

        /* Alinear nombre y correo debajo del motivo y comentario */
        #nombre, #email {
            margin-top: 20px; /* Añadir espacio arriba de nombre y correo */
        }
    </style>

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
                            <a class="nav-link " href="../Views/admin.php">INICIO ADMINISTRADOR</a> <!-- Enlace a la página de usuario -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../Views/localadmi.php">LOCALES</a> <!-- Enlace a la página de locales -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../Views/about.php">PLANES</a> <!-- Enlace a la página de locales -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../Views/contactadmi.php">CONTACTOS</a> <!-- Enlace a la página de contactos -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../Views/subidanegocio.php">SUBIR NEGOCIOS</a> <!-- Enlace a la página de locales -->
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
    <!-- Cerrar Header -->

<!-- Inicio del Contenido -->
<div class="container-fluid bg-light py-5">
    <div class="col-md-6 m-auto text-center">
        <h1 class="h1">Contactos Infinity</h1>
        <p>Dinos tus inconvenientes con nuestra pagina o servicios</p>
    </div>
</div>

<!-- Mapa de Google -->
<div class="map-container">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31796.404217183986!2d-74.470206!3d5.01404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e409a46b61023ff%3A0x82094f500526ecb4!2sVilleta%2C%20Cundinamarca!5e0!3m2!1ses!2sco!4v1724362127878!5m2!1ses!2sco" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>
<!-- Formulario de Contacto -->
<div class="container py-5">
    <div class="row py-5 justify-content-center">
        <form action="../Public/enviarAdmiContacto.php" method="POST" class="p-4 rounded-md shadow-lg" style="background-color: #ffffff; border-radius: 15px; max-width: 700px; width: 100%; font-size: 18px; transition: transform 0.3s; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
            <!-- Título del formulario -->
            <h2 class="text-center mb-4" style="color: #333; font-family: 'Arial', sans-serif; font-size: 36px; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);">CONTÁCTENOS</h2>

            <!-- Contenedor de nombre y email en una sola fila -->
            <div class="row">
                <!-- Nombre -->
                <div class="col-md-6 mb-3">
                    <label for="nombre" class="block text-sm font-medium" style="color: #333;">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required style="border: 1px solid #ccc; color: #333; width: 100%; height: 42px; padding: 8px; border-radius: 8px; transition: border-color 0.3s;" onfocus="this.style.borderColor='#28a745';">
                </div>

                <!-- Email -->
                <div class="col-md-6 mb-3">
                    <label for="email" class="block text-sm font-medium" style="color: #333;">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required style="border: 1px solid #ccc; color: #333; width: 100%; height: 42px; padding: 8px; border-radius: 8px; transition: border-color 0.3s;" onfocus="this.style.borderColor='#28a745';">
                </div>
            </div>

            <!-- Motivo -->
            <div class="mt-4 mb-3">
                <label for="motivo" class="block text-sm font-medium" style="color: #333;">Motivo</label>
                <input type="text" id="motivo" name="motivo" class="form-control" placeholder="Motivo" required style="border: 1px solid #ccc; color: #333; width: 100%; height: 42px; padding: 8px; border-radius: 8px; transition: border-color 0.3s;" onfocus="this.style.borderColor='#28a745';">
            </div>

            <!-- Comentario -->
            <div class="mt-4 mb-3">
                <label for="comentario" class="block text-sm font-medium" style="color: #333;">Comentario</label>
                <textarea id="comentario" name="comentario" rows="5" class="form-control" placeholder="Escribe tu comentario" required style="border: 1px solid #ccc; color: #333; width: 100%; padding: 10px; border-radius: 8px; transition: border-color 0.3s;" onfocus="this.style.borderColor='#28a745';"></textarea>
            </div>

            <!-- Botón Enviar -->
            <div class="mt-4 text-right">
                <button type="submit" class="btn btn-success font-bold py-2 px-4 rounded" style="background-color: #28a745; border: none; color: #fff; font-size: 18px; padding: 10px 20px; border-radius: 8px; transition: background-color 0.3s, transform 0.3s;" onmouseover="this.style.transform='scale(1.05)';" onmouseout="this.style.transform='scale(1)';">Enviar</button>
            </div>
        </form>
    </div>
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
<!-- End Footer --><!-- Iniciar Script -->
<script src="../public/js/jquery-1.11.0.min.js"></script> <!-- Incluir jQuery -->
<script src="../public/js/jquery-migrate-1.2.1.min.js"></script> <!-- Incluir jQuery Migrate -->
<script src="../public/js/bootstrap.bundle.min.js"></script> <!-- Incluir Bootstrap -->
<script src="../public/js/templatemo.js"></script> <!-- Incluir el script principal de Templatemo -->
<script src="../public/js/custom.js"></script> <!-- Incluir script personalizado -->
<!-- End Script -->
<script>
    document.getElementById('current-year').textContent = new Date().getFullYear();
</script>

</body>
</html>
