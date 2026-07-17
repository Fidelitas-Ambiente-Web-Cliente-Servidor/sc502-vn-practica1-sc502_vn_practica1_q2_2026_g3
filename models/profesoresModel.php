<?php
declare(strict_types=1);

require_once __DIR__ . '/../config/database.php';

class ProfesoresModel
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function getAll(): array
    {
        $stmt = $this->db->prepare('SELECT * FROM profesores ORDER BY id ASC');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getById(int $id): ?array
    {
        $stmt = $this->db->prepare('SELECT * FROM profesores WHERE id = :id LIMIT 1');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        
        $resultado = $stmt->fetch();
        return $resultado !== false ? $resultado : null;
    }
}
