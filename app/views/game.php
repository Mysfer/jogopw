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

    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div style="padding-top: 30px;">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dados do jogo</h3>
                        </div>

                        <div class="panel-body">
                            <p>Jogador:
                                <?= $_SESSION['nome'] ?>
                            </p>
                            <p>Tentativas:
                                <?= $_SESSION['tentativas'] ?>
                            </p>
                          
                        </div>
                    </div>

                </div>

            </div>
        </div>
    <div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <center><h1>Desafio do Número!</h1></center>
    <form method="post" action="/game">
                    <div class="form-group">
                       <center> <label for="nome">Digite um número</label></center>
                        <input class="form-control" type="text" name="num" id="num" value="">
                    </div>
                       <center> <button class="btn btn-lg btn-primary" type="">Chutar!</button><center>
    </form>

                        <center><p><?=$msg?></p></center>

    
    </body>
</html>

