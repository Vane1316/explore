<?php
require_once 'Database.php'; // Incluir la conexión a la base de datos

class CategoriaModel {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    // Obtener todos los locales por ID de categoría
    public function getAllLocalesByCategoria($categoria_id) {
        $query = "SELECT l.id_local, l.nombre_empresa, l.direccion, l.telefono, 
                         l.horario_apertura, l.horario_cierre, 
                         i.img AS imagen_principal 
                  FROM locales l 
                  LEFT JOIN imagenes i ON l.id_local = i.local_id 
                  WHERE l.categoria_id = :categoria_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':categoria_id', $categoria_id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC); // Retornar todos los registros
        } else {
            return []; // Retornar un arreglo vacío si hay un error
        }
    }
}
?>
