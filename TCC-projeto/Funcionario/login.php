<?php
session_start();
require 'conexao.php';

$usuario = $_POST['usuario'] ?? '';
$senha   = $_POST['senha'] ?? '';

if ($usuario && $senha) {
    $stmt = $pdo->prepare("SELECT * FROM funcionarios WHERE usuario = :usuario");
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();

    $funcionario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($funcionario && hash('sha256', $senha) === $funcionario['senha']) {
        $_SESSION['funcionario'] = $funcionario['usuario'];
        header('Location: dashboard.php');
        exit();
    } else {
        $_SESSION['erro'] = 'Usuário ou senha inválidos.';
        header('Location: index.php');
        exit();
    }
} else {
    $_SESSION['erro'] = 'Preencha todos os campos.';
    header('Location: index.php');
    exit();
}
