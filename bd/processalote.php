<?PHP
session_start();
include_once("conexao.php");

$nomelote = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$tamanholote = filter_input(INPUT_POST, 'tamanho', FILTER_SANITIZE_STRING);
$quantidadelote = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_STRING);
$horalote = filter_input(INPUT_POST, 'hora', FILTER_SANITIZE_STRING);

$result_lote = "INSERT INTO lote (nome, 	area_irrigação, irrigadores, horario_irrigação) VALUES ('$nomelote', '$tamanholote', $quantidadelote, $horalote )";
$resultado_lote = mysqli_query($conn, $result_lote);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: index.php");
}
?>
