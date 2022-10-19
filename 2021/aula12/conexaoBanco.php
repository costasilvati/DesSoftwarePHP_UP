<?php
    $mysqli = new mysqli("127.0.0.1:3306","root","sql12345","aulanode2");

    if($mysqli->connect_errno){
        echo "Houve um erro na conexão com o banco de dados! <br> $mysqli->connection_status";
    }

    echo $mysqli->host_info."<br>";
    $mysqli->close();
?>