<?php
    session_start();
    include("conexao.php");
	
	//variáveis
	$nome= filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
	$descricao= filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_STRING);
	$preco= filter_input(INPUT_POST, "preco", FILTER_SANITIZE_STRING);
	$tipo= filter_input(INPUT_POST, "tipo", FILTER_SANITIZE_STRING);
	$foto= filter_input(INPUT_POST, "foto", FILTER_SANITIZE_STRING);
	
	//confere se a conexão com o banco de dados deu certo para então poder inserir produtos
	if($conexao){
		
		if($conexao==null){
			echo "erro ao connectar";
		}else{
		//$conexao vem do arquivo conexao.php	
		$query = mysqli_query($conexao
		,"INSERT INTO produto(nome, descricao, preco, tipo, foto) VALUES('$nome', '$descricao', '$preco', '$tipo', '$foto')");
		 header("location:Site.php");
		}
		
	}

?>