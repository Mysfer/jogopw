<?php
namespace Project\Controller;

use Project\Db\QueryBuilder;

class TesteController
{

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

    public function banco()
    {
        //criar variaveis
        $dados = [];
        $dados['nome'] = $_SESSION['nome'];
        $dados['tentativas'] = $_SESSION['tentativas'];
        $dados['numero'] = $_SESSION['rand'];
        $q = New QueryBuilder;

        //inserir os dados
        $q->insert('jogo',$dados);

        //chamar a pagina com as pontuações
        require './app/views/pontuacao.php';
    }  
}
