<?php
    $requsicao = $_POST['requisicao'];
    switch ($requsicao) {
        case 'Atualizar':
            include'AtualizaUsuario.php';
            break;
        case 'Cadastrar':
            include 'CadastroUsuario.php';
            break;
        case 'Consultar':
            include 'ConsultaUsuario.php';
            break;
        case 'Remover':
            include 'RemoverUsuario.php';
            break; 
        
        default:
            echo'Ação invalida, por gentileza selecionar uma opção válida';
            break;
    }




?>