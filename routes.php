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

    case '/enviar';
        $testeController->enviar();
        break;

    case '/pontuacao';
        $testeController->pontuacao();
        break;

    default:
        die('ERRO 404');
        break;
}
