<?php 
	session_start();
	require_once "functions/product.php";
	require_once "functions/cart.php";

	$pdoConnection = require_once "connection.php";

	if(isset($_GET['acao']) && array('add', 'del', 'up')) {
		
		if($_GET['acao'] == 'add' && isset($_GET['cod'])){ 
			addCart($_GET['cod'], 1);			
		}

		if($_GET['acao'] == 'del' && isset($_GET['cod'])){ 
			deleteCart($_GET['cod']);
		}

		if($_GET['acao'] == 'up'){ 
			if(isset($_POST['prod']) && isset($_POST['prod'])){ 
				foreach($_POST['prod'] as $cod => $qtd){
						updateCart($cod, $qtd);
				}
			}
		} 

		header('location: carrinho.php');
	}

	$resultsCarts = getContentCart($pdoConnection);
	$totalCarts  = getTotalCart($pdoConnection);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Carrinho</title>
	<!-- <link rel="stylesheet" href="css/bootstrap.css">  -->
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estiloscarro.css?version=6">

</head>
<body>
	<!-- Carrinho -->
		<!-- Menu -->
    <nav>
        <img class="logo" src="img/Logo.png" alt="Logo">
        <ul>
            <li><a href="#home">HOME</a></li>
            <li><a href="index.php#sobrenos">SOBRE NÓS</a></li>
            <li><a href="index.php#produtos">PRODUTOS</a></li>
            <li><a href="#">RECEITAS</a></li>
            <li><a href="index.php#contato">CONTATO</a></li>
            <li><a href="cliente.php">PERFIL</a></li>
            <li><a href="sair_login.php">SAIR</a></li>
        </ul>
    </nav>
    <!-- Fim --> 
    	<br/><br/>
    	 <!--Botão de Voltar-->
		<a href = "site_logado.php" class="botaovoltar">Voltar</a>
		<br/> <br/>
		<!--Fim Botão de Voltar-->

		<div class="card mt-5">
			 <div class="card-body">
	    		<h1 class="card-title">Carrinho</h1>

	    		<a href="Site_logado.php#produtos">Adicionar Produtos</a>
	    	</div>
		</div>

		<?php if($resultsCarts) : ?>
			<form action="carrinho.php?acao=up" method="post">
			<table>
				<thead>
					<tr>
						<th>Produto</th>
						<th>Quantidade</th>
						<th>Preço</th>
						<th>Frete</th>
						<th>Ação</th>

					</tr>				
				</thead>
				<tbody>
				  <?php foreach($resultsCarts as $result) : ?>
					<tr>
						
						<td><?php echo $result['name']?></td>
						<td>
							<input type="text" name="prod[<?php echo $result['cod']?>]" value="<?php echo $result['quantity']?>"  />
														
							</td>
						<td>R$<?php echo number_format($result['price'], 2, ',', '.')?></td>
						<td>R$<?php echo number_format($result['subtotal'], 2, ',', '.')?></td>
						<td><a href="carrinho.php?acao=del&cod=<?php echo $result['cod']?>" class="botaoremover">Remover</a></td>
						
					</tr>
				<?php endforeach;?>
				 <tr>
				 	<td colspan="3" class="text-right"><b>Total: </b></td>
				 	<td>R$<?php echo number_format($totalCarts, 2, ',', '.')?></td>
				 	<td></td>
				 </tr>
				</tbody>
			</table>
			<br/>
			<a class="botao" href="Site_logado.php#produtos">Continuar Comprando</a>
			<!--<button class="btn btn-info" type="submit">Atualizar Carrinho</button>-->
			 <a class="botao" href="vendor/boleto.php">Finalizar Compra</a> 

			</form>
	<?php endif?>
		
	</div>

    <footer>
        <p><img class="circulo" src="img/c1.png"> Dream Cake | CEP 2018</p>
    </footer>
	
</body>
</html>