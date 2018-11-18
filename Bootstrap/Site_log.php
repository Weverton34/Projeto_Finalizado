<?php
    session_start();
	include("conexao.php");
	
	//$email = $_SESSION['email'];
	$query = mysqli_query($conexao, "SELECT painel FROM login");
	if(isset($_SESSION['painel'])){
		
		include 'Site_logado.php';
		
	}else{
	  echo "<script>alert('Usuário não logado ou sem permissão')</script>";
	  header('Login.php');
	}
	//$painel= filter_input(INPUT_POST, "painel", FILTER_SANITIZE_STRING);
	//Conecta com a tabela login
	//$query = mysqli_query($conexao, "SELECT * FROM login where email = '$email'");
	
?>
