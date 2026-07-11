<?php

require_once __DIR__ . '/../config/database.php';

class ContactoModel
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }
    public function create(array $data): bool
    {
        $stmt = $this->db->prepare(
            'INSERT INTO contacto (nombre, email, telefono, asunto, mensaje)
             VALUES (:nombre, :email, :telefono, :asunto, :mensaje)'
        );

        return $stmt->execute([
            ':nombre'   => $data['nombre'],
            ':email'    => $data['email'],
            ':telefono' => $data['telefono'],
            ':asunto'   => $data['asunto'],
            ':mensaje'  => $data['mensaje'],
        ]);
    }
}
