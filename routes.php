<?php
//rotas da aplicação
//a variável $uri já contém os dados da rota solicitada

switch ($uri) {


    case '/':
        
        require './app/views/index.html';
        break;

    case '/game':
        $testeController->game();
        break;

    case '/start':
        $testeController->start();
        break;

    case '/win';
        require './app/views/win.php';
        break;

    case '/banco';
        $testeController->banco();
        break;

    case '/pontuacao';
        require '.app/views/pontuacao.php';
        break;


    default:
        die('ERRO 404');
        break;
}
