<?php 	
	require_once "functions/product.php";
	$pdoConnection = require_once "connection.php";
	$products = getProducts($pdoConnection);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Bolo</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estiloscarro.css?version=5">

</head>
<body>
    <!-- Menu -->
	<nav>
        <img class="logo" src="img/Logo.png" alt="Logo">
        <ul>
            <li><a href="Index.php">HOME</a></li>
            <li><a href="Index.php#sobrenos">SOBRE NÓS</a></li>
            <li><a href="Index.php#produtos">PRODUTOS</a></li>
            <li><a href="Formulario.php">FAÇA SEU CADASTRO</a></li>
            <li><a href="Receitas.php">RECEITAS</a></li>
            <li><a href="Index.php#contato">CONTATO</a></li>
            <li><a href="carrinho.php">CARRINHO</a></li>
            <li><a href="Login.php">LOGIN</a></li>
        </ul>
    </nav>
    <!-- Fim -->
<br/> <br/>
	<!--Botão de Voltar-->
		<a href = "Index.php" class="btn btn-info" role="button">Voltar</a>
		<br/> <br/>
		<!--Fim Botão de Voltar-->
<br/> <br/> <br/>
	<?php
	//Conecta com o banco de dados
	$link = mysqli_connect("localhost", "root", "", "projeto");
	
	$sql = "Select * from produto where tipo = 'BOLO'";
	
	if($link){
		$result = mysqli_query($link, $sql);
		
		//Mostra as imagens na tela
		
		while($produto = mysqli_fetch_assoc($result)){
			echo "<div class='container'>";
  			echo "<div class='card row col-sm-4' style='width:300px; padding: 2%; margin-left: 2%; float: left;'>"; 
    			echo "<img src=".$produto['foto']. " class='res' width='250px' heigth='00px'"."alt='Img'/><br/> <br/>";
    			echo "<div class='card-body'>";
      				echo "<h4 class='card-title'>".$produto['nome']."</h4>";
      				echo "<p class='card-text'>".$produto['preco']."</p> <br/>";
					echo "<p class='card-text'>".$produto['descricao']."</p> <br/>";
					echo "<form action='mostrar_bolos.php' method='POST'>";
					echo "<input type=hidden value='".$produto['nome']."' name='nome'>";
					echo "<a href='Login.php' type='submit' class='btn btn-info'>Comprar</a>";
					echo "</form>";
    			echo "</div>";
  			echo "</div>";
			echo "</div>";
		}
		
	}else{
	    echo mysqli_error($link);	
	}
?>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <!--Rodapé-->
	    <footer>
        <p>Dream Cake | CEP 2018</p>
    </footer>
	<!--Fim Rodapé-->
</body>
</html>