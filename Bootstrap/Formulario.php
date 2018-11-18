<?php
    session_start();
	?>
<!doctype html>
<html lang="pt-br">
    <head>
        <title> Formulário</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/formulario.css">
    </head>
	<script>
	function formatar(mascara, documento){
	  var i = documento.value.length;
	  var saida = mascara.substring(0,1);
	  var texto = mascara.substring(i)
	  
	  if (texto.substring(0,1) != saida){
				documento.value += texto.substring(0,1);
	  }
	  
	}
</script>
    <body>
	    <!--Botão de Voltar-->
		<a href = "index.php" class="btn btn-info" role="button">Voltar</a>
		<br/> <br/>
		<!--Fim Botão de Voltar-->
            <div class="formulario">
            
            <h1 class="titulo">Cadastro</h1>
			<?php 
			if(isset($_SESSION['erro']))
			{
				echo $_SESSION['erro'];
				$_SESSION['erro'] = null;
			}
			else{
				//echo "Variavel não setada";
			}

			?>		
            <form method="POST" action="Form.php">
              
                <input type="text" name="nome" placeholder="Nome" required>

               
                <input type="text" name="datadenasc" placeholder="Data de Nascimento" OnKeyPress="formatar('##/##/####', this)" maxlength="10" required>

            
                <input type="text" name="CPF" placeholder="CPF" OnKeyPress="formatar('###.###.###-##', this)" maxlength="14" required>

             
                <input type="text" name="cidade" placeholder="Cidade" required> 

               
                <input type="text" name="bairro" placeholder="Bairro" required> 

               
                <input type="text" name="rua" placeholder="Rua" required>
                
                
                <input type="int" name="numcasa" placeholder="Numero Casa" required>

               
                <input type="text" name="email" placeholder="Email" required>

                
                <input type="password" name="senha" placeholder="Senha" required>

                <input type="submit" name="" value="Salvar">

                
            </form>
        </div>
	
        <!-- Optional JavaScript
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>


