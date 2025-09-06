<?php
session_start();
require '../conexao.php';

if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['tipo'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $tipo = 'colaborador';

    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha, tipo) VALUES (?, ?, ?, ?)");
    if ($stmt->execute([$nome, $email, $senha, $tipo])) {
        echo "Colaborador cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar.";
    }
}
?>

<h2>Cadastrar Novo Colaborador</h2>
<form method="post">
    <input type="text" name="nome" placeholder="Nome" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="senha" placeholder="Senha" required><br>
    <button type="submit">Cadastrar</button>
</form>
<a href="dashboard.php">Voltar</a>
