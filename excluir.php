<?php
    include 'carrinho.class.php';
    session_start();  
    unset($_SESSION['carrinho'][$_GET['codigo']]);
    header("Location: listar.php");
?>