<?php

require "Model/Model.php";

class Controller
{
    public function index()
    {
        $model = new Model();
        $dados = $model->ListarDados();
        include "View/View.php"
    }
}