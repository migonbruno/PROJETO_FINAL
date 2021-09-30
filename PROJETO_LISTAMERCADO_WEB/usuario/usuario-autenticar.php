<?php
session_start();
include('conexao.php');

if(empty($_POST['email_usuario']) || empty($_POST['senha_usuario'])) {
	header('Location: ../minhalista.php');
	exit();
}

$email_usuario = mysqli_real_escape_string($conexao, $_POST['email_usuario']);
$senha_usuario = mysqli_real_escape_string($conexao, $_POST['senha_usuario']);

$query = "select email_usuario, senha_usuario from usuario where email_usuario = '{$email_usuario}' and senha_usuario = ('{$senha_usuario}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row > 0) {
	$_SESSION['email_usuario'] = $email_usuario;
	header('Location: index.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	session_start();
    session_destroy();
    header("Location: index.php");
	header('Location: ../minhalista.php');
	exit();
	
}
?>