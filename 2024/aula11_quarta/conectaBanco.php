<?php
    $banco = new mysqli("localhost", "root", "1234","upcash",3306);
    if($banco->connect_errno){
        echo "Erro ao conectar no banco de dados";
    }else{
        echo "Conectado com sucesso!";
    }
    //$banco->close();
?>