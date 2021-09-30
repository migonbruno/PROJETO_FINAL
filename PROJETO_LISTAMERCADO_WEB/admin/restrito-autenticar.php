<?php
session_start();
include('conexao.php');

if(empty($_POST['nome_adm']) || empty($_POST['senha_adm'])) {
	header('Location: login.php');
	exit();
}

$nome_adm = mysqli_real_escape_string($conexao, $_POST['nome_adm']);
$senha_adm = mysqli_real_escape_string($conexao, $_POST['senha_adm']);

$query = "select nome_adm, senha_adm from admsuper where nome_adm = '$nome_adm' AND senha_adm ='$senha_adm'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row > 0) {
	$_SESSION['nome_adm'] = $nome_adm;
	header('Location: index.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: login.php');
	exit();
}
?>