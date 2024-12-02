<?php
$hostname = "localhost";
$database = "taca digital";
$username = "root";
$password = "";

// Estabelecendo a conexão com o banco de dados
$conexao = new mysqli($hostname, $username, $password, $database);

// Verificando se houve erro na conexão
if ($conexao->connect_error) {
    die("Erro ao conectar ao banco de dados: " . $conexao->connect_error);
}
?>
