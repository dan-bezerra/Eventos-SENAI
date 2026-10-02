<?php

require_once 'init.php';

$eventoDetectada = false; 
$eventoAtual = null;

?>

<html>
    <head>

    </head>
    <body>
    <h1>Eventos SENAI - Remoção</h1>
         <?php
         foreach($_SESSION['eventos'] as $chave => $evento){
            print "
            <li>
                <a href='processaremocao.php?id={$chave}'>
                {$evento['titulo']}
                </a>
            </li>
            ";
         }
         ?>
        <?php if($eventoDetectada): ?>

        <?php else: ?>
            <p>Selecione um dos eventos acima</p>
        <?php endif; ?>
    </body>
</html>