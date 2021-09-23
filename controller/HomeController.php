<?php

require ('model/Model.php');

class HomeController 
{
    
    public function Home()
    {
        $model = new Model();
        $dados = $model->ListarDados();
        include "View/Home.php";
    }

    public function Atendimento()
    {
        $model = new Model();
        $dados = $model->ListarDados();
        include "View/Atendimento.php";
    }

    public function Login()
    {
        $model = new Model();
        $dados = $model->ListarDados();
        include "View/Login.php";
    }
}