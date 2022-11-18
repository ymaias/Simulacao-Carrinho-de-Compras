<?php
    include 'produto.class.php';
    include 'carrinho.class.php';
    
    session_start();

    if (empty($_SESSION['carrinho'])) {
        $produto = new carrinho;
            
            $produto -> codigo = $_SESSION['produtos'][$_GET['codigo']] -> codigo;
            $produto -> desc = $_SESSION['produtos'][$_GET['codigo']] -> desc;
            $produto -> qtd = 1;
            $produto -> preco =  $_SESSION['produtos'][$_GET['codigo']] -> preco;
            $produto -> total =  $_SESSION['produtos'][$_GET['codigo']] -> total;
            $produto -> img = $_SESSION['produtos'][$_GET['codigo']] -> img;
        
            $_SESSION['carrinho'][] = $produto;
    }else {
        
        $validade = false;
        foreach ($_SESSION['carrinho'] as $chave => $valor) {

           
            if ($valor-> codigo == $_SESSION['produtos'][$_GET['codigo']] -> codigo) {
                
                $_SESSION['carrinho'][$chave] -> AlterarQuantidade("menos");
                $validade = true;
                break;
                
            }
        }
        
        if($validade == false){
            $produto = new carrinho;
            
            $produto -> codigo = $_SESSION['produtos'][$_GET['codigo']] -> codigo;
            $produto -> desc = $_SESSION['produtos'][$_GET['codigo']] -> desc;
            $produto -> qtd = 1;
            $produto -> preco =  $_SESSION['produtos'][$_GET['codigo']] -> preco;
            $produto -> total =  $_SESSION['produtos'][$_GET['codigo']] -> total;
            $produto -> img = $_SESSION['produtos'][$_GET['codigo']] -> img;
            $_SESSION['carrinho'][] = $produto; 
        }
    }






    header("Location: produtos.php");
?>