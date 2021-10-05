<?php
	include "conexao.php";
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$sql = "DELETE FROM usuario WHERE EMAIL = '$email'";
	mysqli_query($connect, $sql) or die(error());
	$response = array("success" => true);
	echo json_encode($response);
?>