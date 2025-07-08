<?php 

$nome = $_POST["nome"]; 

$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$nota4 = $_POST["nota4"];

$resultado = $nota1 + $nota2 + $nota3 + $nota4;
$media = $resultado / 4;

echo "<h1>Sua nota da materia foi: </h1> <br> <hr>";
if($media >= 9){
    echo "MB (Muito Bom)";
}elseif($media >= 7 && $media <=8){
    echo "B (Bom)";
}elseif($media>= 5 && $media < 7){
    echo "R (Regular)";
}elseif($media >=0 && $media <5){
    echo "I (Insatisfatorio)";
}else{
    echo "Média Inválida";
}
echo "<br>";
echo "$nome, sua nota foi $media"


?>

