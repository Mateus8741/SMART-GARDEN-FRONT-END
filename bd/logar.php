<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['email']) && !empty($_POST['email']) ){
    require 'conexao.php';
    require 'Usuario.php';

    $u = new Usuario();

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    
    if($u->login($email,$senha) == true){
        if(isset($_SESSION['idUser'])){
            header("Location:../main.html");
        }else{
            header("Location:../index.php");
        }
    }else{
        header("Location:../index.php");
    }

}else{
    header("Location:../index.php");
}