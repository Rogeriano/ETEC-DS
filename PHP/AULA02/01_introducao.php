<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução - PHP</title>
</head>
<body>
    <?php
    //código php precisa estar dentro da tag

    //declarando variáveis
    $nome    = "Josefino"; //string
    $idade   = 47; //inteiro 
    $altura  = 1.75; //real
    $isAluno = false; //booleano

    //escreve na tela
    echo $nome;
    echo "<br>";

    $texto = "Isso é diferente";
    $Texto = "Disso";

    $texto = "Isso";
    $Texto = "Disso";

    echo "$texto é diferente $Texto";
    echo "<br> Aula de PHP";
    
    //imprimir para o usuário: "Meu nome é XXXXX" 
    echo "<br> Meu nome é $nome <br>";

    echo "pulando linha <br> linha quebrada";

    //quebrando linhas
    echo "<br><br><br><hr>";
    echo "Nome: $nome - Idade: $idade - Altura: $altura";

    ?>
</body>
</html>