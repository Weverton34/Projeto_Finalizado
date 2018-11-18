<?php
    session_start();
    include("conexao.php");

    if(isset($_POST['alterar'])){

	
    //variáveis
	$cod= filter_input(INPUT_POST, "cod", FILTER_SANITIZE_NUMBER_INT);
	$nome= filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
	$datadenasc= filter_input(INPUT_POST, "datadenasc", FILTER_SANITIZE_STRING);
	$CPF= filter_input(INPUT_POST, "CPF", FILTER_SANITIZE_STRING);
	$cidade= filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_STRING);
	$bairro= filter_input(INPUT_POST, "bairro", FILTER_SANITIZE_STRING);
	$rua= filter_input(INPUT_POST, "rua", FILTER_SANITIZE_STRING);
	$numcasa= filter_input(INPUT_POST, "numcasa", FILTER_SANITIZE_STRING);
	$email= filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
	$senha= filter_input(INPUT_POST, "senha", FILTER_SANITIZE_STRING);
	
	$result_cliente = mysqli_query($conexao,
	"UPDATE cliente SET nome='$nome', datadenasc='$datadenasc', CPF='$CPF', cidade='$cidade', bairro='$bairro', rua='$rua', numcasa='$numcasa', email='$email', senha='$senha' WHERE cod = '$cod';");
	$resultado_cliente = mysqli_query($conexao, $result_cliente);
	
	//confere se a conexão com o banco de dados deu certo para então poder inserir clientes
	if ($resultado_cliente){
		echo  "<script>alert('Cliente editado com sucesso!!!');</script>";
		header("Location: controle_adm_cliente.php");
		
	}else{
		echo  "<script>alert('Cliente não foi editado com sucesso!!!');</script>";
		header("Location: controle_adm_cliente.php");
	}
}
?>