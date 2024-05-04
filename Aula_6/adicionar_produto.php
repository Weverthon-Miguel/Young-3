<?php
//ACESSAR BANCO DE DADOS
include('../Connections/connection.php');
//SE TEM INFORMAÇÃO PARA ADICIONAR
if ($_SERVER['REQUEST_METHOD'] = 'POST')
{
   //PEGÁ-LAS E ADICIONAR EM VARIÁVEIS
   $nome = $_POST['nome'];
   $valor = $_POST['valor'];
   $quantidade = $_POST['quantidade'];

   //CÓDIGO SQL PARA INSERIR -> QUERY
   $sql = "INSERT INTO produtos(id, nome, valor, quantidade) VALUES(NULL, '$nome', '$valor', '$quantidade')";

   //MANDAR PARA O BANCO DE DADOS
   if ($mysqli -> query($sql) == TRUE)
   {
       //REDIRECIONAR PARA A PÁGINA CORRETA(MOSTRAR AS INFORMAÇÕES)
       header('Location: lista_produtos.php');
       exit();
   }
   else
   {
        echo "Deu ruim, só uma farsa;-;". $mysqli-> error;
   }
}


?>