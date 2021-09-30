<?php
session_start();
if(!$_SESSION['nome_adm']) {
	header('Location: login.php');
	exit();
}
?>