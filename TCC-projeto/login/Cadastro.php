<?php
require 'conexao.php';

// Se estiver editando
$editar = false;
$funcionario = ['id' => '', 'nome' => '', 'login' => '', 'data_nascimento' => '', 'cargo' => ''];

if (isset($_GET['editar'])) {
    $editar = true;
    $id = $_GET['editar'];
    $stmt = $pdo->prepare("SELECT * FROM funcionarios WHERE id = ?");
    $stmt->execute([$id]);
    $funcionario = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Listar todos
$stmt = $pdo->query("SELECT * FROM funcionarios ORDER BY id DESC");
$funcionarios = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Funcionários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-4">
    <h2 class="mb-4">Cadastro de Funcionários</h2>

    <form action="salvar.php" method="post">
        <input type="hidden" name="id" value="<?= $funcionario['id'] ?>">

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" required value="<?= $funcionario['nome'] ?>">
        </div>

        <div class="mb-3">
            <label for="login" class="form-label">Login:</label>
            <input type="text" name="login" class="form-control" required value="<?= $funcionario['login'] ?>">
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha: <?= $editar ? '<small>(Deixe em branco para não alterar)</small>' : '' ?></label>
            <input type="password" name="senha" class="form-control" <?= $editar ? '' : 'required' ?>>
        </div>

        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" class="form-control" value="<?= $funcionario['data_nascimento'] ?>">
        </div>

        <div class="mb-3">
            <label for="cargo" class="form-label">Cargo/Perfil:</label>
            <select name="cargo" class="form-select" required>
                <option value="">-- Selecione --</option>
                <option value="Admin" <?= $funcionario['cargo'] === 'Admin' ? 'selected' : '' ?>>Admin</option>
                <option value="Garçom" <?= $funcionario['cargo'] === 'Garçom' ? 'selected' : '' ?>>Garçom</option>
                <option value="Cozinha" <?= $funcionario['cargo'] === 'Cozinha' ? 'selected' : '' ?>>Cozinha</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary"><?= $editar ? 'Atualizar' : 'Cadastrar' ?></button>
        <?php if ($editar): ?>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        <?php endif; ?>
    </form>

    <hr class="my-4">

    <h4>Funcionários Cadastrados</h4>
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>Nome</th>
                <th>Login</th>
                <th>Data Nasc.</th>
                <th>Cargo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($funcionarios as $f): ?>
            <tr>
                <td><?= htmlspecialchars($f['nome']) ?></td>
                <td><?= htmlspecialchars($f['login']) ?></td>
                <td><?= $f['data_nascimento'] ?></td>
                <td><?= $f['cargo'] ?></td>
                <td>
                    <a href="?editar=<?= $f['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                    <a href="excluir.php?id=<?= $f['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
