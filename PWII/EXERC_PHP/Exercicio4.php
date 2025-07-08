<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
</head>
<body>

<form method="POST">
    <p>Digite uma letra: <input type="text" name="letra" required></p>
    <input type="submit" value="Verificar">
</form>

<?php
$letra = $_POST['letra'];

if ($letra !== null) {
    if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
        echo "$letra é uma vogal.";
    } else {
        echo "$letra é uma consoante.";
    }
}
?>

</body>
</html>

