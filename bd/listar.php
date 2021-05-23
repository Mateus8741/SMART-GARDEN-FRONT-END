<?php
include_once "conexao.php";
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

?>
