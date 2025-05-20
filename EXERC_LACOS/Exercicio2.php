<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <p>Digite o nome do usuario: <input type="text" name="nome" required></p>
    <p>Digite a sua senha: <input type="password" name="senha" required></p>
    <Input type="submit" value="Verificar"/>

</form>

<?php
//Faça um programa que leia um nome de usuário e a sua senha e não aceite a senha igual ao nome do usuário, mostrando uma mensagem de erro e voltando a pedir as informações. 

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    while ($nome == $senha) {
        echo "Erro nome e senha idênticos ";
        return;
    }
    
    
?>

