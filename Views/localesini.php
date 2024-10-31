<?php
require_once '../Controller/CategoriaController.php';

session_start();

// Asegúrate de obtener el ID de categoría correctamente
$categoria_id = isset($_GET['categoria_id']) ? (int)$_GET['categoria_id'] : null;

$categoriaController = new CategoriaController();
$locales = [];

// Si se recibe un ID de categoría, obtener los locales de esa categoría
if ($categoria_id) {
    $locales = $categoriaController->getLocalesByCategoria($categoria_id);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Locales por Categoría</title>
    <!-- Incluye tus hojas de estilo aquí -->
</head>
<body>
    <h1>Locales por Categoría</h1>

    <?php if (!empty($locales)): ?>
        <div class="row">
            <?php foreach ($locales as $local): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 shadow-lg">
                        <img src="<?php echo htmlspecialchars($local['imagen_principal']); ?>" class="card-img-top" alt="Imagen de <?php echo htmlspecialchars($local['nombre_empresa']); ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($local['nombre_empresa']); ?></h5>
                            <p class="card-text">
                                <i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($local['direccion']); ?><br>
                                <i class="fas fa-phone"></i> <?php echo htmlspecialchars($local['telefono']); ?>
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <form action="../views/localinicio.php" method="post">
                                <input type="hidden" name="id_local" value="<?php echo $local['id_local']; ?>">
                                <button type="submit" class="btn btn-primary btn-sm">Ver Detalles</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p>No se encontraron locales para esta categoría.</p>
    <?php endif; ?>

    <a href="../inicio.php">Volver al Inicio</a>
</body>
</html>
