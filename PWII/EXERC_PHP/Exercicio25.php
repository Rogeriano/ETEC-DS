<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 25</title>
</head>
<body>

<form method="POST">
    <p>Telefonou para a vítima? <input type="text" name="telefonou" required></p>
    <p>Esteve no local do crime? <input type="text" name="esteve" required></p>
    <p>Mora perto da vítima? <input type="text" name="mora" required></p>
    <p>Devia para a vítima? <input type="text" name="devia" required></p>
    <p>Já trabalhou com a vítima? <input type="text" name="trabalhou" required></p>
    <input type="submit" value="Verificar">
</form>

<?php

    $respostas = 0;

    if ($_POST['telefonou'] == "sim") $respostas++;
    if ($_POST['esteve'] == "sim") $respostas++;
    if ($_POST['mora'] == "sim") $respostas++;
    if ($_POST['devia'] == "sim") $respostas++;
    if ($_POST['trabalhou'] == "sim") $respostas++;

    if ($respostas == 2) {
        $classificacao = "Suspeita";
    } elseif ($respostas >= 3 && $respostas <= 4) {
        $classificacao = "Cúmplice";
    } elseif ($respostas == 5) {
        $classificacao = "Assassino";
    } else {
        $classificacao = "Inocente";
    }

    echo "<p>Classificação: $classificacao</p>";

?>

</body>
</html>
