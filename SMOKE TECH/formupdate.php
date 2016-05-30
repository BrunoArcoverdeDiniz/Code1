
<html >

<head>
	<title>formdel</title>
	
	<link rel="stylesheet" type="text/css" href="formupdate.css" />   
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
<div id="php">		
<?php

include "conexaoaobanco.php";

$cpf=$_REQUEST['cpf'];

$query="SELECT nome, sobrenome, cpf, telefone, email, endereco, cep, cidade, estado, pedido
	FROM cadastro WHERE cpf=$cpf";
//echo $query;

$recordset = mysql_query($query,$conn);
$registro = mysql_fetch_assoc($recordset);

$cpf = $registro["cpf"];
$nome = $registro["nome"];
$sobrenome = $registro["sobrenome"];
$telefone = $registro["telefone"];
$email = $registro["email"]; 
$endereco = $registro["endereco"]; 
$cep = $registro["cep"];
$cidade = $registro["cidade"];
$estado = $registro["estado"]; 
$pedido = $registro["pedido"]; 

print "<form action='update.php'>";
print "cpf<br><input name='cpf' type='text' READONLY value='$cpf'size='40'><br>";
print "nome<br><input name='nome' type='text' value='$nome'size='40'><br>";
print "sobrenome<br><input name='sobrenome' type='text' value='$sobrenome'size='40'><br>";
print "telefone<br><input name='telefone' type='text' value='$telefone'size='40'><br>";
print "email<br><input name='email' type='text' value='$email'size='40'><br>";
print "endereco<br><input name='endereco' type='text' value='$endereco'size='40'><br>";
print "cep<br><input name='cep' type='text' value='$cep'size='40'><br>";
print "cidade<br><input name='cidade' type='text' value='$cidade'size='40'><br>";
print "estado<br><input name='estado' type='text' value='$estado'size='40'><br>";
print "pedido<br><input name='pedido' type='text' value='$pedido'size='40' style='height:50'><br><br>";


print "<button type='submit' name='btn_opentextbox' value='submit'><img src='alterar.png' alt='Submit'></button>";
?>
</div>


</body>

</html>