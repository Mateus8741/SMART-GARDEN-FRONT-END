<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "test";

// //Criar a conexao
// $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$pdo = new PDO("mysql:dbname=".$dbname.";host=".$servidor,$usuario,$senha);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
