<?php
    if(empty($_POST['user'])){
        echo "<p> Campo usuário esta vazio </p>";
    }elseif($_POST['senha'] == null){
        echo "<p> O campo senha está vazio </p>";
    }else{
        $user = $_POST['user'];
        $senha = $_POST['senha'];
        $usuarios = ['usuario1','usuario2' ];
        $senhas = ['123','456' ];
        if($user == $usuarios[0] or $user == $usuarios[1]){
            echo "<p> usuário esta já existe </p>";
        }
        if($senha == $senhas[0] or $senha == $senhas[1]){
            echo "<p> senha esta já existe </p>";
        }

    }
    
?>