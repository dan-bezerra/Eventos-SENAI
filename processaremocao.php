<?php

require_once 'init.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $eventoDeletado = $_POST;

    unset($_SESSION['eventos']['id']);

    header("Location: index.php");
    exit;
}

?>

<html>
    <head>

    </head>
    <body>
        <form action="edicao.php" method="POST">
            <input type="text" name="id" id="id" value="<?= $_GET['id'] ?>" hidden>
            <label for="titulo">Título: </label>
            <input type="text" name="titulo" id="titulo" value="<?= $eventoDeletado['titulo'] ?>">
            <br>

            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao" id="descricao" value="<?= $eventoDeletado['descricao'] ?>">
            <br>

            <label for="area">Área: </label>
            <input type="text" name="area" id="area" value="<?= $eventoDeletado['area'] ?>">
            <br>

            <label for="local">Local: </label>
            <input type="text" name="local" id="local" value="<?= $eventoDeletado['local'] ?>">
            <br>

            <label for="responsavel">Responsável: </label>
            <input type="text" name="responsavel" id="responsavel" value="<?= $eventoDeletado['responsavel'] ?>"> 

            <button type="submit">Remover</button>

            <?php 
                if(isset($_GET['erro']) && $_GET['erro'] !== ""){
                    echo "<p>Erro detectado: {$_GET['erro']}</p>";
                }
            ?>
        </form>
    </body>
</html>