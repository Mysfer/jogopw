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

    public function start()
    {
        session_start();
        $_SESSION['nome'] = isset($_POST['nome']) ? $_POST['nome'] :'';
        $_SESSION['rand'] = rand(0,1000);
        $_SESSION['tentativas'] = 0;
        $msg='';
        // header('Location: /game');
        require './app/views/game.php';

    }

    public function game()
    {
        //Inicia Sessão
        session_Start();

        //Recebe e cria as variaveis
        $num = isset($_POST['num']) ? $_POST['num'] :'';
        $msg='';

        //Dica
        if($num=='')
        {
            $msg='Você não digitou um valor';
            require './app/views/game.php';

        }

        elseif($num>$_SESSION['rand'])
        {
            $msg = "Chute um numero menor";
            $_SESSION['tentativas']++;
            require './app/views/game.php';

        }

        elseif($num<$_SESSION['rand'])
        {
            $msg = "Chute um numero maior";
            $_SESSION['tentativas']++;
            require './app/views/game.php';

        }

        else
        {
            header('Location: /win');

        }
    }
}
