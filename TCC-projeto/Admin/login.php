<?php
session_start();

// Usuário e senha válidos (exemplo)
$valid_user = 'admin';
$valid_pass = '123456';

// Dados do formulário
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Simples validação
if ($username === $valid_user && $password === $valid_pass) {
    $_SESSION['user'] = $username;
    header('Location: dashboard.php');
    exit();
} else {
    $_SESSION['error'] = 'Usuário ou senha inválidos.';
    header('Location: index.php');
    exit();
}
