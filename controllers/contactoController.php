<?php

require_once __DIR__ . '/../models/contactoModel.php';

class ContactoController
{
    private ContactoModel $model;

    public function __construct()
    {
        $this->model = new ContactoModel();
    }

    public function index(): void
    {
        $enviado = isset($_GET['enviado']);
        require __DIR__ . '/../views/contacto.php';
    }

    public function store(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405);
            die('<h2>405 — Método no permitido</h2>');
        }

        $data = $this->sanitizeInput($_POST);

        $errores = $this->validar($data);

        if (!empty($errores)) {
            $error = implode(' ', $errores);
            require __DIR__ . '/../views/contacto.php';
            return;
        }

        $this->model->create($data);

        header('Location: index.php?controller=contacto&action=index&enviado=1');
        exit;
    }

    private function sanitizeInput(array $input): array
    {
        $campos = ['nombre', 'email', 'telefono', 'asunto', 'mensaje'];
        $limpio = [];

        foreach ($campos as $campo) {
            $limpio[$campo] = htmlspecialchars(trim($input[$campo] ?? ''), ENT_QUOTES, 'UTF-8');
        }

        return $limpio;
    }

    private function validar(array $data): array
    {
        $errores = [];

        if (mb_strlen($data['nombre']) < 5 || !preg_match('/^[a-zA-ZÀ-ÿ\s]+$/u', $data['nombre'])) {
            $errores[] = 'El nombre debe tener al menos 5 caracteres y solo contener letras.';
        }

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errores[] = 'El correo electrónico no tiene un formato válido.';
        }

        if (!preg_match('/^[0-9]{8,}$/', $data['telefono'])) {
            $errores[] = 'El teléfono debe contener solo números y al menos 8 dígitos.';
        }

        if (mb_strlen($data['asunto']) < 3) {
            $errores[] = 'El asunto debe tener al menos 3 caracteres.';
        }

        if (mb_strlen($data['mensaje']) < 20) {
            $errores[] = 'El mensaje debe tener al menos 20 caracteres.';
        }

        return $errores;
    }
}
