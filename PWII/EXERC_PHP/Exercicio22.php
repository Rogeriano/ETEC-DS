<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 22</title>
</head>
<body>


<form method="POST">
    <p>Digite um número: <input type="number" name="numero" required></p>
    <input type="submit" value="Verificar">
</form>

<?php
    $numero = $_POST['numero'];

    if ($numero % 2 == 0) {
        echo "<p>$numero é um número PAR.</p>";
    } else {
        echo "<p>$numero é um número ÍMPAR.</p>";
    }

?>

</body>
</html>
