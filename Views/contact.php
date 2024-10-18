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
        
        <form action="../Public/enviarContacto.php" method="POST" class="p-8 rounded-md shadow-md" style="background-color: #f7f7f7; border: 2px solid #333; max-width: 700px; width: 100%; font-size: 18px;">
            <!-- Título del formulario -->
            <h2 class="text-center mb-5" style="color: #000000; font-family: 'Bernard MT Condensed'; font-size: 40px; font-weight: bold;">CONTÁCTENOS</h2>

            <!-- Contenedor de nombre y email en una sola fila -->
            <div class="row">
                <!-- Nombre -->
                <div class="col-md-6 mb-3">
                    <label for="nombre" class="block text-sm font-medium" style="color: #333;">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required style="border: 1px solid #333; color: #333; width: 100%; height: 42px; padding: 8px;">
                </div>

                <!-- Email -->
                <div class="col-md-6 mb-3">
                    <label for="email" class="block text-sm font-medium" style="color: #333;">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required style="border: 1px solid #333; color: #333; width: 100%; height: 42px; padding: 8px;">
                </div>
            </div>

            <!-- Motivo -->
            <div class="mt-4 mb-3">
                <label for="motivo" class="block text-sm font-medium" style="color: #333;">Motivo</label>
                <input type="text" id="motivo" name="motivo" class="form-control" placeholder="Motivo" required style="border: 1px solid #333; color: #333; width: 100%; height: 42px; padding: 8px;">
            </div>

            <!-- Comentario -->
            <div class="mt-4 mb-3">
                <label for="comentario" class="block text-sm font-medium" style="color: #333;">Comentario</label>
                <textarea id="comentario" name="comentario" rows="5" class="form-control" placeholder="Escribe tu comentario" required style="border: 1px solid #333; color: #333; width: 100%; padding: 10px;"></textarea>
            </div>

            <!-- Botón Enviar -->
            <div class="mt-4 text-right">
                <button type="submit" class="btn btn-success font-bold py-2 px-4 rounded" style="background-color: #28a745; border: 2px solid #333; color: #fff; font-size: 18px; padding: 10px 20px; transition: background-color 0.3s;">
                    Enviar
                </button>
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
<script>
    document.getElementById('current-year').textContent = new Date().getFullYear();
</script>

</body>
</html>
