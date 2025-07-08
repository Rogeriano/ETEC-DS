<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body>
<form method="POST">
    <p>Digite o turno (M - Matutino, V - Vespertino, N - Noturno): 
        <input type="text" name="turnos" required> </p>
    <input type="submit" value="Verificar">
</form>

<?php

    $turno = $_POST['turnos'];

    if ($turno == "M" || $turno == "m") {
        echo "Bom Dia!";
    } elseif ($turno == "V" || $turno == "v") {
        echo "Boa Tarde!";
    } elseif ($turno == "N" || $turno == "n") {
        echo "Boa Noite!";
    } else {
        echo "Valor Inválido!";
    }

?>

</body>
</html>
