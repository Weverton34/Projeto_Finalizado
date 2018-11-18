<!doctype html>
<html lang="pt-br">
    <head>
        <title>Receitas</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estiloscarro.css">
        <link rel="stylesheet" href="css/normalize.css">
		<style>
			.res{
				max-width: 100%;
				heigth: auto;
			}
            body{
                background-image: url(img/receita1.jpg);
                background-repeat: no-repeat;
                background-position: center;
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
<br/> 
    <!--Botão de Voltar-->
		<a href = "Site_logado.php" class="btn btn-info" role="button">Voltar</a>
		<br/> <br/>
	<!--Fim Botão de Voltar-->
	
<?php
    
	//Conecta com o banco de dados
	$link = mysqli_connect("localhost", "root", "", "projeto");
	
	$sql = "Select * from receita";
	
	if($link){
		$result = mysqli_query($link, $sql);
		
		//Mostra as imagens na tela
		while($produto = mysqli_fetch_assoc($result)){
			/*echo $produto['cod']."<br/>";
			echo $produto['nome']."<br/>";
			echo $produto['descricao']."<br/>";
			echo $produto['preco']."<br/>";
			echo $produto['foto']."<br/>";*/
			echo "<div class='container'>";
  			echo "<div class='card row col-sm-3' style='width:600px; padding: 2%; margin-left: 2%; float: left;'>";
			//echo "<div class='row'>";
			//echo "<div class=' col-sm-3>";
			    
    			echo "<img src=".$produto['foto']. " class='res' width='500px' heigth='300px'"."alt='Img'/><br/> <br/>";
    			echo "<div class='card-body'>";
      				echo "<h4 class='card-title'>".$produto['nome']."</h4>";
					echo "<p class='card-text'>".$produto['descricao']."</p> <br/>";
					echo "<form action='mostrar_bolos.php' method='POST'>";
					echo "<input type=hidden value='".$produto['nome']."' name='nome'>";
					echo "</form>";
    			    echo "</div>";
				//	echo "</div>";
				//	echo "</div>";
					
				
  			echo "</div>";
			echo "</div>";
			//echo "<img src=".$dados['foto']." width='300px' heigth='100px'"."alt='Img'/><br/> <br/> <br/>";
			//echo $dados['foto'];*/
		}
		
	}else{
	    echo mysqli_error($link);	
	}
		
?>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<!--Rodapé-->
    <footer>
        <p>Dream Cake | CEP 2018</p>
    </footer>
<!-- Fim Rodapé-->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>