<?php

require_once 'init.php';

?>


<html>
<head>
    <title></title>
</head>
<body>
    <h1>Bem vindo aos Eventos do SENAI</h1>
    <nav>
        <a href="cadastro.php">Cadastrar evento</a>
        <a href="edicao.php">Editar evento</a>
        <a href="remocao.php">Remover evento</a>
    </nav>

    <?php foreach($_SESSION['eventos'] as $chave => $evento): ?>
        <h1><?php echo $evento['titulo'] ?></h1>
        <p><?php echo $evento['descricao'] ?></p>
        <p><?php echo $evento['data'] ?></p>

        <a href="detalhes.php?id=<?=$chave?>">Saiba mais...</a>

    <?php endforeach; ?>
</body>
</html>