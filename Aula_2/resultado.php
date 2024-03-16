<?php
include('conexao.php');

if (isset($_POST['email']) || isset($_POST['pass']))
{
    if( isset($_POST['email']) == 0)
    {
        echo 'Preencha seu e-mail';
    }
    if( isset($_POST['pass']) == 0)
    {
        echo 'Preencha sua senha';
    }
    else
    {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $sql_codigo = "SELECT * FROM dados WHERE email = '$email' AND senha = '$pass'";

        $sql_query = $mysqli ->query($sql_codigo) or die('Falha de execução:'.$mysqli->error);
        $quantidade = $sql_query-> num_rows;

        if ($quantidade == 1)
        {
            $usuário = $sql_query->fetch_assoc();
            var_dump($usuário['nome']);
            var_dump($usuário['id']);
        }
        else
        {
            echo "Falha ao logar!!!";
        }
    }
}
?>