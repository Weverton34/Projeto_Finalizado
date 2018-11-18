<?php

include("conexao.php");

	//$cod = $_GET["cod"];
	
	$cod = filter_input(INPUT_GET, "cod", FILTER_SANITIZE_NUMBER_INT);
	$query = "DELETE FROM cliente WHERE cod = '$cod';";
	mysqli_query($conexao, $query);
	echo $query;
	if($query){
		echo "O cliente foi excluído";
	}else{
		echo "O cliente não foi excluído";
	}
	
	
	
	






?>