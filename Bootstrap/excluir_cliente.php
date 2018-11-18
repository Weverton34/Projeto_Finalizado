<?php

include("conexao.php");
	
	
	$cod = filter_input(INPUT_GET, "cod", FILTER_SANITIZE_NUMBER_INT);
	$query = "DELETE FROM cliente WHERE cod = '$cod';";
	mysqli_query($conexao, $query);
	//echo $query;
	//Mostra se o cliente foi excluído ou não
	if($query){
		header("location:controle_adm_cliente.php");
	}else{
		echo "O cliente não foi excluído";
	}
	
	
	
	






?>