<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
</head>
<body>

<form method="POST">
    <p>Digite o nome de usuário: <input type="text" name="usuario" required></p>
    <p>Digite a senha: <input type="password" name="senha" required></p>
    <input type="submit" value="Verificar">
</form>

<?php

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    while ($senha === $usuario){
    echo "Erro: a senha não pode ser igual ao nome de usuario. Tente novamente";
    return;
    }
    echo "Cadastro realizado com sucesso";
?>

</body>
</html>
