<?php
//rotas da aplicação
//a variável $uri já contém os dados da rota solicitada

switch ($uri) {


    case '/cadastro':
        
        require './app/views/cadastro.php';
        break;
    
    case '/salvar':
           
        $testeController->salvar();
        break;
    
    case '/consultar':
            
        $testeController->consultar();
        break;

    default:
        die('Essa rota não é valida');
        break;
}
