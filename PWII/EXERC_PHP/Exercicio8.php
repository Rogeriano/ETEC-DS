<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 08</title>
</head>
<body>

<form method="POST">
    <p>Preço do Produto 1: <input type="number" name="produto1" required></p>
    <p>Preço do Produto 2: <input type="number" name="produto2" required></p>
    <p>Preço do Produto 3: <input type="number" name="produto3" required></p>
    <input type="submit" value="Verificar">
</form>

<?php

    $produto1 = $_POST['produto1'];
    $produto2 = $_POST['produto2'];
    $produto3 = $_POST['produto3'];

    if ($produto1 <= $produto2 && $produto1 <= $produto3) {
        echo "O Produto 1 é o mais barato.";
    } elseif ($produto2 <= $produto1 && $produto2 <= $produto3) {
        echo "O Produto 2 é o mais barato.";
    } else {
        echo "O Produto 3 é o mais barato.";
    }

?>

</body>
</html>
