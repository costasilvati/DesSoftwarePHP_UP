<?php
    // receber dados de carteira, salvar no banco de dados
    require 'conectaBanco.php';
    $nome = $_POST['nome'];
    $desc = $_POST['descricao'];
    $limite = $_POST['limite'];
    if(empty($nome)){
        echo "<p>Campo nome deve ser preenchido </p>";
    }else{
        // Monta comando SQL
        $sql = "INSERT INTO carteira(nome, descricao, limite) VALUES 
                                        ('$nome','$desc', '$limite')";
        $banco->query($sql); // Executa comando SQL
        if($banco->affected_rows >= 1){
            echo "<p>Carteira $nome cadastrado com sucesso!</p>";
        }else{
            echo "Erro ao inserir carteira $nome no banco de dados!";
        }
    }

    $banco->close();
?>