<?php

include('../Connections/connection.php');

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

        $sql_code = "SELECT * users WHERE user = '$name_user' AND password = '$pass_user'";

        $sql_result = $misqli->query($sql_code);    
        
        $quantidade_linhas = $sql_rsult->num_rows;
        
        var_dump($quantidade_linhas);
     }
}

?>