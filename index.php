<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widht=device-width, initial-scale=1">
	<link rel="icon" href="img/icon1.jpg">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilow.css">
	<title>Espaço Isaac Magalhães</title>
</head>

<body>
	<header>
		<a href="index.php">
			<img src="img/logo2.png">
		</a>
	</header>
	<article class="cont">
		<fieldset>
			<legend>Login</legend>
			<form name="formTeste" method="post" action="controle/pesquisar.php">
				<p>
					Email:
					<input type="email" name="email">
				</p>
				<p>
					Senha:
					<input type="password" name="senha">
				<p>
					<input type="submit" value="ENTRAR">
				</p>
			</form>
			<nav id="criar">
				<ul>
					<li><a href="controle/cadastro.php">Não tem uma conta? Cadastre-se!</a></li>
				</ul>
		</fieldset>
	</article>

</body>

</html>