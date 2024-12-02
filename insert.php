<?php

// Incluindo a conexão com o banco de dados
include_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificando se os dados foram enviados via POST
    if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["senha"])) {
        // Recebendo os dados do formulário
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        // Verificando se os campos não estão vazios
        if (empty($nome) || empty($email) || empty($senha)) {
            echo "Todos os campos são obrigatórios.";
            exit; // Interrompe o código se algum campo estiver vazio
        }

        // Criptografando a senha
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // Comando SQL para inserção com placeholders
        $sql = "INSERT INTO tb_usuarios (nome, email, senha) VALUES (?, ?, ?)";

        // Preparando a consulta
        if ($stmt = $conexao->prepare($sql)) {
            // Vinculando os parâmetros
            $stmt->bind_param("sss", $nome, $email, $senhaHash);

            // Executando a consulta
            if ($stmt->execute()) {
                echo "Cadastro realizado com sucesso!";
            } else {
                echo "Erro ao cadastrar: " . $stmt->error;
            }

            // Fechando a declaração
            $stmt->close();
        } else {
            echo "Erro ao preparar a consulta: " . $conexao->error;
        }
    } else {
        echo "Dados do formulário não recebidos corretamente.";
    }
}

// Fechando a conexão com o banco de dados
$conexao->close();
?>
