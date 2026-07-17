<?php

require_once __DIR__ . '/../models/indexModel.php';

class IndexController
{
    private IndexModel $model;

    public function __construct()
    {
        $this->model = new IndexModel();
    }

    public function index(): void
    {
        $cursosDestacados = $this->model->getAll();
        require __DIR__ . '/../views/index.php';
    }
}
