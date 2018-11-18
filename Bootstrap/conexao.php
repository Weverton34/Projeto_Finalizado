<?php
   
	
	define("LOCAL","localhost");	
	define("USER","root");
	define("PASS","");
	define("BD", "projeto");
    
	$conexao = mysqli_connect(LOCAL, USER, PASS, BD);
	mysqli_set_charset($conexao, "utf8"); // configura para utf8
	
	
?>