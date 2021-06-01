<?php
session_start();
include_once("conexao.php");
try{
$lgn = $_POST["name"] ?? null;
$email = $_POST["email"] ?? null;
$pass = $_POST["senha"] ?? null;


$sql = $pdo->prepare("INSERT INTO usuarios (nome,email,senha,created) VALUES ('$lgn','$email','$pass',NOW())");
$sql->execute();

$_SESSION['msg'] = "<p style = 'color:white'>Usuario Cadastrado!</p>";
header("Location:../index.php");
}catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    header("Location:../index.php");
  }

// if(mysqli_insert_id($conn)){
//     $_SESSION['msg'] = "<p style = 'color:white'>Usuario Cadastrado!</p>";
//     header("Location:../index.php");
// }else{
//     $_SESSION['msg'] = "<p style = 'color:red'>Usuario não Cadastrado!</p>";
//     header("Location:../index.php");}


