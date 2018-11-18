<?php
    session_start();
    include("conexao.php");
	//Mostrar os clientes
	$query = mysqli_query($conexao, "SELECT * FROM pedido");
	
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title> Bootstrap 4</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/controle_adm.css">
    </head>
    <body>
	<!-- Menu -->  
        <div class="menu">
        <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="p-4" style="background-color: #FFFFFF">
        <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="Site.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="Site.php#sobre">Quem Somos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbardrop" data-toggle="dropdown">
                        Produtos
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="Bolos.php">Bolos</a>
                        <a class="dropdown-item" href="Salgados.php">Salgados</a>
                        <a class="dropdown-item" href="Doces.php">Doces</a>
                        <a class="dropdown-item" href="Novidades.php">Novidades</a>
                    </div>
                </li>
             <li class="nav-item">
                    <a class="nav-link text-dark" href="Formulario.php">Faça seu Cadastro</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link text-dark" href="Receitas.php">Receitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="Site.php#contatos">Contatos</a>
                </li>
        </ul>        
    </div>
  </div>  

  <nav class="navbar navbar-dark" style="background-color: rgb(23, 162, 184)">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>

</div>
</div>
<!-- Fim Menu -->
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
		<!--Tabela de clientes-->
       <div class="container-fluid">
          <h2>Pedidos</h2>         
          <table class="table">
            <thead>
              <tr>
                <th>Cod</th>
                <th>Descrição</th>
                <th>Preço</th>
				<th>Total</th>
              </tr> 
            </thead>
            
			<?php
			//Mostra os clientes
			while($exibir = mysqli_fetch_assoc($query))
			{
			    $cod = $exibir['cod'];
				echo "<tr>";
				echo "<td>".$exibir['cod']."</td>";
				echo "<td>".$exibir['descricao']."</td>";
				echo "<td>".$exibir['preco']."</td>";
				echo "<td>".$exibir['total']."</td>";			
			}
	
			 ?>
			
          </table>
		 <!--Fim da Tabela de Pedidos-->
        </div>

	 <footer>
        <p><img class="circulo" src="img/c1.png"> Dream Cake | CEP 2018</p>
      </footer>
		
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>