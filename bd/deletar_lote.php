<?php 
include "./conexao.php";
try{
    if(isset( $_GET['id'])){
        $id = $_GET['id'];
        $sql = $pdo->prepare("DELETE FROM lote WHERE id = :id");
        $sql->bindParam(':id',$id);
        $sql->execute();
        header("Location:../lotes.php");
    }else{
        header("Location:../lotes.php");
    }
}catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    header("Location:../lotes.php");
  }




