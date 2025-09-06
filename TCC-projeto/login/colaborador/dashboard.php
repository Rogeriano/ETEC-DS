<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario']['tipo'] !== 'colaborador') {
    header("Location: ../login.php");
    exit;
}
?>

<h2>Área do Colaborador</h2>
<p>Bem-vindo, <?php echo $_SESSION['usuario']['nome']; ?></p>
<a href="../logout.php">Sair</a>
