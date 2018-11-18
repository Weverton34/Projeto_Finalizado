<?php
session_start();
include'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Dream Cake</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:400,700|Pacifico' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/estilos.css">

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
            <li><a href='controle_adm.php'>CONTROLE</a></li>
            <li><a href="sair_login.php">SAIR</a></li>            
        </ul>
    </nav>

    <!-- Fim --> 
<header>
        <h1>DREAM CAKE</h1>
        <b><p>Todos os produtos em um só lugar.</p></b>
        <a href="#produtos" class="botao">VER MAIS</a>
    </header>

    <section id="sobrenos">
        <h2>SOBRE NÓS</h2>
        <p>A Dream Cake foi fundada pelo microempresário Alessandro em 2016
           na cidade de Conceição dos Ouros - MG e sua principal missão é facilitar o 
            acesso de compras entre clientes e produtos, sem a necessidade de locomoção,  
            oferecendo produtos caseiros que surpreendam nossos clientes pela qualidade e simplicidade 
            dos produtos. 
            O site foi desenvolvido pelos alunos do CEP - Centro de Educação Profissional "Tancredo Neves"
            em Brazópolis - MG.</p>
        <a href="#contato" class="botao">ENTRE EM CONTATO</a>
    </section>

    <section id="produtos">
        <h2>PRODUTOS</h2>
        <div>
          <!-- Cards -->
<div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="card text-center">
                                <div class="title">
                                   <img class="icon" src="img/bolos.png">
                                    <h2> Bolos </h2>
                                </div>
                                <a href="Bolos_logadoadm.php"> Ver </a>
                            </div>  
                        </div>
                        <div class="col-sm-3">
                            <div class="card text-center">
                                <div class="title">
                                   <img class="icon" src="img/doces.png">
                                    <h2> Doces </h2>
                                </div>
                                <a href="Doces_logadoadm.php"> Ver </a>
                            </div>  
                        </div>  
                        <div class="col-sm-3">
                            <div class="card text-center">
                                <div class="title">
                                    <img class="icon" src="img/salgados.png">
                                    <h2> Salgados </h2>
                                </div>
                                <a href="Salgados_logadoadm.php"> Ver </a>
                            </div>  
                        </div>  
                        <div class="col-sm-3">
                            <div class="card text-center">
                                <div class="title">
                                    <img class="icon" src="img/novidades.png">
                                    <h2> Novidades </h2>
                                </div>
                                <a href="Novidades_logadoadm.php"> Ver </a>
                            </div>  
                        </div>      
                    </div>  
                </div>
               </div>
<!-- Fim Cards -->
    </section>

    <section id="caracteristica">
        <!-- Características -->
<div class="sale-w3ls">
  <div class="container">
    <h2 class="caract"> CARACTERÍSTICAS</h2>
        <p>
			<img src="img/carrinho.png" style="width: 35px"><b>ENTREGA</b><br/>    
            <b>Em Conceição dos Ouros, Paraisópolis e em Cachoeira de Minas.</b>
        </p><br/>

        <p>
            <img src="img/receita.png" style="width: 35px"><b>PEDIDO</b><br/>
            <b>Prazo mínimo de 5 dias.</b>
            </p><br/>

        <p>
            <img src="img/moedas.png" style="width: 35px"><b>PAGAMENTO</b><br/>
            <b>Através do boleto bancário e do paypal.</b>
        </p>
  </div>
</div>
 </section>

<!-- Fim Características -->

   <!-- Contatos -->

    <section id="contato">
        <h2>CONTATO</h2>
        <p>Entre em contato conosco.</p>
        <div>
            <img src="img/whatsapp.png" alt="whatsapp">
            <p><a class="whats" href="tel:xx55555555">+55 (35) 9 9999 9999</a></p>
        </div>

        <div>
            <img src="img/facebook.png" alt="facebook">
            <p><a href="https://www.facebook.com/Dream-Cake-MG-186722668906805/">Facebook</a></p>
        </div>

        <div>
            <img src="img/instagram.png" alt="instagram">
            <p><a href="https://www.instagram.com/dream_cake_mg/">Instagram</a></p>
        </div>
    </section>

      <!-- map -->
                <div class="map"> 
                    <h4>Nossa Localização</h4> 
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d922.1041684007498!2d-45.79826677083212!3d-22.413337699079044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cb911a5bcd31c7%3A0xded5b792531fc8e6!2sAv.+Bar%C3%A3o+do+Rio+Branco%2C+258-294%2C+Concei%C3%A7%C3%A3o+dos+Ouros+-+MG%2C+37548-000!5e0!3m2!1spt-BR!2sbr!4v1542213617674"></iframe>
                </div>
                <!-- map -->
                
        <!-- Fim Contatos -->
      <br/><br/>

    <footer>
        <p>Dream Cake | CEP 2018</p>
    </footer>

         <!-- Optional JavaScript -->
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
									
				</body>
</html>
