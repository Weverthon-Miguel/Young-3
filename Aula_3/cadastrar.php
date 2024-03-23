<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $senha = $_POST['sobrenome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO `clientes` (`id`, `nome`, `sobrenome`, `senha`, `email`) VALUES (NULL, '$nome', '$sobrenome', '$senha', '$email');";

    if($mysqli->query($sql) === TRUE)
    {
        echo 'Cadastro realizado com sucesso!!!';
    }
    else
    {
        echo 'Deu ruim'. $mysqli ->error;
    }
}
$mysqli->close();
?>