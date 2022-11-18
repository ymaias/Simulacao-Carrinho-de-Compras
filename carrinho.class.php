<?php
    class carrinho{
        var $codigo;
        var $qtd;
        var $desc;
        var $preco;
        var $img;
        var $total;
        var $totaldaCompra;

        function AlterarQuantidade($tipo){
            if ($tipo == "mais") {
                $this -> qtd--;
                $this -> total -= $this -> preco;
                
            } else{
                $this -> qtd++;
                $this -> total = $this -> preco * $this -> qtd;
            }
        }
    }
?>