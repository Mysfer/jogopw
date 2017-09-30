<?php
session_start();
echo "voce ganhou"."<br>";
echo $_SESSION['nome'] . "<br>";
echo $_SESSION['tentativas'] . "<br>";
echo $_SESSION['rand'] . "<br>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form method="post" action="/pontuacao">
                        <button class="btn btn-lg btn-primary" type="">Enviar</button>     

    </body>
</html>