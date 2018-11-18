<?php
    session_start();
    include("conexao.php");

    if(isset($_POST['altproduto'])){

	
    //variáveis
	$cod= filter_input(INPUT_POST, "cod", FILTER_SANITIZE_NUMBER_INT);
	$nome= filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
	$descricao= filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_STRING);
	$preco= filter_input(INPUT_POST, "preco", FILTER_SANITIZE_STRING);
	

	$result_produto = mysqli_query($conexao,
	"UPDATE produto SET nome='$nome', descricao='$descricao', preco='$preco' WHERE cod = '$cod';");
	$resultado_produto = mysqli_query($conexao, $result_produto);
	
	//confere se a conexão com o banco de dados deu certo para então poder inserir clientes
	if ($resultado_produto){
		echo  "<script>alert('Produto editado com sucesso!!!');</script>";
		header("Location: controle_adm_produto.php");
		
	}else{
		echo  "<script>alert('Produto não foi editado com sucesso!!!');</script>";
		header("Location: controle_adm_produto.php");
	}
}
?>