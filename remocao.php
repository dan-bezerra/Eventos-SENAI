<?php

require_once 'init.php';

$eventoDetectado = false;
$eventoSelecionado  = null;

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])){
    $id = $_GET['id'];
    $eventoDetectado = true;
    $eventoSelecionado = $_SESSION['eventos'][$id];
};

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];

    unset($_SESSION['eventos'][$id]);

    header(Location: index.php);
}

?>

<html>
    <head>

    </head>
    <body>
        <h1>EVENTOS SENAI - Remoção</h1>
        
        <ul>
            <?php 
            if (isset($_SESSION['eventos']) && $_SESSION['eventos']){
            foreach ($_SESSION['eventos'] as $chave => $eventos){ 
                print"
                <li>
                <a href='remocao.php?id={$chave}'>{$eventos['titulo']}</a>
                </li>
                <br>";
            }
                } else {
                    print "Nenhum evento cadastrado!";
                } 
                ?>
        </ul>

        <?php if($eventoDetectado): ?>

        <h2>Evento selecionado:</h2>
        <table>
            <tr>
                <td>
                    <h4><?= $eventoSelecionado['titulo']?></h4>
                </td>
            </tr>
            <tr>
                <td>
                    <h4><?= $eventoSelecionado['descricao']?></h4>
                </td>
            </tr>
            <tr>
                <td>
                    <h4><?= $eventoSelecionado['data'] ?></h4>
                </td>
            </tr>
            <tr>
                <td>
                    <h4><?= $eventoSelecionado['responsavel'] ?></h4>
                </td>
            </tr>
        </table><br>
        <form action="remocao.php" method="POST">
            <input type="text" name="id" id="id" value="<?= $_GET['id']?>" hidden>
            <button type="submit">Deletar?</button>
        </form>
        <?php else: ?>
            <p>Selecione um dos eventos!</p>
        <?php endif; ?>

   </body>
</html>