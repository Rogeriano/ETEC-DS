<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05</title>
</head>
<body>

<form method="POST">
    <p>Nota 1: <input type="number" name="nota1" required></p>
    <p>Nota 2: <input type="number" name="nota2" required></p>
    <input type="submit" value="Verificar">
</form>

<?php

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];

    $media = ($nota1 + $nota2) / 2;

    if ($media == 10) {
        echo "Aprovado com Distinção";
    } elseif ($media >= 7) {
        echo "Aprovado";
    } else {
        echo "Reprovado";
    }

?>

</body>
</html>
