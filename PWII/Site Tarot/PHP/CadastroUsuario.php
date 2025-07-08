<?php
    require_once 'Conexao.php';

    $nome  = $_POST['nomeFormulario'];
    $email = $_POST['emailFormulario'];
    $telefone  = $_POST['telefoneFormulario'];
    $senha = $_POST['senhaFormulario']; 


    
    if(!empty($nome) && !empty($email) && !empty($telefone) && !empty($senha)){
        //Pegamos a senha digitado pelo usuário e realizamos uma criptografia nela
        //com base nisso, vamos armazenar o hash(criptografia) no banco de dados.
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        //Instrução DML
        $sql = "INSERT INTO usuarios (nome, email, telefone, senha) VALUES (:nome, :email, :telefone , :senha)";

        //preparar a inserção de dados no banco
        $requisicao = $conexao->prepare($sql);

        $requisicao->bindParam(':nome', $nome);
        $requisicao->bindParam(':email', $email);
        $requisicao->bindParam(':telefone', $telefone);
        $requisicao->bindParam(':senha', $senhaHash);

        try{
            $requisicao->execute();
            echo 'Usuário cadastrado com sucesso!';
        }catch(PDOException $e){
            echo 'Erro ao cadastrar: ' . $e->getMessage();
        }

    }else{
        echo '<p style="color:red;">Preencha todos os campos. </p>';
    }

?>