<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 17</title>
</head>
<body>

<form method="POST">
    <p>Digite um ano: <input type="number" name="ano" required></p>
    <input type="submit" value="Verificar">
</form>

<?php

    $ano = $_POST['ano'];

    if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
        echo "<p>O ano $ano é bissexto.</p>";
    } else {
        echo "<p>O ano $ano não é bissexto.</p>";
    }

?>

</body>
</html>
