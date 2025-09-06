<?php
session_start();
require 'conexao.php';

if (!isset($_SESSION['funcionario']) || $_SESSION['funcionario'] !== 'admin') {
    header('Location: index.php');
    exit();
}

$usuario = $_POST['usuario'] ?? '';
$senha   = $_POST['senha'] ?? '';

if ($usuario && $senha) {
    // Verifica se já existe
    $stmt = $pdo->prepare("SELECT id FROM funcionarios WHERE usuario = :usuario");
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $_SESSION['cadastro_erro'] = "Usuário já existe.";
    } else {
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO funcionarios (usuario, senha) VALUES (:usuario, :senha)");
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':senha', $senha_hash);
        
        if ($stmt->execute()) {
            $_SESSION['cadastro_sucesso'] = "Funcionário cadastrado com sucesso!";
        } else {
            $_SESSION['cadastro_erro'] = "Erro ao cadastrar funcionário.";
        }
    }
} else {
    $_SESSION['cadastro_erro'] = "Preencha todos os campos.";
}

header('Location: dashboard.php');
exit();
