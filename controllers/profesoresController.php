<?php
declare(strict_types=1);

require_once __DIR__ . '/../models/profesoresModel.php';

class ProfesoresController
{
    private ProfesoresModel $model;

    public function __construct()
    {
        $this->model = new ProfesoresModel();
    }

    public function index(): void
    {
        $profesores = $this->model->getAll();
        require __DIR__ . '/../views/profesores.php';
    }

    public function show(): void
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if ($id === false || $id === null || $id <= 0) {
            http_response_code(404);
            die('<h2>404 — Profesor no encontrado</h2>');
        }

        $profesor = $this->model->getById($id);

        if ($profesor === null) {
            http_response_code(404);
            die('<h2>404 — Profesor no encontrado</h2>');
        }

        require __DIR__ . '/../views/detalleProfesor.php';
    }
}
