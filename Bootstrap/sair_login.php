<?php
    session_start();
	unset($_SESSION['adm'], $_SESSION['usr']);
	
    $_SESSION['sair'] = "<script>alert('Deslogado com sucesso!')</script>";
    header("location:index.php");
    
?>