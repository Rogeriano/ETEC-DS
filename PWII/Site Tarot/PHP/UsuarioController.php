<?php
    $requsicao = $_POST['requisicao'];
    switch ($requsicao) {
        case 'Atualizar':
            include 'AtualizaSenha.php';
            break;
        case 'Cadastrar':
            include 'CadastroUsuario.php';
            break;
        case 'Logar':
            include 'LogarUsuario.php';
            break;
        default:
            echo'Ação invalida, por gentileza selecionar uma opção válida';
            break;
    }




?>