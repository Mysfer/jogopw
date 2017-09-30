<?php
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

    <p>seu nome: <?=$_SESSION['nome']?></p> 
    <p>Suas tentativas: <?=$_SESSION['tentativas']?>
    <center>
    <div class="container">
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

