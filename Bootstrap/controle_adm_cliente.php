<?php
    session_start();
    include("conexao.php");
	//Mostrar os clientes
	$query = mysqli_query($conexao, "SELECT * FROM cliente");
	
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title>Controle de Clientes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/estiloscarro.css?version=3">
		<link rel="stylesheet" href="css/bootstrap.css">
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
			<li><a href="controle_adm.php">CONTROLE</a></li>
            <li><a href="sair_login.php">SAIR</a></li>
        </ul>
    </nav>
<!-- Fim Menu -->
        <br/>
		<!--Botão de Voltar-->
		<a href = "controle_adm.php" class="btn btn-info" role="button">Voltar</a>
		<br/> <br/>
		<!--Fim Botão de Voltar-->
		<br/>
	    <!--Botão de Busca-->
		<div class="busca">
			<form class="form-inline" action="buscar_cliente.php" method="POST">
    			<input class="form-control" name="nome" type="text" placeholder="Nome"> <br/>
    			<button class="btn btn-info" type="submit" name="buscar">Buscar</button>
			</form>
		</div>
		<!--Fim Botão de Busca-->
		<br/>
		<br/>
		<!--Tabela de clientes-->
       <div class="container-fluid">
          <h2>Clientes</h2>         
          <table class="table-responsive table-bordered table-hover">
            <thead>
              <tr class="table-info">
                <th><b>Nome</b></th>
                <th><b>Data de Nascimento</b></th>
                <th><b>CPF</b></th>
				<th><b>Cidade</b></th>
				<th><b>Bairro</b></th>
				<th><b>Rua</b></th>
				<th><b>Número da casa</b></th>
				<th><b>Email</b></th>
				<th><b>Senha</b></th>
				<th> </th>
				<th> </th>
              </tr> 
            </thead>
            
			<?php
			//Mostra os clientes
			while($exibir = mysqli_fetch_assoc($query))
			{
			    $cod = $exibir['cod'];
				//mysqli_set_charset($query, "utf-8");
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
				echo "<td> <a href = 'alterar_cliente.php?cod=".$cod."' class='btn btn-info'>ALTERAR</a> <br/> </td>";
				echo "<td> <a href = 'excluir_cliente.php?cod=".$cod."' class='btn btn-info'>EXCLUIR</a> </td>";
				echo "</tr>";
			}
	
			 ?>
			
          </table>
		  <br/>
		 <!--Fim da Tabela de Clientes-->
        </div>
		<!--Botão de Inserir Clientes-->
		<div class="inserir">
		    <a href= "inserir_clientes_adm.php" class="btn btn-info" role="button">INSERIR CLIENTE</a>
		</div>
		<!--Fim do Botão de Inserir Clientes-->
		<br/>
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
