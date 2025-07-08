<?php
require_once "Conexao.php"; // Ajuste o caminho se necessário

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['emailFormulario'];
    $senha = $_POST['senhaFormulario'];
    $novaSenha = $_POST['nova_senha'];
    $confirmarSenha = $_POST['confirmar_senha'];

    if (empty($email) || empty($senha) || empty($novaSenha) || empty($confirmarSenha)) {
        exit("Todos os campos são obrigatórios.");
    }

    if ($novaSenha !== $confirmarSenha) {
        exit("A nova senha e a confirmação não coincidem.");
    }

    // Verifica a senha atual no banco
    $sql = "SELECT senha FROM usuarios WHERE email = :email";
    $requisicao = $conexao->prepare($sql);
    $requisicao->bindParam(':email', $email);
    $requisicao->execute();
    $usuario = $requisicao->fetch(PDO::FETCH_ASSOC);

    if (!$usuario) {
        exit("Email não encontrado.");
    }

    if (!password_verify($senha, $usuario['senha'])) {
        exit("Senha atual incorreta.");
    }

    // Atualiza a senha
    $novaSenhaHash = password_hash($novaSenha, PASSWORD_DEFAULT);
    $sql = "UPDATE usuarios SET senha = :novaSenha WHERE email = :email";
    $requisicao = $conexao->prepare($sql);
    $requisicao->bindParam(':novaSenha', $novaSenhaHash);
    $requisicao->bindParam(':email', $email);

    if ($requisicao->execute()) {
        echo "Senha alterada com sucesso!";
    } else {
        echo "Erro ao alterar senha.";
    }
} else {
    echo "Acesso inválido.";
}
?>
