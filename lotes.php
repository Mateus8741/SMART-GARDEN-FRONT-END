<?php
 require './bd/conexao.php';
 if(isset($_SESSION['idUser'])&& !empty($_SESSION['idUser'])):
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Garden</title>
   
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="./css/lote.css">
   <link rel="stylesheet" type="text/css" href="./css/menulateral.css">
</head>
<body>
<div class="navigation">

<ul id="nohover">
   <li>
      <a href="./main.html">
         <span class="icon"></i></span>
         <span class="title">SMART GARDEN</span></a>
   </li>
</ul>
<ul>
   <li>
      <a href="./lotes.php">
         <span class="icon"><i class="fab fa-pagelines fa-2x"></i></span>
         <span class="title">PLANTAÇÔES</span></a>

   </li>
</ul>
<ul>
   <li>
      <a href="./manutenção.html">
         <span class="icon"><i class="fas fa-thermometer-three-quarters fa-2x"></i></span>
         <span class="title">ESTAÇÔES</span></a>

   </li>
</ul>
<ul>
   <li>
      <a href="./sugestao.html">
         <span class="icon"><i class="fas fa-calendar-alt fa-2x"></i></span>
         <span class="title">SUGESTÕES</span></a>
   </li>
</ul>
<ul>
   <li>
      <a href="./perfil.html">
         <span class="icon"><i class="fas fa-address-card fa-2x"></i></span>
         <span class="title">PERFIL</span></a>
   </li>
</ul>
<div>
   <ul>
      <li id="baixo">
         <a href="./index.php">
            <span class="icon"><i class="fas fa-door-open fa-2x"></i></span>
            <span class="title">SIGN OUT</span></a>
      </li>
   </ul>
</div>
</div>

  <div class="container text-center">
    <div class="box">
      <div class="container">
        <h3 class="fazend">Fazenda Ordem Kinkou</h3>
        
        <div class="button-add ">
          <button class="btn btn-primary col-xs-12" data-toggle="modal" data-target=".bd-example-modal-lg">Adicionar</a>
         <a href="<?=BASE_URL."/sair"?>" class="btn btn-danger">Sair</a>
        </div>
       

<!-- ***** Barra de menu lateral ***** -->




<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Área de Plantio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
            <div class="modal-body">
                <div class="col-xs-12 col-sm-12">

                <form class="kpx_loginForm" action="./bd/processaarea.php" autocomplete="off" method="POST">
                    <div class="input-group">
                        <input class="form-control rounded" type="text" name="area_plantio" id="area_plantio" placeholder="Nome da àrea de plantio"
                            required="required">
                        </div>
                        <hr />
                        <div class="input-group">

                        <input class="form-control rounded" type="text" name="endereco" id="endereco" placeholder="Endereço Completo"
                            required="required">
                        </div>

                        <div class="salvar" style="margin-top: 15px;">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </div>
                </form>

                </div>
                
                 <div class="modal-header">
                     <h5 class="modal-title">Lote</h5>
                </div>

                <form class="kpx_loginForm" action="./bd/processalote.php" autocomplete="off" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nome_lote" id="nome_lote" placeholder="Nome do Lote"  required="required">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <input type="number" class="form-control" name="area_em_m3" id="area_irrigacao_m3" placeholder="Área de Irrigação(m²)" required="required">
                        </div>
                        <div class="form-group col-md-6">

                        <select name="area_plantio" id="area_plantio" class="form-control" required>
                        <option value="">Escolher...</option>
                        <option value="opa">opa</option>
                        <option value="opa">opa1</option>
                        <option value="opa">opa2</option>
                        </select>
                       </div>
 </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <input type="number" class="form-control" name="qtd_irrigadores" id="qtd_irrigadores" placeholder="Quantidade de Irrigadores">
                        </div>

                        <div class="form-group col-md-6" >
                        <input style ="align=center" class="form-control" type="time" name="hora" id="hr_irrigacao" required><small>Digite o Horário de Irrigamento</small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>




            </div>
       </div>
    </div>   
</div>

</div>
<div class="row">
    <?php include "./bd/listar.php" ?>

</div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
      </script></body>
</html>
<?php else:header("Location: index.php");endif;