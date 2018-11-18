<?php
    session_start();
    include("conexao.php");

    if(isset($_POST['alterar'])){

	
    //variáveis
	$cod= filter_input(INPUT_POST, "cod", FILTER_SANITIZE_NUMBER_INT);
	$nome= filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
	$descricao= filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_STRING);
	$foto= filter_input(INPUT_POST, "foto", FILTER_SANITIZE_STRING);
	
	$result_receita = mysqli_query($conexao,
	"UPDATE receita SET nome = '$nome', descricao = '$descricao', foto = '$foto';");
	$resultado_receita = mysqli_query($conexao, $result_receita);
	
	//confere se a conexão com o banco de dados deu certo para então poder inserir receitas
	if ($resultado_cliente){
		echo  "<script>alert('Receita editada com sucesso!!!');</script>";
		header("Location: controle_adm_receita.php");
		
	}else{
		echo  "<script>alert('Receita não foi editada com sucesso!!!');</script>";
		header("Location: controle_adm_receita.php");
	}
}
?>