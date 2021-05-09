<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <link rel="icon" type="imagem/png" href="./img/icone.jpg" />
  <title>Smart Garden</title>
</head>

<body>


  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form action="./bd/processa.php" method="POST">
        <h1>CRIAR CONTA</h1>
        <div class="social-container">
          <!-- <a href="#" class="face"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="google"><i class="fab fa-google-plus-g"></i></a>  -->


        </div>
        <!-- <span>Ou cadastre uma conta</span> -->
        <?php
          if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
	        	}
	      	?>
        <input type="text" name="name" id="name" placeholder="Nome Completo" required="required" />
        <input type="email" name="email" id="email" placeholder="Email" required="required" />
        <input type="password" name="senha" id="senha" placeholder="Senha" required="required" />
        <input type="password" name="confirmsenha" id="confirmsenha" placeholder="Confirme sua Senha"
          required="required" />
        <br>
        <div class="cadastro" style="margin-top: 15px;">
          <button type="submit" style="color: black;">Cadastrar</button>
        </div>
      </form>
    </div>
    <div class="form-container sign-in-container">
      <form action="#">
        <h1>SIGN IN</h1>
        <div class="social-container">
          <a href="#" class="face"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="google"><i class="fab fa-google-plus-g"></i></a>
        </div>
        <span>Ou entre com uma conta</span>
        <input type="email" placeholder="E-mail" />
        <input id="password" type="password" placeholder="Senha" required />
        <a href="./forgot.html">Esqueceu sua senha?</a>
        <button><a href="./main.html" style="color: black;">login</a></button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>FAÇA SEU LOGIN!</h1>
          <p>Para se manter conectado e aproveitar todas nossas funções.</p>
          <button class="ghost" id="signIn">login</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>SEM CONTA?</h1>
          <p>Faça sua conta agora mesmo e adiquira nossos recusos.</p>
          <button class="ghost" id="signUp">cadastro</button>
        </div>
      </div>
    </div>
  </div>
  <script src="./js/scripts.js"></script>
  <script src="https://kit.fontawesome.com/905ede63f2.js" crossorigin="anonymous"></script>
</body>

</html>