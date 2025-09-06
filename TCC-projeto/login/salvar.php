<?php
require 'conexao.php';

$id = $_POST['id'] ?? '';
$nome = $_POST['nome'] ?? '';
$login = $_POST['login'] ?? '';
$senha = $_POST['senha'] ?? '';
$data_nascimento = $_POST['data_nascimento'] ?? null;
$cargo = $_POST['cargo'] ?? '';

// Validação básica
if (!$nome || !$login || !$cargo) {
    die("Campos obrigatórios não preenchidos.");
}

// Verificar se login já existe (exceto se for o mesmo ID em edição)
if ($id) {
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM funcionarios WHERE login = ? AND id != ?");
    $stmt->execute([$login, $id]);
} else {
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM funcionarios WHERE login = ?");
    $stmt->execute([$login]);
}

$existe = $stmt->fetchColumn();
if ($existe) {
    die("Erro: o login '$login' já está em uso. Escolha outro.");
}

// Atualizar ou Inserir
if ($id) {
    if ($senha) {
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "UPDATE funcionarios SET nome=?, login=?, senha=?, data_nascimento=?, cargo=? WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $login, $senha_hash, $data_nascimento, $cargo, $id]);
    } else {
        $sql = "UPDATE funcionarios SET nome=?, login=?, data_nascimento=?, cargo=? WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $login, $data_nascimento, $cargo, $id]);
    }
} else {
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
    $sql = "INSERT INTO funcionarios (nome, login, senha, data_nascimento, cargo)
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $login, $senha_hash, $data_nascimento, $cargo]);
}

header('Location: index.php');
exit;

