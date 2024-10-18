<?php
session_start();
include '../models/Database.php'; // Asegúrate de que la ruta sea correcta

// Obtener datos del formulario
$nombre_empresa = $_POST['nombre_empresa'];
$nit = $_POST['nit'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$servicios = $_POST['servicios'];
$descripcion = $_POST['descripcion'];
$horario_apertura = $_POST['horario_apertura'];
$horario_cierre = $_POST['horario_cierre'];
$nombre_categoria = $_POST['role'];
$mapa = $_POST['mapa']; // Captura la URL del iframe

// Verificar si la empresa ya está registrada
$db = new Database();
$conn = $db-> getConnection();

$stmt = $conn->prepare("SELECT id_local FROM locales WHERE nombre_empresa = :nombre_empresa OR nit = :nit");
$stmt->bindParam(':nombre_empresa', $nombre_empresa);
$stmt->bindParam(':nit', $nit);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    echo "<script>alert('Empresa registrada'); window.location.href = '../Views/localadmi.php';</script>";
    exit; // Asegúrate de salir después de la redirección
}

// Insertar en la base de datos
$sql = "INSERT INTO locales (nombre_empresa, nit, direccion, telefono, servicios, descripcion,  horario_apertura, horario_cierre, categoria_id, mapa) VALUES (:nombre_empresa, :nit, :direccion, :telefono, :servicios, :descripcion, :horario_apertura, :horario_cierre, (SELECT categoria_id FROM categorias WHERE nombre_categoria = :nombre_categoria), :mapa)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':nombre_empresa', $nombre_empresa);
$stmt->bindParam(':nit', $nit);
$stmt->bindParam(':direccion', $direccion);
$stmt->bindParam(':telefono', $telefono);
$stmt->bindParam(':servicios', $servicios);
$stmt->bindParam(':descripcion', $descripcion);
$stmt->bindParam(':horario_apertura', $horario_apertura);
$stmt->bindParam(':horario_cierre', $horario_cierre);
$stmt->bindParam(':nombre_categoria', $nombre_categoria);
$stmt->bindParam(':mapa', $mapa); // Inserta la URL del iframe
$stmt->execute();

echo "<script>alert('Negocio registrado exitosamente'); window.location.href = '../Views/localadmi.php';</script>";
exit; // Asegúrate de salir después de la redirección
?>
