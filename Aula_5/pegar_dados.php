<?php
include('../Connections/connection.php');
$codigo_sql = "SELECT * FROM pessoas";
$resultado = $mysqli->query($codigo_sql);

if ($resultado->num_rows > 0)
{
    
    while($row = $resultado -> fetch_assoc())
    {
        $nome = $row['Nome']; 
        $sobrenome = $row['Sobrenome'];
        $data_nascimento = $row['Data_Nasc'];

        echo '<tr>
                <td class="table-success">'. $nome . '</td>
                <td>'. $sobrenome . '</td>
                <td class="table-info">'. $data_nascimento . '</td>
            </tr>';
    }
}
$mysqli->close();

?>