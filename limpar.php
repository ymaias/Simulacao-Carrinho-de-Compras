<?php
  include 'carrinho.class.php';
  
  session_start();
  $_SESSION['carrinho'] = null;

  header("Location: listar.php");
?>