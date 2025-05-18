<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 09</title>
</head>
<body>

<form method="POST">
    <p>Num 1: <input type="number" name="n1" required></p>
    <p>Num 2: <input type="number" name="n2" required></p>
    <p>Num 3: <input type="number" name="n3" required></p>
    <input type="submit" value="Verificar">
</form>

<?php

    $a = $_POST['n1'];
    $b = $_POST['n2'];
    $c = $_POST['n3'];

    if ($a >= $b && $a >= $c) {
        if ($b >= $c) {
            echo "$a, $b, $c";
        } else {
            echo "$a, $c, $b";
        }
    } elseif ($b >= $a && $b >= $c) {
        if ($a >= $c) {
            echo "$b, $a, $c";
        } else {
            echo "$b, $c, $a";
        }
    } else {
        if ($a >= $b) {
            echo "$c, $a, $b";
        } else {
            echo "$c, $b, $a";
        }
    }

?>

</body>
</html>
