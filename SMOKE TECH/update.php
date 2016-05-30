<?php
include "conexaoaobanco.php";

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

$query="UPDATE cadastro 
		SET  nome='$nome', sobrenome='$sobrenome', telefone=$telefone , email='$email' , endereco='$endereco' , cep=$cep , cidade='$cidade' , estado='$estado' , pedido='$pedido'
		WHERE cpf=$cpf";
$recordset = mysql_query($query,$conn);	
//echo $query;

header('Location: todos.php');
?>