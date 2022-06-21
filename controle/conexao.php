<?php
$conexao = null;

try {
    $conexao = new PDO('mysql:host=localhost;dbname=eisaacmagalhães', 'root', '');
    echo "Conectado com sucesso <br>";
} catch (Exception $e) {
    echo "Erro";
    die();
}

return $conexao;
