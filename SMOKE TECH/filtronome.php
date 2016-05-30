<?php
	session_start();
	if($_SESSION['logado']<>"OK")
	{
		header('Location: canvas.html');
	}
?>
<html >

<head>
	<title>filtronome</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="delcar.css" />  
	 <?php include "canvasmenu.html"; ?>
	<form action='#' method="post">
</head>
	
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
	$nome=$_REQUEST['nome'];

	$query="
	SELECT nome, sobrenome, cpf, telefone, email, endereco, cep, cidade, estado, pedido
	FROM cadastro WHERE nome ='$nome' ORDER BY nome LIMIT $ini,$tamanhopag";
	$recordset = mysql_query($query, $conn);
	$registrosTotais = mysql_num_rows($recordset);

	$paginas = $registrosTotais / $tamanhopag;
	if(($registrosTotais % $tamanhopag)>0)
	{
		$paginas = $registrosTotais / $tamanhopag + 1;
	}	
	
	$query="
	SELECT nome, sobrenome, cpf, telefone, email, endereco, cep, cidade, estado, pedido
	FROM cadastro WHERE nome ='$nome' ORDER BY nome";
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
		print "<a href='filtronome.php?pag=$k&nome=$nome'style='color: white'><b>$k</b></a> ;&nbsp;";
	}
}	
?>
</div>

</body>

</html>