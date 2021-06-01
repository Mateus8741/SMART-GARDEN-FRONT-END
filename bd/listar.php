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

      $result_usuarios = "SELECT * FROM lote LIMIT $inicio,$qtd_result_pag";
      $resultado_lotes = mysqli_query($conn,$result_usuarios);

  //   //Paginação - Somar a Quantidade de Usuarios
  //  $result_pag = "SELECT COUNT(id) AS num_result FROM lote";
  //  $resultado_pag = mysqli_query($conn, $result_pag);
  //  $row_pag = mysqli_fetch_assoc($resultado_pag);

  //  //quantidade de Resultados
  //  //echo $row_pag['num_result'];

  //  $qtd_pag = ceil($row_pag['num_result']/$qtd_result_pag);

  //  //limitar links antes e depois
  //   $max_links = 2;
  //     echo "<a href='listar.php?pagina=1'>Primeira</a>";

  //     for($pag_anterior = $pagina - $max_links;$pag_anterior <= $pagina - 1;$pag_anterior++){
  //         if($pag_anterior>=1){
  //              echo "<a href='listar.php?pagina=$pag_anterior'>$pag_anterior</a>";
  //         }
       
  //     }

  //     echo $pagina;

  //     for($pag_posterior = $pagina + 1 ;$pag_posterior <= $pagina + $max_links;$pag_posterior++){
  //       if($pag_posterior<=$qtd_pag){
  //           echo "<a href='listar.php?pagina=$pag_posterior'>$pag_posterior</a>";
  //      }
  //   }
  //     echo "<a href='listar.php?pagina=$qtd_pag'>Ultima</a>";
  $hora_atual = date("H:i:s");
  while($row_lote = mysqli_fetch_assoc($resultado_lotes)){?>
    <div class="card-pc">
       <div class="box-pc">
          <div class="content-pc">
             <div class="listas">
                <ul>
                   <li>
                      <h2><?= "Lote: ".$row_lote['nome_lote'];?></h2>
                   </li>
                   <li>
                      <p><?= "Area de Irrigação: ".$row_lote['area_em_m3']."m²";?></p>
                   </li>
                   <li>
                      <p><?= "Horário de Irrigação: ".$row_lote['horario'];?></p>
                   </li>
                   <li>
                    
                   <p><?php 
                    if($row_lote['horario']> $hora_atual){
                      echo "Estado Atual: Irrigado";
                    }else{
                     echo "Estado Atual: Não Irrigado";
                    }
                   ?></p>
                   </li>
                   <li id="noborder"><a href="" id="edt">Editar</a>
                      <a href="#" id="edt">Favoritar</a><i class="fas fa-star" style="filter: invert(100%);"></i></li>
                </ul>
             </div>
          </div>
       </div>
    </div>

 <?php }

?>
