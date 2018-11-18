<?php
session_start();
include("conexao.php");

 $cod = filter_input(INPUT_GET, "cod", FILTER_SANITIZE_NUMBER_INT);	
 $result_cliente = "SELECT * FROM cliente WHERE cod = '$cod'";
 $resultado_cliente = mysqli_query($conexao, $result_cliente);
 // $row_cliente = ($resultado_cliente);

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
		<a href = "controle_adm_cliente.php" class="btn btn-info" role="button">Voltar</a>
		<br/> <br/>
	<!--Fim Botão de Voltar-->
<br/> <br/> <br/>
            <div class="formulario">
            
            <h1 class="titulo">Alterar Cadastro</h1>
            <form method="POST" action="Alterar.php">
			     <?php
                    while ($row_cliente = mysqli_fetch_assoc($resultado_cliente)) { ?>
                        
                
                
			
				<input type="hidden" name="cod" value="<?php echo $row_cliente ['cod']; ?>">
              
                <input type="text" name="nome" placeholder="Nome" required value="<?php echo $row_cliente ['nome']; ?>">

               
                <input type="text" name="datadenasc" placeholder="Data de Nascimento" OnKeyPress="formatar('##/##/####', this)" maxlength="10" required value="<?php echo $row_cliente ['datadenasc'];?>">

            
                <input type="text" name="CPF" placeholder="CPF" OnKeyPress="formatar('###.###.###-##', this)" maxlength="14" required value="<?php echo $row_cliente ['CPF'];?>">

             
                <input type="text" name="cidade" placeholder="Cidade" required value="<?php echo $row_cliente ['cidade'];?>"> 

               
                <input type="text" name="bairro" placeholder="Bairro" required value="<?php echo $row_cliente ['bairro'];?>"> 

               
                <input type="text" name="rua" placeholder="Rua" required value="<?php echo $row_cliente ['rua'];?>">
                
                
                <input type="int" name="numcasa" placeholder="Numero Casa" required value="<?php echo $row_cliente ['numcasa'];?>">

               
                <input type="text" name="email" placeholder="Email" required value="<?php echo $row_cliente ['email'];?>">

                
                <input type="password" name="senha" placeholder="Senha" required value="<?php echo $row_cliente ['senha'];?>">

                <input type="submit" name="alterar" value="Alterar">
				
                
                
            </form>
        <?php }?>
        </div>
		
	
        <!-- Optional JavaScript
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>


