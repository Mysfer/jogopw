<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/bootstrap.css">

    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
        <thead>
        
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Idade</th>
                
            </tr>
        </thead>

        <tbody>
            <?php foreach($dados as $d) { ?>
            <tr>
                <td><?= $d['id'] ?></td>
                <td><?= $d['nome'] ?></td>
                <td><?= $d['idade'] ?></td>
                
            </tr>
            <?php  } ?>
        </tbody>
    </table>
</body>
</html>