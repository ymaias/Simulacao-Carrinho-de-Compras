<html><header><title>Produtos</title></header></html>

<?php
    include 'header.php';
    include 'atribuirp.php';
    
?>

<h1 class="text-center mt-5" style="color: #3F1631; padding-bottom: 40px;">Ornamentações Para Sua Casa</h1>
<div class="d-flex flex-wrap justify-content-center">

    <?php
        foreach ($_SESSION['produtos'] as $chave => $valor) {
            echo '

            <div class=""d-flex flex-wrap justify-content-center">
                <div class="row">
                    <div class="col">
                        <div class="i card col-lg-6" style="width: 18rem; margin:20px;">
                            <img src="'.$valor->img.'" class="card-img-top" alt="...">
                            <div class="card-body">
                                <center>
                                    <h5 class="card-title">'.$valor->desc.'</h5>
                                    <p class="card-text">R$'.$valor->preco.'</p>
                                    <a href="inserir_produto.php?codigo='.$chave.'" class="btn btn btn-light" style="color: #3F1631; background-color:#DCBFE3;" >Comprar</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';

            // echo '

            // <div class="father" style="display:flex; flex-wrap:wrap; justify-content:center; flex-direction:column;">
            //     <div class="card" style="flex: 1 1 150px; margin:5px;">
            //         <img src="'.$valor->img.'" class="card-img-top" alt="...">
            //         <div class="card-body">
            //             <h5 class="card-title">'.$valor->desc.'</h5>
            //             <p class="card-text">R$'.$valor->preco.'</p>
            //             <a href="inserir_produto.php?codigo='.$chave.'" class="btn btn btn-light" style="color: #3F1631; background-color:#DCBFE3;" >Adicionar</a>
            //         </div>
            //     </div>
            // </div>
            // ';
        }

        
    ?>
</div>
<?php
    include 'footer.php';
?>
