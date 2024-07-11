<?php

if (isset($_POST["escolha"])){
    $escolha = $_POST["escolha"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="modulo.css">
</head>
<body>
    <a href="index.php">
        <img src="imagens/<?php echo $escolha?>.png" alt="">
    </a>
</body>
</html>