<?php


require_once 'Conexao.php'; // Deve retornar um objeto PDO em $conexao

if (isset($_POST['emailFormulario']) && isset($_POST['senhaFormulario'])) {
    $email = $_POST['emailFormulario'];
    $senha = $_POST['senhaFormulario'];

    try {
        // Prepara a SQL com 1 parâmetro
        $sql = "SELECT id, nome, senha FROM usuarios WHERE email = :email";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() === 1) {
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($senha, $usuario['senha'])) {
                // Login válido — cria sessão e redireciona
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_nome'] = $usuario['nome'];

                // Redireciona para sua página HTML
                header("Location: ../HTML/home.html");
                exit;
            } else {
                echo "<p>Senha incorreta.</p>";
            }
        } else {
            echo "<p>Usuário não encontrado.</p>";
        }
    } catch (PDOException $e) {
        echo "Erro no login: " . $e->getMessage();
    }
} else {
    echo "<p>Erro: Email ou senha não enviados.</p>";
}

?>