
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 23</title>
</head>
<body>

<form method="POST">
    <p>Digite um número: <input type="text" name="numero" required></p>
    <input type="submit" value="Verificar">
</form>

<?php

    $numero = $_POST['numero'];

    if (strpos($numero, '.') !== false) {
        echo "<p>$numero é um número DECIMAL.</p>";
    } else {
        echo "<p>$numero é um número INTEIRO.</p>";
    }

?>

</body>
