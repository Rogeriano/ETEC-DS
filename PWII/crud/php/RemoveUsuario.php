<?php

require_once"Conexao.php";

$email = $_POST['emailFormulario'];
    if(!empty($email)){

        $sql = "DELETE FROM usuario WHERE email = :email";
        $requisicao = $conexao-> prepare($sql);
        $requisicao->bindParam(':email', $email);

        try {
            $requisicao->execute();
            if($requisicao->rowCount() > 0){
                echo'Usuário removido com êxito';
            }else{
                echo 'Usuário não existe';
            }
        }catch(PDOException $e) {
            echo "ERRO ao remover" . $e->getMessage();
        }
    }else{
            echo"Digite um e-mail para remover algum usuario";
}



    
?>