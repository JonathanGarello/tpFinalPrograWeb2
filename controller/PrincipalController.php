<?php

class PrincipalController
{
    private $renderer;
    private $model;

    public function __construct($renderer, $model)
    {
        $this->renderer = $renderer;
        $this->model = $model;
    }

    public function index()
    {
        $data["usuarios"] = $this->model->obtenerUsuarios();
        echo $this->renderer->render("view/principal.php", $data);
    }

}