<?php

include("conexao.php");

	//$cod = $_GET["cod"];
	
	$cod = filter_input(INPUT_GET, "cod", FILTER_SANITIZE_NUMBER_INT);
	$query = "DELETE FROM receita WHERE cod = '$cod';";
	mysqli_query($conexao, $query);
	//echo $query;
	//Mostra se a receita foi excluída ou não
	if($query){
		header("location:controle_adm_receita.php");
	}else{
		echo "A receita não foi excluída";
	}
	
	
	
	






?>