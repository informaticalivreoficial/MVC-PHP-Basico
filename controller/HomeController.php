<?php

require ('model/Model.php');
require ('model/User.php');

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
        $user = new User();
        $dados = $user->Login(); 
        include "View/Login.php";
    }
}