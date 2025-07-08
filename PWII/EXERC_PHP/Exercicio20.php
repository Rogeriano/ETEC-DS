<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 20</title>
</head>
<body>

<form method="POST">
    <p>Nota 1: <input type="number" name="nota1"  required></p>
    <p>Nota 2: <input type="number" name="nota2"  required></p>
    <p>Nota 3: <input type="number" name="nota3"  required></p>
    <input type="submit" value="Verificar">
</form>

<?php

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $media = ($nota1 + $nota2 + $nota3) / 3;

    if ($media == 10) {
        echo "<p>Aprovado com Distinção! Sua média foi: " . $media . "</p>";
    } elseif ($media >= 7) {
        echo "<p>Aprovado! Sua média foi: " . $media . "</p>";
    } else {
        echo "<p>Reprovado! Sua média foi: " . $media . "</p>";
    }

?>

</body>
</html>
