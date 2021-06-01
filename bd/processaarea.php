<?PHP
session_start();
include_once("conexao.php");

try{
$area_plantio = $_POST["area_plantio"] ?? null;
$endereco = $_POST["endereco"] ?? null;

$sql = $pdo->prepare("INSERT INTO area (nome_area,endereco,created) VALUES ('$area_plantio','$endereco',NOW())");
$sql->execute();

$_SESSION['msg'] = "<p style = 'color:white'>Areade Plantio Cadastrada!</p>";
header("Location:../plantações.php");
}catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    header("Location:../plantações.php");
  }
// if(mysqli_insert_id($conn)){
//     $_SESSION['msg'] = "<p style = 'color:white'>Usuario Cadastrado!</p>";
//     header("Location:../plantações.php");
// }else{
//     $_SESSION['msg'] = "<p style = 'color:red'>Usuario não Cadastrado!</p>";
//     header("Location:../plantações.php");}

