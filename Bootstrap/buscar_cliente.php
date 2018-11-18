<!doctype html>
<html lang="pt-br">
    <head>
        <title> Bootstrap 4</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/estiloscarro.css?version=4">
		<link rel="stylesheet" href="css/bootstrap.css">
		<style>
		    @media screen and (min-width: 1025px){
				
				.tabela{
					max-width: 65%;
					margin-left: auto;
					margin-right:auto;
				}
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
            <li><a href="carrinho.php">CARRINHO</a></li>
            <li><a href="cliente.php">PERFIL</a></li>
            <li><a href="sair_login.php">SAIR</a></li>
        </ul>
    </nav>
<!-- Fim Menu -->
        <br/>
		<!--Botão de Voltar-->
		<a href = "controle_adm_cliente.php" class="btn btn-info" role="button">Voltar</a>
		<br/> <br/>
		<!--Fim Botão de Voltar-->
	<!--Tabela de clientes-->
       <div class="container-fluid">
          <h2>Buscar Clientes</h2>         
          <table class="table table-responsive table-bordered table-hover tabela">
            <thead>
              <tr class="table-info">
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>CPF</th>
				<th>Cidade</th>
				<th>Bairro</th>
				<th>Rua</th>
				<th>Número da casa</th>
				<th>Email</th>
				<th>Senha</th>
              </tr> 
            </thead>

<?php

    session_start();
    include("conexao.php");
	
	//Pega os dados do cliente
	if(isset($_POST['buscar'])){
		
		$nome = $_POST['nome'];
		
		$query = "SELECT * FROM cliente WHERE nome LIKE '%$nome%'";
		
		$consulta = mysqli_query($conexao, $query);
		
		//Mostra o cliente buscado
			while($exibir = mysqli_fetch_assoc($consulta))
			{
				echo "<tr>";
				echo "<td>".$exibir['nome']."</td>";
				echo "<td>".$exibir['datadenasc']."</td>";
				echo "<td>".$exibir['CPF']."</td>";
				echo "<td>".$exibir['cidade']."</td>";
				echo "<td>".$exibir['bairro']."</td>";
				echo "<td>".$exibir['rua']."</td>";
				echo "<td>".$exibir['numcasa']."</td>";
				echo "<td>".$exibir['email']."</td>";
				echo "<td>".$exibir['senha']."</td>";
				echo "<td> <a href = 'alterar_cliente.php?cod=".$nome."' class='btn btn-info'>ALTERAR</a> </td>";
				echo "<td> <a href = 'excluir_cliente.php?cod=".$nome."' class='btn btn-info'>EXCLUIR</a> </td>";
				echo "</tr>";
				
			}
	}
?>

         </table>
		 <!--Fim da Tabela de Clientes-->
        </div>
		<!--Footer-->
		<footer>
			<p> <img src="img/c1.png" style="width: 15px">
			Dream Cake | CEP 2018
			</p>   
        </footer>
		<!--Fim footer-->
		
		<!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>