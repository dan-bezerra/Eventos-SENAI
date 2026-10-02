<?php

session_start();

if (!isset($_SESSION['eventos'])) {
    $_SESSION['eventos'] = [
        1 => [
            'id' => 1,
            'titulo' => 'Oficina de PHP',
            'descricao' => 'Crie páginas dinâmicas com PHP.',
            'area' => 'Tecnologia da Informação',
            'data' => '2026-10-20',
            'inicio' => '09:00',
            'fim' => '10:00',
            'local' => 'Laboratório 1',
            'responsavel' => 'Prof. Carlos'
            ],
        2 => [
            'id' => 2,
            'titulo' => 'Introdução à Robótica',
            'descricao' => 'Conheça sensores e programe um robô.',
            'area' => 'Automação',
            'data' => '2026-10-20',
            'inicio' => '10:30',
            'fim' => '11:30',
            'local' => 'Laboratório 2',
            'responsavel' => 'Profa. Ana'
            ]
        ];
    $_SESSION['proximo_id'] = 3;
}