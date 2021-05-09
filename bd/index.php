<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar</title>		
	</head>
	<body>
		<h1>Cadastrar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php">
			<label>Nome: </label>
			<input type="text" required="" name="nome" placeholder="Digite o nome completo"><br><br>
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu e-mail"><br><br>
			<input type="submit" value="Cadastrar">
			</form>
			
			<h1> Cadastrar Área</h1>
			<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
			<form method="POST" action="processaarea.php">
			<label>Nome: </label>
			<input type="text" required="" name="nome" placeholder="Nome para área:"><br><br>
			<label>Endereço: </label>
			<input type="text" name="endereçoarea" placeholder="Digite seu endereço"><br><br>
			<input type="submit" value="Cadastrar">
			</form>
			
			<h1>Cadastrar Lote</h1>
			<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
			<form method="POST" action="processalote.php">
			<label>Nome: </label>
			<input type="text" required="" name="nome" placeholder="Nome para Lote:"><br><br>
			<label>Área de Irrigação: </label>
			<input type="text"  name="tamanho" placeholder="Tamanho do Jardim :"><br><br>
			<label>Irrigadores: </label>
			<input type= "number"  name="quantidade" placeholder="Quatidade de Irrigadores:"><br><br>
			<label>Horário de Irrigação: </label>
			<input type= "time"   name="hora" placeholder="Horário de irrgigações:"><br><br>
			<input type="submit" value="Cadastrar">
			
		</form>
	</body>
</html>