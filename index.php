<?php

 
$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'Controller/Personagens_Controller.php';

include 'Controller/UsuarioController.php';

switch($uri_parse)
{

    case '/personagens':
        Personagens_Controller::index();
    break;

    case '/personagens/form':
        Personagens_Controller::form();
    break;

    case '/personagens/save':
       Personagens_Controller::save();
    break;

    case '/personagens/delete':
       Personagens_Controller::delete();
    break;


    
     case '/usuario':
        UsuarioController::index();
    break;

    case '/usuario/form':
        UsuarioController::Form();
    break;

    case '/produto/':
        UsuarioController::save();
    break;

    case '/produto/delete':
        UsuarioController::delete();
    break;

}