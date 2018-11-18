<!doctype html>
<html lang="pt-br">
    <head>
        <title> Cliente</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/estilos.css">
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
            <li><a href="carrinho.php">CARRINHO</a></li>
            <li><a href="sair_login.php">SAIR</a></li>
        </ul>
    </nav>
    <!-- Fim -->      
  <br/>
  <!--Botão de Voltar-->
        <a href = "site_logado.php" class="botaovoltar">Voltar</a>
        <br/>
     <!--Fim botão de voltar -->   
</div>
</div>
<br/><br/>
<h3>Olá Cliente!!!</h3>
<!-- Fim Menu -->
<br/><br/><br/><br/>
<!-- Cards -->
<div class="container">
            <div id="produtos">
                <div class="cards">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card text-center">
                                <div class="title">
                                   <img class="icon" src="img/sacola.png">
                                    <h2> Pedidos </h2>
                                </div>
                                <a href="pedidos.php"> Ver </a>
                            </div>  
                        </div>
                        <div class="col-sm-3">
                            <div class="card text-center">
                                <div class="title">
                                   <img class="icon" src="img/user.png">
                                    <h2> Alterar Info </h2>
                                </div>
                                <a href="cliente_alterar.php"> Ver </a>
                            </div>  
                        </div>  
                        <div class="col-sm-3">
                            <div class="card text-center">
                                <div class="title">
                                    <img class="icon" src="img/coracao.png">
                                    <h2> Favoritos </h2>
                                </div>
                                <a href="#"> Ver </a>
                            </div>  
                        </div>  
                           
                    </div>  
                </div> 
            </div>
        </div>
<!-- Fim Cards -->

    <footer>
        <p><img class="circulo" src="img/c1.png"> Dream Cake | CEP 2018</p>
    </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>
