<html>
<head>
<meta charset="utf-8">

	<title>predelcar</title>
	
	<link rel="stylesheet" type="text/css" href="predelcar.css" />  
</head>
<body>

<body background="black2.gif">

<div id="bg"><img src="fire-5.jpg" width="200">	</div>
<div id="foto1"><img src="S.png" width="110"></div>
<div id="middlebg"><img src="middle bg.gif" width="1000"></div>

<div id="box" width="500"></div>

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
<div id="php1">
<?php
	// trazer o valor do campo cpf
	$apagar = $_REQUEST['cpf'];
	

	echo "TEM CERTEZA QUE QUE APAGAR SEU CADASTRO ?";

	echo "<br><br><b><a href='delete.php?cpf=$apagar'>      SIM</a> <a href='contato.html'>NÃO</a></b><br>";
		
?>
</div>
</body>
</html>
