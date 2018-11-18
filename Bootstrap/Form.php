<?php
    session_start();
    include("conexao.php");
	
    //variáveis
	$nome= filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
	$datadenasc= filter_input(INPUT_POST, "datadenasc", FILTER_SANITIZE_STRING);
	$CPF= filter_input(INPUT_POST, "CPF", FILTER_SANITIZE_STRING);
	$cidade= filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_STRING);
	$bairro= filter_input(INPUT_POST, "bairro", FILTER_SANITIZE_STRING);
	$rua= filter_input(INPUT_POST, "rua", FILTER_SANITIZE_STRING);
	$numcasa= filter_input(INPUT_POST, "numcasa", FILTER_SANITIZE_STRING);
	$email= filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
	$senha= filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);
	
	
	//$query_buca = "Select * from cliente where 
	
	
	//confere se a conexão com o banco de dados deu certo para então poder inserir clientes
	if($conexao){
		
		if($conexao==null){
			echo "erro ao connectar";
		}else{
		//$conexao_formulario vem do arquivo conexao_formulario.php	
		$query = mysqli_query($conexao
		,"INSERT INTO cliente(nome, datadenasc, CPF, cidade, bairro, rua, numcasa, email, senha) 
		VALUES('$nome', '$datadenasc', '$CPF', '$cidade', '$bairro', '$rua', '$numcasa', '$email', '$senha')");
		
		if(!$query)
		{
		//echo "Não incluido ". $query. "INSERT INTO cliente(nome, datadenasc, CPF, cidade, bairro, rua, numcasa, email, senha) 
		//VALUES('$nome', '$datadenasc', '$CPF', '$cidade', '$bairro', '$rua', '$numcasa', '$email', '$senha')";
		$_SESSION['erro'] = "<script>alert('Valores inválidos!')</script>";
		
			header("location:Formulario.php");
		}else{
		
		//if($query
		$query2 = mysqli_query($conexao
		,"INSERT INTO login(email,senha,status,painel) 
		VALUES('$email', '$senha', 1, 'u')");
		header("location:Index.php");
		}
	}
	}
	

?>