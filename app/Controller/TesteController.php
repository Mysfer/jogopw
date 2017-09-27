<?php

namespace Project\Controller;

use Project\Db\QueryBuilder;

class TesteController
{

    public function imprimir()
    {
       $dado = $_POST['dado'];
       $resultado = $dado % 2 == 0 ? 'Par' : 'Impar';

       require './app/views/imprime.php';
    }

    public function salvar()
    {
        //receber os dados
        $dados['nome'] = $_POST['nome'];
        $dados['idade'] = $_POST['idade'];

        //conectar com o banco
        $q = new QueryBuilder();

        //enviar os dados para o banco
        $q->insert('alunos', $dados);

        //devolver uma pagina com mensagem de ok
        // require './app/views/foi.php';

        //redirecionar para a rota /cadastro
        header('Location: /cadastro');
        
        
    }

    public function consultar()
    {
        //conexao com banco
        $q = new QueryBuilder();

        //busca os dados, guarda em uma var
        $dados = $q->select('alunos');
        
        // print_r($dados);
        // die();
        
        //chama a view
        require './app/views/consultar.php';

    }

    public function game()
    {
        $rand = 182;
        $nome = isset($_POST['nome']) ? $_POST['nome'] :'';
        require './app/views/game.php'; 
    }
}
