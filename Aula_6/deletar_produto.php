<?php

include('../Connections/connection.php');

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $cod_sql = "DELETE FROM produtos WHERE id='$id'";

    if($mysqli->query($cod_sql) === TRUE)
    {
        header('Location: lista_produtos.php');
        exit();
    }
    else
    {
        echo 'DEU RUIM :('. $mysqli->error;
    }
}
$mysqli->close();
?>