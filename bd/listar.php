<?php
include_once "conexao.php";
date_default_timezone_set('Brazil/East');
?>

<?php
    //Receber Numero da Página
      $pagina_atual = filter_input(INPUT_GET,'pagina',FILTER_SANITIZE_NUMBER_INT);

      $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
    //Setar a quantidade de itens por Página
      $qtd_result_pag = 8;

    //Calcular Inicio da Visualização
    $inicio = ($qtd_result_pag * $pagina) - $qtd_result_pag;



    
   $result_lotes = $pdo->query("SELECT * FROM lote LIMIT $inicio,$qtd_result_pag");


  $hora_atual = date("H:i:s");
 
  
  while ($row_lote = $result_lotes->fetch(PDO::FETCH_ASSOC)) {?>

    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

   <div class="box-part text-center">
        <div class="card">
            <div class="card-body">
               <h5 class="card-title"><?= "Lote: ".$row_lote['nome_lote'];?></h5>
            </div>
            <ul class="list-group list-group-flush">
               <li class="list-group-item"><?= "Area de Irrigação: ".$row_lote['area_em_m3']."m²";?></li>
               <li class="list-group-item"><?= "Horário de Irrigação: ".$row_lote['horario'];?></li>
               <li class="list-group-item"><?php 
                    if($row_lote['horario']< $hora_atual){
                      echo "Estado Atual: Irrigado";
                    }else{
                     echo "Estado Atual: Não Irrigado";
                    }
                   ?></li>
            </ul>
            <div class="card-body">
               <a href="#" class="card-link">Editar</a>
               <a href="#" class="card-link" >Excluir</a>
            </div>
         </div>
     </div>
   </div>

 <?php }

?>

