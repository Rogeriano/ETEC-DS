<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12</title>
</head>
<body>

<form method="POST">
    <p>Digite o numero da tabuada de 1 a 10 </p>
        <input type="number" name="numero" required>
    <input type="submit" value="Verificar"><br><hr><br>
</form>

<?php
    $numero = $_POST["numero"];

    if ($numero >= 1 && $numero <= 10) {
        echo "<p>Tabuada do $numero</p>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado<br>";
        }
    } else {
        echo "Somente tabuada do 1 ao 10";
    } 

?>
</body>
</html>