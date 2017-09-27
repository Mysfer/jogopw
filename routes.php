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

    default:
        die('ERRO 404');
        break;
}
