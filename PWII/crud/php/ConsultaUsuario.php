<?php
require_once "Conexao.php";

$email = $_POST['emailFormulario'];

if (!empty($email)) {
    $sql = "SELECT * FROM usuario WHERE email = :email";
    $requisicao = $conexao->prepare($sql);
    $requisicao->bindParam(':email', $email);

    try { 
        $requisicao->execute();
        $usuario = $requisicao->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            echo 'Nome: ' . $usuario['nome'] . "<br>";
            echo 'Email: ' . $usuario['email'] . "<br>";
        } else {
            echo "Usuário não encontrado e/ou não existe";
        }
    } catch (PDOException $e) {
        echo "Erro ao consultar: " . $e->getMessage();
    }

} else {
    echo "Digite um e-mail para realizar a consulta";
}
?>
