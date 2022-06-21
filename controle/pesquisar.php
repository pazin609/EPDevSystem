<?php
$pdo = require 'conexao.php';
$sql = 'select * from usuários';

foreach ($pdo->query($sql) as $key => $valor) {
	if (($_POST['email'] == $valor['email']) && ($_POST['senha'] == $valor['senha'])) {
		header('location:../page/areaUsuario.php');
	} else {
		header('location:../index.php');
	}
}
