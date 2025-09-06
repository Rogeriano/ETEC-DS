<?php
session_start();
if (!isset($_SESSION['funcionario']) || $_SESSION['funcionario'] !== 'admin') {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard do Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard">
        <h2>Bem-vindo, <?php echo htmlspecialchars($_SESSION['funcionario']); ?>!</h2>
        <p>Você está no painel administrativo.</p>

        <h3>Cadastrar Novo Funcionário</h3>

        <?php if (isset($_SESSION['cadastro_sucesso'])): ?>
            <p style="color: green;"><?php echo $_SESSION['cadastro_sucesso']; unset($_SESSION['cadastro_sucesso']); ?></p>
        <?php elseif (isset($_SESSION['cadastro_erro'])): ?>
            <p style="color: red;"><?php echo $_SESSION['cadastro_erro']; unset($_SESSION['cadastro_erro']); ?></p>
        <?php endif; ?>

        <form action="cadastrar_funcionario.php" method="POST">
            <input type="text" name="usuario" placeholder="Nome de usuário" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Cadastrar Funcionário</button>
        </form>

        <br><br>
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>
