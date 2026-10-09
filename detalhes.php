<?php

require_once 'init.php';

$IDevento = $_GET['id'];
$eventoExiste = false;

if(isset($_SESSION['eventos'][$IDevento])){
    $eventoExiste = true;
    $eventoAtual = $_SESSION['eventos'][$IDevento];
}

?>

<html>
    <head></head>
    <body>

        <h1>SENAI-Eventos</h1>
        <nav>
            <a href="index.php">Home</a>
        </nav>
        <?php if($eventoExiste): ?>
            <h1><?= $eventoAtual['titulo'] ?></h1>
            <h3><?= $eventoAtual['descricao']?></h3>
            <p><b>Área: </b><?= $eventoAtual['area'] ?></p>
            <p><b>Data: </b> <?= $eventoAtual['data'] ?></p>
            <p><b>Início: </b> <?= $eventoAtual['inicio'] ?> <b>Fim: </b><?= $eventoAtual['fim'] ?></p>
            <p><b>Local: </b> <?= $eventoAtual['local'] ?></p>
            <p><b>Responsável: </b> <?= $eventoAtual['responsavel'] ?></p>
        <?php else: ?>
            <h1>Erro: Evento não encotrado. Clique em Home para retornar à página inicial.</h1>
        <?php endif; ?>
    </body>
</html>