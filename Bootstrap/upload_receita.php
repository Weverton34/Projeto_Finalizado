<?php
    $nome= filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
	$descricao= filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_STRING);

    if(isset($_FILES['arquivo'])){
		
		//armazena o nome do arquivo
		$nome_arquivo = $_FILES['arquivo']['name'];
		
		//armazena o tamanho do arquivo
	   $tam_arquivo = $_FILES['arquivo']['size'];
	   
	   //armazena o tipo do arquivo MIME
	   $tipo_arquivo = $_FILES['arquivo']['type'];
		
		//armazena o diretório no servidor onde o arquivo esta contido temporariamente
		$arq_tmp = $_FILES['arquivo']['tmp_name'];
		
		//armazena no diretório final
		$destino_final = 'Img_receita/'.$nome_arquivo;
		
		//armazena as extensões que o arquivo pode ter
		$extensoes = array("image/jpeg", "image/jpg", "image/png");
	   
	   //verifica se o arquivo está na extensão certa
	   if(in_array($tipo_arquivo, $extensoes) == false){
		    $erros[]="Tipo de arquivo não suportado, envie arquivos jpg/jpeg ou png";
	   }
	   
	   //Tamanho máximo do arquivo
	   if($tam_arquivo > 2097152){
		    $erros[]="Tamanho máximo de arquivo 2MB";
	   }
		
		//move o arquivo do diretório temporário para o diretório final
		move_uploaded_file($arq_tmp, $destino_final);
		echo "Funfou! <br/>";
		
		//Realiza conexao com o BD
		$link = mysqli_connect("localhost", "root", "", "projeto");
		
		$sql = "insert into receita (nome, descricao, foto) values ('$nome', '$descricao', '$destino_final')";
		
		echo "<br/>".$sql;
		
		mysqli_set_charset($link, "utf-8");
		
		//Verifica se o arquivo chegou no banco
		if($link){
			mysqli_query($link, $sql);
			echo "<br/> Salvou no banco!!! <br/>";
			header("location:controle_adm_receita.php");
		}
		
    }else{
		echo "O arquivo não chegou!<br/>";
	}
?>