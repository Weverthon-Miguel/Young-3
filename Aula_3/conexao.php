<?php
// SEMPRE PASSAR 4 INFORMAÇÕES
$servidor = 'localhost';
$banco_de_dados = 'cadastrar';
$usuário = 'root';
$senha = ''; 

$mysqli = new mysqli($servidor, $usuário, $senha, $banco_de_dados);

if ($mysqli -> error){
    die('Falha ao conectar ao banco de dados!!!');
}
?>