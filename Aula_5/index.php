<?php
include('../Connections/connection.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="conteiner vh-100 vw-100 d-flex justify-content-center align-items-center">
    <div>
        <table class="table table-info vh-100 d-flex justify-content-center align-items-center">
            <tr class="table-primary">
                <th >Nome</th>
                <th>Sobrenome</th>
                <th>Data de Nascimento</th>
            </tr>
            <?php
               //REPETIR ALGUM CÓDIGO
               include('pegar_dados.php')
            ?>
        </table>
    </div>
</body>
</html>