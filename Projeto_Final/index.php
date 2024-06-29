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
        <form action=""></form>
        <div class="user">
            <label id="lnome" for="">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="  Usuário">
        </div>
        <div class="modulo">
            <label id="lmodulo" for="">Módulo</label>
            <select name="escolha" id="es">
              <option value="scratch">Scratch</option>
              <option value="magicavoxel">MagicaVoxel</option>
              <option value="unity">Unity</option>
              <option value="arduino">Arduino</option>
              <option value="construct">Construct3</option>
              <option value="python">Python</option>
              <option value="php">PHP</option>
              <option value="microbit">Microbit</option>
              <option value="piskel">Piskel</option>
              <option value="html">HTML</option>
            </select>
        </div>
        <div class="btns" >
            <button type="submit"  id="bconfirmar">Confirmar</button>
            <button type="reset" id="blimpar">Limpar</button>
        </div>
    </section>
</body>
</html>