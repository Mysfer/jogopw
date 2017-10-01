<!DOCTYPE html>
<html lang="en">
<head>
    <title>Score</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Tentativas</h1>
                
                <br>
                <table class="table table-striped table-hover ">
                    <thead>
                        <tr>
                            <th>Jogador</th>
                            <th>Tentativas</th>
                            <th>Número</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php foreach ($dados as $d) { ?>
                        
                        <tr>
                           
                            <td>
                                <?= $d['nome'] ?>
                            </td>
                            <td>
                                <?= $d['tentativas'] ?>
                            </td>
                            <td>
                                <?= $d['numero'] ?>
                            </td>   

                        </tr>
                            <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>