<?php
    $msg = '';
        $num = isset($_POST['num']) ? $_POST['num'] :'';
        $contador = 0;
        //Controle
        if($num == ''){
        }
        elseif($num>$rand){
            $msg = 'Chute um valor menor';
            $contador++;
        }
        elseif($num<$rand){
           $msg = 'Chute um valor maior';
            $contador++; 
        }
        else{
           require './app/views/salvar.php'; 
        }
?>

<!DOCTYPE html>
<html lang="en">
       <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/bootstrap.css">
    <title>Jogo PW</title>
    <body>

    <p>seu nome: <?=$name?></p>
    <p>Seu placar: <?=$contador?></p>
    <center>
    <div class="<con></con>tainer">
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1>Desafio do Número!</h1>
    <form method="post" action="/game">
                    <div class="form-group">
                        <label for="nome">Digite um número</label>
                        <input class="form-control" type="text" name="num" id="num" value="">
                    </div>
                        <button class="btn btn-lg btn-primary" type="">Chutar!</button>     
    </form>

                        <p><?=$msg?>     

    
    </body>
</html>

