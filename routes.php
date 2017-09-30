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

<<<<<<< HEAD
    case '/enviar';
        $testeController->enviar();
        break;

    case '/pontuacao';
        $testeController->pontuacao();
        break;


=======
>>>>>>> 5e62e4033c85bff9d964290d28f4937864cf39c2
    default:
        die('ERRO 404');
        break;
}
