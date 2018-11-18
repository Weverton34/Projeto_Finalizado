<!doctype html>
<?php
session_start();
?>
<html lang="pt-br">
    <head>
        <title>Bolos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="css/normalize.css">
       <link rel="stylesheet" href="css/estiloscarro.css">
		<style>
			.res{
				max-width: 100%;
				heigth: auto;
			}
		</style>
	</head>
    <body>
    

        <!-- Menu -->
    <nav>
        <img class="logo" src="img/Logo.png" alt="Logo">
        <ul>
            <li><a href="Site_logado.php">HOME</a></li>
            <li><a href="Site_logado.php#sobrenos">SOBRE NÓS</a></li>
            <li><a href="Site_logado.php#produtos">PRODUTOS</a></li>
            <li><a href="Receitas_logado.php">RECEITAS</a></li>
            <li><a href="Site_logado.php#contato">CONTATO</a></li>
            <li><a href="cliente.php">PERFIL</a></li>
            <li><a href="carrinho.php">CARRINHO</a></li>
            <li><a href="sair_login.php">SAIR</a></li>
        </ul>
    </nav>
    <!-- Fim -->  
<br/>
<!--Botão de Voltar-->
        <a href = "Site_logado.php" class="botaovoltar" role="button">Voltar</a>
        <br/> <br/>
        <!--Fim Botão de Voltar-->
<br/> <br/> <br/>
<?php
	//Conecta com o banco de dados
	$link = mysqli_connect("localhost", "root", "", "projeto");
	
	$sql = "Select * from produto where tipo = 'NOVIDADE'";
	
	if($link){
		$result = mysqli_query($link, $sql);
		
		//Mostra as imagens na tela
		
		while($produto = mysqli_fetch_assoc($result)){
			echo "<div class='container'>";
  			echo "<div class='card row col-sm-3' style='width:300px; padding: 2%; margin-left: 2%;'>"; 
    			echo "<img src=".$produto['foto']. " class='res' width='300px' heigth='00px'"."alt='Img'/><br/> <br/>";
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
<br/>
    <!--Rodapé-->
	    <footer>
        <p>Dream Cake | CEP 2018</p>
    </footer>
	<!--Fim Rodapé-->


        <!-- Optional JavaScript --> 
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>