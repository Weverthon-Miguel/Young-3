<?php

include('connection.php');

//INICIAR SESSÃO
session_start();

if (isset($_SESSION['user']))
{
    header('Location: painel.php');
}
else
{
     if(isset($_POST['user']) && isset($_POST['password']))
     {
        $name_user = $_POST['user'];
        $pass_user = $_POST['password'];

        $sql_code = "SELECT * FROM users WHERE nome = '$name_user' AND senha = '$pass_user'";

        $sql_result = $mysqli->query($sql_code);    
        
        $quantidade_linhas = $sql_result->num_rows;
        if ($quantidade_linhas == 1) {
            $result = $sql_result->fetch_assoc();
           $_SESSION['id_user'] = $result['id'];
            header('Location: ../Projeto_Final/index.php');
        }
     }
}

?>