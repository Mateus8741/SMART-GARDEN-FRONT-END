<?php
session_start();
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "test";

global $pdo;

try{

    $pdo = new PDO("mysql:dbname=".$dbname.";host=".$servidor,$usuario,$senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    exit;
  }
