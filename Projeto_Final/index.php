<?php
include('../Login/connection.php');

session_start();
$id_usuario = $_SESSION['id_user'];
$sql = "SELECT * FROM modulos WHERE id_usuario = '$id_usuario'";
$resultado = $mysqli->query($sql);
$dados = $resultado->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="Script.js" defer></script>
</head>
<body>
    
    <section class="painel">
        <h1>Confira os Módulos</h1>
        <form action="logout.php"></form>
        <div class="user">
            <label id="lnome" for="">Nome</label>
            <input readonly type="text" name="nome" id="nome" placeholder="<?php echo $dados['nome']?>">
        </div>
        <div class="modulo">
            <label id="lmodulo" for="">Módulo</label>
            <select name="escolha" id="es">
                <?php               
                    echo '<option value="'.$dados['m1'].'">'.$dados['m1'].'</option>';
                    echo '<option value="'.$dados['m2'].'">'.$dados['m2'].'</option>';
                    echo '<option value="'.$dados['m3'].'">'.$dados['m3'].'</option>';
                ?>
            </select>
        </div>
        <div class="btns" >
            <button type="submit"  id="bconfirmar">Confirmar</button>
            <button type="submit" id="blimpar" href="logout.php">Sair</button>     
        </div>
    </section>
</body>
</html>