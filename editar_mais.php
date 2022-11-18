<?php
    include 'carrinho.class.php';
    session_start();

    $_SESSION['carrinho'][$_GET['codigo']] -> AlterarQuantidade("mais");

    header("Location: listar.php");
?>