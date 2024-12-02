<?php
// Inclui o arquivo de conexão com o banco de dados
require_once 'conexao.php';

// Função de adicionar serviço
if (isset($_POST['adicionar'])) {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    // Insere o novo serviço no banco de dados
    $stmt = $conexao->prepare("INSERT INTO sevicos (nome, preco) VALUES (?, ?)");
    $stmt->bind_param("sd", $nome, $preco);
    $stmt->execute();

    header("Location: servicos.php");
    exit;
}

// Função de edição de serviço
if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    // Atualiza o serviço no banco de dados
    $stmt = $conexao->prepare("UPDATE sevicos SET nome = ?, preco = ? WHERE id = ?");
    $stmt->bind_param("ssi", $nome, $preco, $id);
    $stmt->execute();

    header("Location: servicos.php");
    exit;
}

// Função de exclusão de serviço
if (isset($_POST['excluir'])) {
    $id = $_POST['id'];

    // Exclui o serviço do banco de dados
    $stmt = $conexao->prepare("DELETE FROM sevicos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header("Location: servicos.php");
    exit;
}

// Consulta os serviços no banco de dados
$query = "SELECT * FROM sevicos";
$result = $conexao->query($query);

// Verifica se a consulta foi bem-sucedida
if ($result) {
    $servicos = $result->fetch_all(MYSQLI_ASSOC);
} else {
    echo "Erro ao buscar serviços: " . $conexao->error;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Serviços</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #101728; /* Cor de fundo */
            color: white; /* Texto branco */
        }
        .btn-primary {
            background-color: #9800ff; /* Cor primária */
            border-color: #9800ff;
        }
        .btn-primary:hover {
            background-color: #7d00cc;
            border-color: #7d00cc;
        }
        .btn-primary:active {
            background-color: #6600b3; /* Cor mais escura quando clicado */
            border-color: #6600b3;
        }
        .action-icons i {
            cursor: pointer;
            margin: 0 10px;
        }
        .modal-title {
            color:#9800ff;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Lista de Serviços</h1>
    
    <!-- Botão Adicionar -->
    <div class="mb-3 text-center">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adicionarModal">Adicionar Serviço</button>
    </div>

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($servicos as $servico): ?>
            <tr>
                <td><?= $servico['id'] ?></td>
                <td><?= $servico['nome'] ?></td>
                <td>R$ <?= number_format($servico['preco'], 2, ',', '.') ?></td>
                <td class="action-icons">
                    <i class="bi bi-pencil-square text-primary" data-bs-toggle="modal" data-bs-target="#editarModal<?= $servico['id'] ?>"></i>
                    <i class="bi bi-eye text-success" data-bs-toggle="modal" data-bs-target="#consultarModal<?= $servico['id'] ?>"></i>
                    <i class="bi bi-trash text-danger" data-bs-toggle="modal" data-bs-target="#excluirModal<?= $servico['id'] ?>"></i>
                </td>
            </tr>

            <!-- Modal Editar -->
            <div class="modal fade" id="editarModal<?= $servico['id'] ?>" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="background-color: #101728;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editarModalLabel" style="color:#9800ff">Editar Serviço</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" method="POST">
                            <div class="modal-body">
                                <input type="hidden" name="id" value="<?= $servico['id'] ?>">
                                <div class="mb-3">
                                    <label for="nome" class="form-label" style="color:#9800ff">Nome</label>
                                    <input type="text" class="form-control" name="nome" value="<?= $servico['nome'] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="preco" class="form-label" style="color:#9800ff">Preço</label>
                                    <input type="number" step="0.01" class="form-control" name="preco" value="<?= $servico['preco'] ?>" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" name="editar" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal Consultar -->
            <div class="modal fade" id="consultarModal<?= $servico['id'] ?>" tabindex="-1" aria-labelledby="consultarModalLabel" aria-hidden="true">
                <div class="modal-dialog" >
                    <div class="modal-content" style="background-color: #101728;">
                        <div class="modal-header">
                            <h5 class="modal-title" id="consultarModalLabel">Detalhes do Serviço</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>ID:</strong> <?= $servico['id'] ?></p>
                            <p><strong>Nome:</strong> <?= $servico['nome'] ?></p>
                            <p><strong>Preço:</strong> R$ <?= number_format($servico['preco'], 2, ',', '.') ?></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Excluir -->
            <div class="modal fade" id="excluirModal<?= $servico['id'] ?>" tabindex="-1" aria-labelledby="excluirModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="background-color: #101728;">
                        <div class="modal-header" style="background-color: #101728;">
                            <h5 class="modal-title" id="excluirModalLabel" style="color:#9800ff">Excluir Serviço</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" method="POST">
                            <div class="modal-body" style="background-color: #101728;">
                                <p>Tem certeza que deseja excluir o serviço <strong><?= $servico['nome'] ?></strong>?</p>
                                <input type="hidden" name="id" value="<?= $servico['id'] ?>">
                            </div>
                            <div class="modal-footer" style="background-color: #101728;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal Adicionar -->
<div class="modal fade" id="adicionarModal" tabindex="-1" aria-labelledby="adicionarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #101728; text-align:center;">
                <h5 class="modal-title" id="adicionarModalLabel">Adicionar Serviço</h5>
                <button type="button" class="btn-close" style="color: #fafafa;" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                <div class="modal-body" style="background-color: #101728;">
                    <div class="mb-3">
                        <label for="nome" class="form-label" style="color:#9800ff">Nome</label>
                        <input type="text" class="form-control" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="preco" class="form-label" style="color:#9800ff">Preço</label>
                        <input type="number" step="0.01" class="form-control" name="preco" required>
                    </div>
                </div>
                <div class="modal-footer" style="background-color: #101728;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" name="adicionar" class="btn btn-primary">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
