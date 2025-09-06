<?php
session_start();
require 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
$sql->execute([$email]);
$usuario = $sql->fetch();

if ($usuario && password_verify($senha, $usuario['senha'])) {
    $_SESSION['usuario'] = $usuario;

    if ($usuario['tipo'] == 'admin') {
        header("Location: admin/dashboard.php");
    } else {
        header("Location: colaborador/dashboard.php");
    }
} else {
    echo "Login inválido!";
}
