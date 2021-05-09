<?PHP
session_start();
include_once("conexao.php");

// $nomearea = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
// $ende  = filter_input(INPUT_POST, 'endereçoarea', FILTER_SANITIZE_STRING);

// $result_area = "INSERT INTO area (nome,endereço) VALUES ('$nomearea','$ende')";
// $resultado_area = mysqli_query( $conn, $result_area);

// 

// if(mysqli_insert_id($conn)){
// 	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
// 	header("Location: index.php");
// }else{
// 	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
// 	header("Location: index.php");
// }
$area_plantio = $_POST["area_plantio"] ?? null;
$endereco = $_POST["endereco"] ?? null;



$sql = "INSERT INTO area (nome_area,endereco,created) VALUES ('$area_plantio','$endereco',NOW())";
$req = mysqli_query($conn,$sql);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style = 'color:white'>Usuario Cadastrado!</p>";
    header("Location:../plantações.html");
}else{
    $_SESSION['msg'] = "<p style = 'color:red'>Usuario não Cadastrado!</p>";
    header("Location:../plantações.html");}

