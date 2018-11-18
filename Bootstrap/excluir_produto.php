<?php

include("conexao.php");

	
	
	$cod = filter_input(INPUT_GET, "cod", FILTER_SANITIZE_NUMBER_INT);
	$query = "DELETE FROM produto WHERE cod = '$cod';";
	mysqli_query($conexao, $query);
	//echo $query;
	//Mostra se o produto foi excluído ou não
	if($query){
		header("location:controle_adm_produto.php");
	}else{
		echo "O produto não foi excluído";
	}
	
	
	
	






?>