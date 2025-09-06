<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['tipo'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}
?>

<h2>Área do Administrador</h2>
<p>Bem-vindo, <?php echo $_SESSION['usuario']['nome']; ?></p>
<a href="cadastrar.php">Cadastrar Colaborador</a>
<br><a href="../logout.php">Sair</a>
