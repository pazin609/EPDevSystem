<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon"  href="../img/icon1.jpg">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/estilow.css">
	
	<title>Espaço Isaac Magalhães</title>

</head>

	<body>
 	 <header>
	  <a href="index.php">
			<img src="../img/logo2.png">
		</a>
     </header>

     <article class="cont">
     	<fieldset>
     		<legend>Cadastro</legend>
     		<form id="login" method="post" action="../controle/inserir.php">

     			<br> Digite Seu Nome: </br>
				 <br><input type="text" name="nome"></br>

     			<br> Digite Seu Email: </br>
				 <br><input type="text" name="email"></br>

     			<br> Digite Sua Senha: </br>
				 <br><input type="password" name="senha"></br>

     			<br> <input type="submit" name="sub" value="Prosseguir" id="but"> </br>
     			<div id="fun">
     				<br><a href="../index.php" id="Cadastrar">Login</a></br>

     </div>
    </form>
   </fieldset>
  </article>
 </body>
</html>
