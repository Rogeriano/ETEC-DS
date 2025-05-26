<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
</head>
<body>

<form method="POST">
    <p>Digite a base: </p>
        <input type="number" name="base" required>
    <p>Digite o expoente: </p>
        <input type="number" name="expoente" required>
    <input type="submit" value="Verificar"><br><hr><br>
</form>


<?php
    $base = $_POST["base"];
    $expoente = $_POST["expoente"];
    $resultado = 1;

    if ($expoente >= 0) {
        for ($i = 1; $i <= $expoente; $i++) {
            $resultado = $resultado * $base;
        }
    } else {
        for ($i = 1; $i <= $expoente; $i++) {
            $resultado = $resultado * $base;
        }
        $resultado = 1 / $resultado;
    }

    echo "$base elevado a $expoente é $resultado";
    ?>

</body>
</html>