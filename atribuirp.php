<?php
    session_start();
    include 'produto.class.php';

    $p1 = new produto; 
    $p2 = new produto; 
    $p3 = new produto; 
    $p4 = new produto;
    $p5 = new produto;
    $p6 = new produto;
    $p7 = new produto;
    $p8 = new produto;

    $p1->codigo = "1";
    $p1->desc = 'Orquidea Rosa';
    $p1->preco = 80.00;
    $p1->img = 'img/orquideaBranca.jpg';
    $p1->qtd = 1;

    $p2->codigo = "2";
    $p2->desc = 'Hortências';
    $p2->preco = 15.00;
    $p2->img = 'img/hortencia.jpg';
    $p2->qtd = 1;

    $p3->codigo = "3";
    $p3->desc = 'Rosas Vermelhas';
    $p3->preco = 50.00;
    $p3->img = 'img/rosaVermelha.jpg';
    $p3->qtd = 1;
    
    $p4->codigo = "4";
    $p4->desc = 'Espada de São Jorge';
    $p4->preco = 150.00;
    $p4->img = 'img/espada.jpg';
    $p4->qtd = 1;

    $p5->codigo = "5";
    $p5->desc = 'Tulipa';
    $p5->preco = 200.00;
    $p5->img = 'img/tulipa.jpg';

    $p6->codigo = "6";
    $p6->desc = 'Orquidea Branca';
    $p6->preco = 280.80;
    $p6->img = 'img/orquideaBranca.jpg';

    $p7->codigo = "7";
    $p7->desc = 'Lirio';
    $p7->preco = 60.00;
    $p7->img = 'img/lirio.jpg';

    $p8->codigo = "8";
    $p8->desc = 'Costela de Adão';
    $p8->preco = 90.00;
    $p8->img = 'img/costela.jpeg';

    

    $produtos = [$p1,$p2,$p3,$p4,$p5,$p6,$p7,$p8];
    $_SESSION['produtos'] = $produtos;

?>