<?php
    include 'header.php';
    include 'produto.class.php';
    include 'carrinho.class.php';

    session_start();
    echo '
      <h3 style="padding-top:30px; padding-bottom:20px; color:#3F1631;">Ítens do Carrinho</h3>
      <table class="table">
      <thead>
          <tr>
              <th scope="col" style="color: #3F1631;">Imagem</th>
              <th scope="col" style="color: #3F1631;">Descrição</th>
              <th scope="col" style="color: #3F1631;">Quantidade</th>
              <th scope="col" style="color: #3F1631;">Valor </th>
              <th scope="col" style="color: #3F1631;">Total </th>
              <th scope="col" style="color: #3F1631;">Ações </th>
          </tr>
      </thead>
      <tbody>';
      if($_SESSION['carrinho'] != null){  
        foreach ($_SESSION['carrinho'] as $chave => $valor) {

            echo '
                <tr>
                    <td><img src="'.$valor->img.'" style= "width: 5rem; height: 5rem;"></td>
                    <td>'.$valor->desc.'</td>
                    <td>
                    
                        <div class="d-flex">
                            <div >
                                <a href="editar_mais.php?codigo='.$chave.'" type="button" style="margin-top: 5px; margin-left: -10px" class="btn btn-light" ><b><i class="bi bi-dash-lg">-</i></b></a>
                            </div>
                                
                            <div style="margin-top: 10px; margin-bottom: 10px; margin-left: 15px; margin-right: 15px" class="text-align-center">
                                <b><p>'.$valor->qtd.'</p></b>
                            </div>
                            
                            <div >
                                <a href="editar_menos.php?codigo='.$chave.'" type="button" style="margin-top: 5px; margin-left: 5px" class="btn btn-light" style="background-color:#3F1631" ><b><i class="bi bi-plus-lg">+</i></b></a>
                            </div>
                        </div>
                    
                    </td>
                    <td>'.$valor->preco.'</td>
                    <td>R$ '.$valor->total.'</td>
                    <td>
                        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#d'.$chave.'">
                        Excluir
                        </button>

                    </td>
                </tr>
            ';


          echo '
            <div class="modal fade" id="d'.$chave.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Deseja excluir?</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" style="color: white; background-color: #3F1631;" data-bs-dismiss="modal">Close</button>
                                <a href="excluir.php?codigo='.$chave.'" class="btn btn-light" style="color: #3F1631; background-color: white;">Excluir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  
                ';
        }
        
      }  else{
                echo '
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            ';}
        
    
    echo '
         
        </tbody>
        
        </table>
        <a href="limpar.php" class="btn btn-light" style="color: white; background-color: #3F1631;">Limpar Carrinho</a>
    ';
    
    // /*Soma o valor de todos os produtos presentesno carrinho de compras. Exibe o total.*/
    //     function total() {
    //     if(is_array($this->$produto))
    //     foreach($this->$produto as $produto)
    //     $total += $produto->get_valor();
        
    //     echo 'Total: R$ ' . $total;
    //     }


    include 'footer.php';
?>