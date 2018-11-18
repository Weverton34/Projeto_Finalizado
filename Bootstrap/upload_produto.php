<?php
    $nome= filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
	$descricao= filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_STRING);
	$preco= filter_input(INPUT_POST, "preco", FILTER_SANITIZE_STRING);
	$tipo= filter_input(INPUT_POST, "tipo", FILTER_SANITIZE_STRING);

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
		$destino_final = 'Img_produto/'.$nome_arquivo;
		
		//armazena as extensões que o arquivo pode ter
		$extensoes = array("image/jpeg", "image/jpg", "image/png");
	   
	   //verifica se o arquivo está na extensão certa
	   if(in_array($tipo_arquivo, $extensoes) == false){
		    $erros[]="Tipo de arquivo não suportado, envie arquivos jpg/jpeg ou png";
	   }
	   
	   //Tamanho máximo do arquivo
	   //if($tam_arquivo > 2097152){
		    //$erros[]="Tamanho máximo de arquivo 2MB";
	   //}
		
		//move o arquivo do diretório temporário para o diretório final
		move_uploaded_file($arq_tmp, $destino_final);
		echo "Funfou! <br/>";
		
		//Realiza conexao com o BD
		$link = mysqli_connect("localhost", "root", "", "projeto");
		
		$sql = "insert into produto (nome, descricao, foto, preco, tipo) values ('$nome', '$descricao', '$destino_final', '$preco', '$tipo')";
		
		echo "<br/>".$sql;
		
		mysqli_set_charset($link, "utf-8");
		
		//Verifica se o arquivo chegou no banco
		if($link){
			mysqli_query($link, $sql);
			echo "<br/> Salvou no banco!!! <br/>";
			//if($tipo=="BOLO"){
			    header("location: controle_adm_produto.php");

			//}else if($tipo=="DOCE"){
				//header("location: Doces_logado.php");
			//}
			//else if($tipo=="SALGADO"){
				//header("location: Salgados_logado.php");
			//}else{
			//	header("location:Novidades_logado.php");
			//}
		}
		
    }else{
		echo "O arquivo não chegou!<br/>";
	}
?>