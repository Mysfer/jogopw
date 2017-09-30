<?php
namespace Project\Controller;

use Project\Db\QueryBuilder;

class TesteController
{
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

        //caso não insira um valor
        if($num=='')
        {
            $msg='Você não digitou um valor';
            require './app/views/game.php';

        }
        //Caso Numero seja maior que o gerado
        elseif($num>$_SESSION['rand'])
        {
            $msg = "Chute um numero menor";
            $_SESSION['tentativas']++;
            require './app/views/game.php';

        }
        //caso o numero seja menor que o gerado
        elseif($num<$_SESSION['rand'])
        {
            $msg = "Chute um numero maior";
            $_SESSION['tentativas']++;
            require './app/views/game.php';

        }
        //caso o numero seja igual o gerado
        else
        {
            header('Location: /win');
        }
    }

    public function enviar()
    {
        session_start();
        //criar variaveis
        $q = new QueryBuilder();
        $dados = [];
        $dados['nome'] = $_SESSION['nome'];
        $dados['tentativas'] = $_SESSION['tentativas'];
        $dados['numero'] = $_SESSION['rand'];      

        //inserir os dados
        $q->insert('jogo', $dados);

        //chamar a pagina com as pontuações
        header ('Location: /pontuacao');
    }  

    public function pontuacao()
    {
        //criação da variavel responsavel pelo banco de dados
        $q = new QueryBuilder();

        //pegando os dados do banco de dados
        $dados = $q->select('jogo');

        //devolve a pagina com a pontuação
        require './app/views/pontuacao.php';
    }

}