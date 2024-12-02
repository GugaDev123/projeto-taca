<?php
// Incluindo o arquivo de conexão
include_once("conexao.php");

// Variáveis para exibir mensagens
$msg = "";
$erro = "";

// Ação de adicionar ou editar usuário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['adicionar'])) {
        // Adicionando novo usuário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if ($nome && $email && $senha) {
            $stmt = $conexao->prepare("INSERT INTO tb_usuarios (nome, email, senha) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $nome, $email, $senha);
            if ($stmt->execute()) {
                $msg = "Usuário adicionado com sucesso!";
            } else {
                $erro = "Erro ao adicionar usuário!";
            }
        } else {
            $erro = "Todos os campos são obrigatórios!";
        }
    } elseif (isset($_POST['editar'])) {
        // Editando usuário existente
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if ($nome && $email && $senha) {
            $stmt = $conexao->prepare("UPDATE tb_usuarios SET nome = ?, email = ?, senha = ? WHERE id_usuario = ?");
            $stmt->bind_param("sssi", $nome, $email, $senha, $id);
            if ($stmt->execute()) {
                $msg = "Usuário editado com sucesso!";
            } else {
                $erro = "Erro ao editar usuário!";
            }
        } else {
            $erro = "Todos os campos são obrigatórios!";
        }
    }
}

// Ação de excluir usuário
if (isset($_GET['excluir'])) {
    $id = $_GET['excluir'];
    $stmt = $conexao->prepare("DELETE FROM tb_usuarios WHERE id_usuario = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $msg = "Usuário excluído com sucesso!";
    } else {
        $erro = "Erro ao excluir usuário!";
    }
}

// Query para buscar todos os usuários
$stmt = $conexao->prepare("SELECT * FROM tb_usuarios");
$stmt->execute();
$usuarios = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <style>
        body {
            background-color: #101728;
            font-family: Arial, sans-serif;
            color: white;
        }
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 0 20px;
        }
        h1 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
            color: #9800ff;
        }
        table {
            width: 100%;
            background-color: #2b3743;
            border-collapse: collapse;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #101728;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #3b4753;
        }
        tr:hover {
            background-color: #4b5d6b;
        }
        a {
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 4px;
            margin: 0 5px;
        }
        a:hover {
            opacity: 0.7;
        }
        .add {
            color: white;
            background-color: #9800ff;
        }
        .edit {
            color: white;
            background-color: #007bff;
        }
        .delete {
            color: white;
            background-color: #dc3545;
        }
        .form-container {
            margin-bottom: 20px;
            background-color: #1a2634;
            padding: 20px;
            border-radius: 8px;
        }
        .form-container input {
            padding: 8px;
            margin: 5px;
            border-radius: 4px;
            border: 1px solid #ddd;
            width: 100%;
        }
        .form-container button {
            padding: 8px 16px;
            margin-top: 10px;
            border-radius: 4px;
            border: none;
            background-color: #9800ff;
            color: white;
        }
        .msg {
            text-align: center;
            margin-bottom: 20px;
        }
        .show-password-btn {
            background-color: #007bff;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Usuários</h1>
        
        <?php if ($msg): ?>
            <div class="msg" style="color: green;"><?php echo $msg; ?></div>
        <?php elseif ($erro): ?>
            <div class="msg" style="color: red;"><?php echo $erro; ?></div>
        <?php endif; ?>

        <!-- Formulário de Adicionar/Editar -->
        <div class="form-container">
            <h2>Adicionar ou Editar Usuário</h2>
            <form action="" method="POST">
                <input type="hidden" name="id" value="<?php echo isset($usuario['id_usuario']) ? $usuario['id_usuario'] : ''; ?>">
                <input type="text" name="nome" placeholder="Nome" value="<?php echo isset($usuario['nome']) ? $usuario['nome'] : ''; ?>" required>
                <input type="email" name="email" placeholder="E-mail" value="<?php echo isset($usuario['email']) ? $usuario['email'] : ''; ?>" required>
                <input type="password" name="senha" id="senha" placeholder="Senha" value="<?php echo isset($usuario['senha']) ? $usuario['senha'] : ''; ?>" required>
                <button type="button" class="show-password-btn" onclick="togglePassword()">Ver / Esconder Senha</button>
                <?php if (isset($usuario['id_usuario'])): ?>
                    <button type="submit" name="editar">Editar Usuário</button>
                <?php else: ?>
                    <button type="submit" name="adicionar">Adicionar Usuário</button>
                <?php endif; ?>
            </form>
        </div>

        <!-- Tabela de Usuários -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Senha</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($usuarios)): ?>
                    <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($usuario['id_usuario']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['nome']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['email']); ?></td>
                            <td><?php echo htmlspecialchars($usuario['senha']); ?></td>
                            <td>
                                <a href="?editar=<?php echo $usuario['id_usuario']; ?>" class="edit">Editar</a>
                                <a href="?excluir=<?php echo $usuario['id_usuario']; ?>" class="delete" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Nenhum usuário encontrado</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script>
        function togglePassword() {
            var passwordField = document.getElementById('senha');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
            } else {
                passwordField.type = 'password';
            }
        }
    </script>
</body>
</html>
