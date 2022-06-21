<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="2; URL='http://localhost/Projeto2C/index.php'"/>
	<link rel="icon"  href="../img/icon1.jpg">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/estilloo.css">
	<title>Redirecionando</title>
	<body>
		<h1>Redirecionando a página, aguarde...</h1>
	</body>
</head>
</html>

<?php
	$pdo = require 'conexao.php';

	$sql = 'insert into usuários(nome, email, senha) value(?, ?, ?)';

	$prepare = $pdo->prepare($sql);

	$prepare->bindParam(1, $_POST['nome']);
	$prepare->bindParam(2, $_POST['email']);
	$prepare->bindParam(3, $_POST['senha']);

	$prepare->execute();


	echo $prepare->rowCount();
?>