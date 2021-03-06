<?php
 require './bd/conexao.php';
 if(isset($_SESSION['idUser'])&& !empty($_SESSION['idUser'])):
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Smart Garden</title>
   <link rel="stylesheet" href="./css/main.css">
   <link rel="stylesheet" href="./css/cards.css">
   <link rel="stylesheet" href="./css/pop-up.css">
   <link rel="shortcut icon" href="./img/logo verde.png" type="image/x-icon">
</head>

<body>
   
<!-- FICA NA MAIN.CSS-->
   <div id="tituloPagInicial">
      <h5>Nome da plantação</h5>
   </div>


   <!--***** Barra de menu lateral ***** -->


   <div class="navigation">

      <ul id="nohover">
         <li>
            <a href="#" style="cursor: default;">
               <span class="icon"><img id="logo" style="width: 45px; height: 40px;" src="./img/logo.png" alt=""></span>
               <span class="title">SMART GARDEN</span></a>

         </li>
      </ul>
      <ul>
         <li>
            <a href="./plantações.php">
               <span class="icon"><i class="fab fa-pagelines fa-2x"></i></span>
               <span class="title">PLANTAÇÔES</span></a>
         </li>
      </ul>
      <ul>
         <li>
            <a href="./equipe.html">
               <span class="icon"><i class="fas fa-users fa-2x"></i></span>
               <span class="title">EQUIPE</span></a>
         </li>
      </ul>
      <ul>
         <li>
            <a href="./sugestao.html">
               <span class="icon"><i class="fas fa-question fa-2x"></i></span>
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
      <div id="baixo">
         <ul>
            <li>
               <a href="./bd/logout.php">
                  <span class="icon"><i class="fas fa-door-open fa-2x"></i></span>
                  <span class="title">SIGN OUT</span></a>
            </li>
         </ul>
      </div>
   </div>


   <div class="positionButton">
       <button class="open-button" onclick="openForm()">Add<i id="plus" class="fas fa-plus-circle"></i></button>
    </div>

   <!-- POPUP DO BOTÂO ADICIONAR -->



   <!-- ****** CARDS UM****** -->
   <div class="container-pc">
      <?php
         include "bd/listar.php";
          ?>



      <!-- AQUI ADICIONA MAIS CARDS -->



   </div>

   

   <div class="form-popup" id="myForm">
      <div class="form-container">
         <form action="./bd/processaarea.php" method="POST">
            <div class="close">
               <input type="checkbox" name="caixa" checked></input>
               <i class="fas fa-times fa-2x" onclick="closeForm()"
                  style="cursor: pointer; width: 23px; text-align: center; position: fixed;"></i>
            </div>

            <h1>CRIAR ÁREA DE PLANTIO</h1>

            <div class="fundo">
               <div class="label">NOME DA ÁREA DE PLANTIO:</div>
               <input type="text" name="area_plantio" required="required">
               <div class="label">ENDEREÇO:</div>
               <input type="text" name="endereco" required="required">
            </div>
            <div class="buttonWid">
               <button type="submit" class="btn">Salvar</button>
            </div>
         </form>
         <form action="./bd/processalote.php" method="POST">
            <h1>CRIAR LOTE</h1>
            <div class="fundo2">
               <div class="label">NOME DO LOTE:</div>
               <input type="text" name="nome_lote" required>

               <div class="label" style="display: inline;">ÁREA DE IRRIGAÇÃO(m²):</div>
               <input type="number" name="area_em_m3" class="m2" required="required">


               <div class="label" style="display: inline;">ÁREA DE PLANTIO:</div>
               <select name="area_plantio" id="slc" required>
                  <option value=""></option>
                  <option value="opa">opa</option>
                  <option value="ola">ola</option>
               </select>


               <div class="label" style="display: inline;">IRRIGADORES:</div>
               <input type="number" name="irrig" class="m2" required="required">
               <label>HORÁRIO DE IRRIGAÇÃO: </label>
               <input type="time" name="hora" ><br><br>
               <div class="buttonWid">
                  <button type="submit" class="btn">Salvar</button>
               </div>
         </form>
      </div>
   </div>



   <script src="https://kit.fontawesome.com/905ede63f2.js" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <script type="text/javascript" src="./js/pop-up.js"></script>
</body>

</html>
<?php else:header("Location: index.php");endif;