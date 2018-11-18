<!doctype html>
<html lang="pt-br">
    <head>
        <title> Bootstrap 4</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/login.css">
		
		<?php
			require "conexao.php"
		?>
    </head>
    <body>
        <!--Botão de Voltar-->
		<a href = "Index.php" class="btn btn-info" role="button">Voltar</a>
		<br/> <br/>
		<!--Fim Botão de Voltar-->
		
		<div class="container">
            <div class="row">
			
        <div class="login">
        
        	<!-- validando formulário -->
			<?php
				if(isset($_POST['button'])){
					/* Se existir o metodo post que foi chamado attravés do botão, quero que verifique as caixas de texto */
					$email = $_POST['email'];
					$senha = $_POST['senha'];
					
					if($email == ''){
						echo "<script>alert('Por favor, digite seu email!')</script>";
						}
						
						else if($senha == ''){
							echo "<script>alert('Por favor, digite sua senha!')</script>";		
					} else{
						$sql = "SELECT * FROM login WHERE `email` = '$email' AND `senha` = '$senha'";
						/* mysqli_query faz uma consulta no BD 
							SELECT * FROM login - seleciona todos os dados da tabela, e compara.
						*/
						$result = mysqli_query($conexao, $sql);
						/*quando chamar a msqli, terei que passar minha conexão e minha sql*/
						if(mysqli_num_rows($result) > 0){
							/* se dentro das minhas linha do bd que foi percorrida, tiver $result (é a busca do select) maior que zero, beleza */
							while($res_1 = mysqli_fetch_assoc($result)){
								/*$res_1 = mysqli_fetch_assoc($result) vai buscar em todas as linhas que encontrou */
								$cod = $res_1['cod'];
								$email = $res_1['email'];
								$senha = $res_1['senha'];
								$status = $res_1['status'];
								$painel = $res_1['painel'];
								
								//echo $painel;
								if($status == 0){
									echo "<script>alert('Você está inativo, procure a administração!')</script>";	
								}else{
								
									session_start();
									/*iniciei seção, quando um usuário acabou de logar*/
									/*vou recuperar os dados do BD logo acima*/
									$_SESSION['cod'] = $cod;
									$_SESSION['email'] = $email;
									$_SESSION['senha'] = $senha;
									$_SESSION['painel'] = $painel;
									
									
									if($painel == 'a'){
										$_SESSION['adm'] = $email;
										
										header("location:controle_adm.php");
										
									} else if($painel == 'u'){
										$_SESSION['usr'] = $email;
										header("location:Site_log.php");
										//echo "<script language='javascript'> window.location='usuario';</script>";	
									}
										
								}
								
							}
							
						} else{
							echo "<script>alert('Dados incorretos')</script>";	
						}
						
					}
				}
			?>
            <img src="img/user.jpg" class="user"> 
            <form name="form" method="post" action="" enctype="multipart/form-data">
                <p>Email</p>
                <input type="text" name="email" placeholder="Email">
                
                <p>Senha</p>
                <input type="password" name="senha" placeholder="Senha">

                    <input type="submit" name="button" value="Entrar">       
                
                <a href="#"> Esqueceu sua Senha ?</a><br>
                <a href="Formulario.php"> Não tem uma conta ?</a>
            </form>
        </div>
    </div>
</div>
	
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>
