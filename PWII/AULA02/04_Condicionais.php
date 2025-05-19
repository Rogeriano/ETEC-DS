<?php

echo "<h1> Exemplo 1 </h1>";
    $idade = 14;
    $isCNH = false;

    if($idade >= 18){
        echo "Maior de idade <br>";
    }else{
        echo "Menor de idade <br>";
    }


    if($isCNH && $idade >= 18){
        echo "Apto a dirigir <br>";
    }else{
        echo "Menor de idade <br>";
    }
    
    if($isCNH && $idade >= 19){
        echo "Apto para dirigir";
    }else if(!$isCNH && $idade >= 18){
        echo "Apto a tirar a CNH, não pode dirigir <br>";
    }else{
        echo "Não pode dirigir";
    }


    echo "<br> <br> <br> <hr>";

echo "<h1> Exemplo 2 </h1>";

    $possuiAcesso = false;
    if(!$possuiAcesso){
        echo "acesso negado <br>";
    }else{
        echo "acesso autorizado <br>";
    }

    echo "<br> <hr>";


echo "<h1> Exemplo 3 </h1>";
echo "<p> Validando média do aluno </p>";

$mediaAluno = 3;

if($mediaAluno >= 9){
    echo "Nota: MB";
}elseif($mediaAluno >= 7 && $mediaAluno <=8){
    echo "Nota: B";
}elseif($mediaAluno>= 5 && $mediaAluno < 7){
    echo "Nota: R";
}elseif($mediaAluno >=0 && $mediaAluno <5){
    echo "Nota: I";
}else{
    echo "Média Inválida";
}

?>