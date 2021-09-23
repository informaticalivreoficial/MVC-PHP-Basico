<?php

require ('controller/HomeController.php');

$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'index';

$controle = new HomeController();

switch($pagina){

    case 'home':
        $controle->Home();
    break;

    case 'atendimento':
        $controle->Atendimento();
    break;

    case 'login':
        $controle->Login();
    break;

}