<?php

require_once __DIR__ . '/../config/database.php';

class IndexModel
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function getAll(): array
    {
        $stmt = $this->db->prepare(
            'SELECT id, nombre, descripcion, imagen_url, alt_imagen, enlace
             FROM cursos_destacados
             ORDER BY id ASC'
        );

        $stmt->execute();
        return $stmt->fetchAll();
    }
}
