<?PHP
session_start();
include_once("conexao.php");

$lote = $_POST["nome_lote"] ?? null;
$area = $_POST["area_em_m3"] ?? null;
$area_plantio = $_POST["area_plantio"] ?? null;
$irrigadores = $_POST["irrig"] ?? null;
$horario = $_POST["hora"] ?? null;


$sql = "INSERT INTO lote (nome_lote,area_em_m3,area_plantio,irrigadores,horario,created)
 VALUES ('$lote','$area','$area_plantio','$irrigadores','$horario',NOW())";
$req = mysqli_query($conn,$sql);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style = 'color:white'>Usuario Cadastrado!</p>";
    header("Location:../plantações.php");
}else{
    $_SESSION['msg'] = "<p style = 'color:red'>Usuario não Cadastrado!</p>";
    header("Location:../plantações.php");}


