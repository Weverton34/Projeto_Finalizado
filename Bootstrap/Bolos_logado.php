<!doctype html>
<?php
session_start();
	require_once "functions/product.php";
	$pdoConnection = require_once "connection.php";
	$products = getProducts($pdoConnection);
?>
<html lang="pt-br">
    <head>
        <title>Bolos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
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
            <li><a href="#home">HOME</a></li>
            <li><a href="site_logado.php#sobrenos">SOBRE NÓS</a></li>
            <li><a href="site_logado.php#produtos">PRODUTOS</a></li>
            <li><a href="#">RECEITAS</a></li>
            <li><a href="site_logado.php#contato">CONTATO</a></li>
            <li><a href="cliente.php">PERFIL</a></li>
            <li><a href="carrinho.php">CARRINHO</a></li>
            <li><a href="sair_login.php">SAIR</a></li>
        </ul>
    </nav>
    <!-- Fim -->   
<br/>
<!--Botão de Voltar-->
		<a href = "Site_logado.php" class="btn btn-info" role="button">Voltar</a>
		<br/> <br/>
		<!--Fim Botão de Voltar-->
<br/> <br/> <br/>
<div class="container">
		<div class="row">

			<?php foreach($products as $product): ?>

			<?php $product['preco'] = (int) $product['preco']; ?>
			
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<?php echo "<img src=".$product['foto']. " class='res' width='300px' heigth='100px'"."alt='Img'/><br/> <br/>";?>
							 <h4 class="card-title"><?php echo $product['nome']?></h4>
							 <h6 class="card-subtitle mb-2 text-muted">
							 	<?php echo $product['descricao'] ?>
							 </h6>
							 <h6 class="card-subtitle mb-2 text-muted">
							  	R$<?php echo number_format($product['preco'], 2, ',', '.')?>
							 </h6>

							 <a class="btn btn-primary" href="carrinho.php?acao=add&cod=<?php echo $product['cod']?>" class="card-link">Comprar</a>
						</div>
					</div>
				</div>

			<?php endforeach;?>
		</div>
	</div>
	
</body>
</html>


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