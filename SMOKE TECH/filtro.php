<?php
	session_start();
	if($_SESSION['logado']<>"OK")
	{
		header('Location: canvas.html');
	}
?>
<html >

<head>
	<title>filtroestado</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="delcar.css" />  
	<form action='#' method="post">
</head>

<body background="black2.gif">

<div id="bg"><img src="fire-5.jpg" width="200">	</div>
<div id="foto1"><img src="S.png" width="110"></div>
<div id="middlebg"><img src="middle bg.gif" width="1000"></div>

<div id="php1">
<?php
	
	include "conexaoaobanco.php";
	//echo $_SERVER['QUERY_STRING'];
	$pag = $_REQUEST['pag'];

	$tamanhopag = 8;

	if($pag<1)
	{
		$ini = 0;
	} 
	else
	{
		$ini = ($pag - 1) * $tamanhopag;
	}
	$estado=$_REQUEST['estado'];


	$query="
	SELECT nome, sobrenome, cpf, telefone, email, endereco, cep, cidade, estado, pedido
	FROM cadastro WHERE estado ='$estado' ORDER BY nome ";
	$recordset = mysql_query($query, $conn);
	$registrosTotais = mysql_num_rows($recordset);

	$paginas = $registrosTotais / $tamanhopag;
	if(($registrosTotais % $tamanhopag)>0)
	{
		$paginas = $registrosTotais / $tamanhopag + 1;
	}
	
	$query="
	SELECT nome, sobrenome, cpf, telefone, email, endereco, cep, cidade, estado, pedido
	FROM cadastro WHERE estado ='$estado' ORDER BY nome LIMIT $ini,$tamanhopag";
	$recordset = mysql_query($query, $conn);

	echo "<table border='0' class= 'branco'>";
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
			<td valign='top'><font face='calibri' size='3'>&nbsp;&nbsp;<b>NOME: </b>$nome&nbsp;&nbsp;
				&nbsp;&nbsp;<b>SOBRENOME: </b>$sobrenome&nbsp;&nbsp;
				&nbsp;&nbsp;<b>CPF: </b>$cpf&nbsp;&nbsp;<br>

				<a href='predelcar.php?cpf=$cpf'><img src='botaoapagar.png' ></a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='formupdate.php?cpf=$cpf'><img src='editar1.png' ></a>				
				</font></td>";
	}
		echo "</table>";
		echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	  <br><br><br><br><br><br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  &nbsp;&nbsp;&nbsp;";		
if($paginas > 1)
{
	for($k=1;$k<=$paginas;$k++)
	{
		print "<a href='filtro.php?pag=$k&estado=$estado'style='color: white'><b>$k</b></a> ;&nbsp;";
	}
}		
?>
</div>

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