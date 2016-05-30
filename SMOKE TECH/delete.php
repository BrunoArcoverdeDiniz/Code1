<?php
	$apagar = $_REQUEST['cpf'];

	include "conexaoaobanco.php";

	$query = "DELETE from cadastro WHERE cpf=$apagar";
	
	echo $query;
	mysql_query($query, $conn);

	header('Location:contato.html');

?><br><br><br><br>