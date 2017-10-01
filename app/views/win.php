<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Win</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/bootstrap.css">
<body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <center><h1 class="alert-success">Você Ganhou!</h1></center>
                    <div class="well">
                         <p>Nome:
                        <?= $_SESSION['nome'] . "<br>"?>
                    </p>
                    <p>Tentativas:
                        <?= $_SESSION['tentativas'] . "<br>"?>
                    </p>
                    <p>O número era:
                        <?= $_SESSION['rand'] . "<br>";?>
                    </p>
                   
                </div>

                <div id="painel">
                    <form method="post" action="/enviar">
                        <button type="submit" class="btn btn-primary btn-lg center-block">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>