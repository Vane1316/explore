<?php 
require_once __DIR__.'/../Models/Database.php';
require_once __DIR__.'/../Models/LocalModel.php';
require_once __DIR__.'/../Controller/LocalController.php';

// Verificar si se ha enviado el id_local
$id_local = isset($_POST['id_local']) ? $_POST['id_local'] : null;

if ($id_local) {
    // Crear una instancia del modelo
    $localModel = new LocalModel();
    
    // Obtener los detalles del local específico
    $localDetails = $localModel->getLocalById($id_local);
    
    // Obtener las imágenes del local
    $imagenes = $localModel->getImagesByLocalId($id_local);
} else {
    echo "No se proporcionó el ID del local.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Detalles del Local</title>
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

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5; /* Color de fondo suave */
        }
        .main-content {
            display: flex;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .image-container,
        .info-container {
            flex: 1 1 100%; /* Ocupa el 100% en pantallas pequeñas */
            padding: 10px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px; /* Espacio entre los contenedores en pantallas pequeñas */
        }
        @media (min-width: 768px) {
            .image-container,
            .info-container {
                flex: 1 1 48%; /* Ocupa el 48% del ancho en pantallas grandes */
            }
            .image-container {
                margin-right: 20px; /* Espacio entre imagen e información */
                margin-bottom: 0; /* Elimina el margen inferior */
            }
        }
        .image-container img {
            width: 100%; /* La imagen ocupa todo el ancho del contenedor */
            border-radius: 10px 10px 0 0; /* Bordes redondeados solo en la parte superior */
            object-fit: cover; /* Mantiene la proporción de la imagen */
            height: 300px; /* Altura fija para las imágenes */
        }
        .info-container h2 {
            color: #28a745; /* Color del título */
            font-size: 1.8em; /* Tamaño de fuente más grande */
        }
        .info-container p {
            margin: 10px 0;
            font-size: 1.1em; /* Tamaño de fuente para los datos */
            color: #333; /* Color del texto */
        }
        .info-container strong {
            color: #28a745; /* Color para las etiquetas en negrita */
        }
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }
        footer .text-light a {
            color: #adb5bd;
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
                            <a class="nav-link" href="../Views/user.php">Inicio Usuario</a> <!-- Enlace a la página de inicio -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Views/localesUser.php">Locales</a> <!-- Enlace a la página de locales -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../Views/p">Contactos</a> <!-- Enlace a la página de contactos -->
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
<div class="order-2 md:order-3 flex flex-wrap items-center justify-end mr-0 md:mr-4" id="nav-content">
    <div class="auth flex items-center w-full md:w-full">
            <a class="inline-block no-underline font-medium text-black text-lg hover:text-[#6F00FF] px-4" href="../Public/logout_action.php">Cerrar sesión</a>
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

    <!-- Fin del Header -->
    <div class="container py-5 animate__animated animate__fadeIn">
    <?php if ($localDetails): ?>
        <h2 class="text-center text-primary display-4 mb-4 animate__animated animate__slideInDown"><?php echo htmlspecialchars($localDetails['nombre_empresa']); ?></h2>
        <div class="main-content">
            <div class="image-container animate__animated animate__zoomIn">
                <?php if ($imagenes): ?>
                    <div class="image-slider">
                        <img id="main-image" src="<?php echo htmlspecialchars($imagenes[0]['img']); ?>" alt="Imagen del Local" class="img-fluid rounded">
                        <div class="arrow-container">
                            <button class="arrow left" onclick="changeImage(-1)"><i class="fas fa-chevron-left"></i></button>
                            <button class="arrow right" onclick="changeImage(1)"><i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                <?php else: ?>
                    <p class="text-muted">No hay imágenes disponibles para este local.</p>
                <?php endif; ?>
            </div>
            <div class="info-container animate__animated animate__slideInRight">
                <div class="info-card">
                    <p><i class="fas fa-id-card"></i> <strong>NIT:</strong> <?php echo htmlspecialchars($localDetails['nit']); ?></p>
                    <p><i class="fas fa-map-marker-alt"></i> <strong>Dirección:</strong> <?php echo htmlspecialchars($localDetails['direccion']); ?></p>
                    <p><i class="fas fa-phone"></i> <strong>Teléfono:</strong> <?php echo htmlspecialchars($localDetails['telefono']); ?></p>
                    <p><i class="fas fa-info-circle"></i> <strong>Descripción:</strong> <?php echo htmlspecialchars($localDetails['descripcion']); ?></p>
                    <p><i class="fas fa-concierge-bell"></i> <strong>Servicios:</strong> <?php echo htmlspecialchars($localDetails['servicios']); ?></p>
                    <p><i class="fas fa-map"></i> <strong>Mapa:</strong> <a href="<?php echo htmlspecialchars($localDetails['mapa']); ?>" target="_blank" class="btn btn-outline-primary btn-sm">Ver en Google Maps</a></p>
                    <p><i class="far fa-clock"></i> <strong>Horario:</strong> <?php echo htmlspecialchars($localDetails['horario_apertura']); ?> - <?php echo htmlspecialchars($localDetails['horario_cierre']); ?></p>
                </div>
            </div>
        </div>
    <?php else: ?>
        <p class="text-danger animate__animated animate__shakeX">No se encontraron detalles para este local.</p>
    <?php endif; ?>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
    @import url('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1200px;
        margin: auto;
    }

    .main-content {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    margin-top: 20px;
    flex-direction: row; /* Agregar esta propiedad */
}


.image-container {
    flex: 1 1 40%;
    padding: 10px;
    border-radius: 10px;
    background-color: white;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    transition: box-shadow 0.3s ease;
    max-width: 100%; /* Asegura que el contenedor no exceda el ancho del padre */
    height: 450px;
    overflow: hidden;
}


    .image-container:hover {
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    }

    .image-slider {
        position: relative;
    }

    .image-slider img {
    width: 100%; /* Asegura que la imagen ocupe todo el ancho del contenedor */
    border-radius: 10px;
    object-fit: cover; /* Mantiene la proporción de la imagen */
    height: 420px; /* Permite que la altura se ajuste automáticamente */
}

    .arrow-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        justify-content: space-between;
        width: 100%;
    }

    .arrow {
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px;
        cursor: pointer;
        margin: 0 10px;
        font-size: 20px;
        transition: background-color 0.3s ease;
    }

    .arrow:hover {
        background-color: #218838;
    }

    
    .info-container {
    flex: 1 1 50%;
    padding: 20px;
    border-radius: 10px;
    background-color: white;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    transition: box-shadow 0.3s ease;
    max-height: 600px;
    overflow-y: auto;
}
@media (max-width: 768px) {
    .main-content {
        flex-direction: column; /* Cambia a una columna en pantallas más pequeñas */
    }

    .image-container, .info-container {
        flex: 1 1 100%; /* Cada contenedor ocupará el 100% del ancho */
    }
}
.info-container:hover {
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
}

    .info-card {
        padding: 20px;
    }

    .info-card p {
        margin: 15px 0;
        font-size: 1.1em;
        color: #333;
    }

    .info-card strong {
        color: #28a745;
    }

    .info-card i {
        margin-right: 10px;
        font-size: 18px;
    }

    footer {
        background-color: #343a40;
        color: white;
        padding: 20px 0;
    }

    footer .text-light a {
        color: #adb5bd;
    }
</style>
<script>
    let currentIndex = 0; // Índice de la imagen actual
    const images = <?php echo json_encode(array_column($imagenes, 'img')); ?>; // Obtener todas las imágenes

    function changeImage(direction) {
        currentIndex += direction;

        // Si el índice se sale de los límites, reiniciar
        if (currentIndex < 0) {
            currentIndex = images.length - 1; // Regresar a la última imagen
        } else if (currentIndex >= images.length) {
            currentIndex = 0; // Volver a la primera imagen
        }

        // Cambiar la fuente de la imagen principal
        document.getElementById('main-image').src = images[currentIndex];
    }
</script>

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

    <!-- Scripts -->
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.slick-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: true,
                arrows: true,
            });
        });
    </script>
</body>
</html>
