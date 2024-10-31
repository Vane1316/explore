<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recuperar Contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-6">Recuperar Contraseña</h2>
        <form action="../public/recuperar.php" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Correo Electrónico</label>
                <input type="email" id="email" name="email" required class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Ingrese su correo electrónico">
            </div>
            <button type="submit" name="recuperar" class="w-full bg-green-500 text-white p-2 rounded-lg font-bold hover:bg-green-600 transition duration-300">Enviar Enlace</button>
        </form>
    </div>
</body>
</html>
