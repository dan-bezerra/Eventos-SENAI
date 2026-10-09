<?php

require_once 'init.php';

?>

<html>
    <head></head>
    <body>
        <h1 style="color:red">Evento-SENAI - Cadastro 📃 </h1>

        <form action="validacaoCad.php" method="POST">

             <label for="titulo">Titulo:</label>
            <input type="text" name="titulo" id="titulo">
            <br>

             <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" id="descricao">
            <br>

             <label for="area">Área:</label>
            <input type="text" name="area" id="area">
            <br>

            <label for="data">Data: </label>
            <input type="date" name="data" id="data"> 
            <br>

            
            <label for="inicio">Início:</label>
            <input type="time" name="inicio" id="inicio">
            <br>

              
            <label for="fim">Fim:</label>
            <input type="time" name="fim" id="fim">
            <br>

              
            <label for="local">Local:</label>
            <input type="text" name="local" id="local">
            <br>
              
            <label for="responsavel">Responsável:</label>
            <input type="text" name="responsavel" id="responsavel">
            <br>

            <button type="submit">Validar</button>

        </form>
    </body>
</html>