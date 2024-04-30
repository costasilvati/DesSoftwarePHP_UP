<?php
    require 'conectaBanco.php'; // conexão fecha 
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    // Monta a string que será executada
    $sql = "INSERT INTO login(email, senha) VALUES ('$usuario','$senha')";

    // Executar o código SQL
    $banco->query($sql);
    // Verifica quantas linhas foram afetadas
    if($banco->affected_rows >= 1){
        echo "<p> Usuário $usuario cadastrado com sucesso!</p>";
    }
    $banco->close();
?>