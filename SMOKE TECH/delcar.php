
<html >

<head>
	<title>delcar</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="delcar.css" />  
	<form action='#' method="post">
</head>

<body background="black2.gif">

<div id="bg"><img src="fire-5.jpg" width="200">	</div>
<div id="foto1"><img src="S.png" width="110"></div>
<div id="middlebg"><img src="middle bg.gif" width="1000"></div>
<div id="box" width="500"></div>	
<div id="php1">

<?php
	
	$estado = $_REQUEST['estado'];

	include "conexaoaobanco.php";

	$query="
	SELECT nome, sobrenome, cpf, telefone, email, endereco, cep, cidade, estado, pedido
	FROM cadastro WHERE estado =rj";
	$recordset = mysql_query($query, $conn);


	echo "<table border='1' >";
	while($registro=mysql_fetch_assoc($recordset))
	{
	
	$nome = $registro["nome"];
	$sobrenome = $registro["sobrenome"];
	$cpf = $registro["cpf"];
	$telefone = $registro["telefone"];
	$email = $registro["email"]; 
	$endereco = $registro["endereco"]; 
	$cep = $registro["cep"];
	$cidade = $registro["cidade"];
	$estado = $registro["estado"]; 
	$pedido = $registro["pedido"]; 
		echo "<tr>
			<td valign='top'><font face='calibri' size='3'><br>&nbsp;&nbsp;<b>NOME: </b>$nome&nbsp;&nbsp;
				&nbsp;&nbsp;<b>SOBRENOME: </b>$sobrenome&nbsp;&nbsp;
				&nbsp;&nbsp;<b>CPF: </b>$cpf&nbsp;&nbsp;<br>
				<a href='predelcar.php?cpf=$cpf'><img src='botaoapagar.png' width='150'></a>
				</font></td>";
	}
echo "</table>";
?>
</div>
<div id="whiteb"></div>
<div id="cl4"></div>	
		<div id="menu1">
			<ul>
				<li><a href="canvas.html">Inicio</a></li>
				<li><a href="ecigs page.html">E-cigs</a></li>
				<li><a href="atomizadores.html">Atomizadores</a></li>
				<li><a href="eliquidos.html">E-Liquidos</a></li>
				<li><a href="contato.html">Cadastro</a></li>
			</ul>
		</div>





</body>

</html>