<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>

<form method="POST">
    <p>Digite um número de 0 a 10: <input type="text" name="nota" required></p>
    <input type="submit" value="Verificar">
</form>

<?php

    $nota = $_POST["nota"];

    while ($nota < 0 || $nota > 10) {
        echo "<p> Número inválido. </p>";
        return;
    }
    echo "<p>Número válido: $nota</p> <br>";
?>

</body>
</html>
