
<html >

<head>
	<title>formdel</title>
	
	<link rel="stylesheet" type="text/css" href="contatoinsert.css" />   
</head>

<body background="black2.gif">

<div id="bg"><img src="fire-5.jpg" width="200">	</div>
<div id="foto1"><img src="S.png" width="110"></div>
<div id="middlebg"><img src="middle bg.gif" width="1000"></div>
<div id="box" width="500"></div>	


<div id="whiteb"></div>
<div id="cl4"></div>	
		<div id="menu1">
			<ul>
				<li><a href="canvas.html">Inicio</a></li>
				<li><a href="ecigs page.html">E-cigs</a></li>
				<li><a href="atomizadores.html">Atomizadores</a></li>
				<li><a href="eliquidos.html">E-Liquidos</a></li>
				<li><a href="contato.html">Contato</a></li>
			</ul>
		</div>
<div id="php2">
<?php
	
	$nome = $_REQUEST['nome'];
	$sobrenome = $_REQUEST['sobrenome'];
	$cpf = $_REQUEST['cpf'];
	$telefone = $_REQUEST['telefone'];
	$email = $_REQUEST['email'];
	$endereco = $_REQUEST['endereco'];
	$cep = $_REQUEST['cep'];
	$cidade = $_REQUEST['cidade'];
	$estado = $_REQUEST['estado'];
	$pedido = $_REQUEST['pedido'];


	include "conexaoaobanco.php";
				
	//rodando uma query
	$query = "INSERT INTO cadastro (nome, sobrenome, cpf, telefone, email, endereco, cep, cidade, estado, pedido)
			  VALUES ('$nome', '$sobrenome', $cpf, $telefone, 
						   '$email', '$endereco', $cep, '$cidade', '$estado', '$pedido')";

	
	//echo $query;
echo "<br>";
	
	mysql_query($query, $conn);
	
	header('Location:contato.html')
?>
</div>
</body>

</html>