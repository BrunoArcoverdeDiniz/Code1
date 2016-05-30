<?php
	//conexao ao banco de dados	
	
	//acessando o servidor
	
	$conn=mysql_connect("localhost", "bruno" , "luciano1979")
		or die ("Servidor fora do ar!");
		
	//escolhendo o banco
	
	mysql_select_db("login", $conn)
		or die ("sem acesso ao banco")



?>