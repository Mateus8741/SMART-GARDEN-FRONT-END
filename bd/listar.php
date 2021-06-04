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

<div class="card-pc">
         <div class="box-pc">
            <div class="content-pc">
               <div class="listas">
                  <ul>
                     <li>
                        <h2>Lote: <p><?=$row_lote['nome_lote'];?></p></h2>
                     </li>
                     <li>
                        <h2>Área de Irrigação: <p><?=$row_lote['area_em_m3']."m²";?></p></h2>
                     </li>
                     <li>
                        <h2>Horário de Irrigação:<p><?="<br> ".$row_lote['horario'];?></p></h2>
                     </li>
                     <li>
                        <h2><?php 
                          if($row_lote['horario']<$hora_atual){
                            echo"Estado Atual: <p>Irrigado ✓</p>";
                          }else{
                           echo" Estado Atual: <p>Não Irrigado</p>";
                          }
                        ?></h2>
                     </li>
                     <li id="noborder"><a href="#" id="edt">Editar</a>
                        <a href="./bd/deletar_lote.php?id=<?php echo $row_lote['id'];?>" id="excl">Excluir</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>

 <?php }

?>

