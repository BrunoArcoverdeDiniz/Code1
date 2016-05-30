<?php
include('conexaodblogin.php');

session_start();

$usuario = $_REQUEST['user'];
$senha = $_REQUEST['password'];

$query="SELECT * FROM login 
		WHERE usuario='$usuario' AND senha='$senha'";
//echo $query."<br>";
		
$recordset = mysql_query($query,$conn);

//echo mysql_num_rows($recordset);

if(mysql_num_rows($recordset)==1)
{   // SUCESSO!
	$_SESSION["logado"]="OK";
	header('Location: buscar.php');
}
else
{   // FRACASSO!
	$_SESSION["logado"]="";	
	header('Location: canvas.html');
}
?>
