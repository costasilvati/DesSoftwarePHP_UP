<?php
$mysql = new mysqli("localhost","root","sql12345","faculdade");

if($mysql->connect_errno){
    echo "Houve um problema de conexão com MySQL <br> $mysql->connect_errno";
}
echo $mysql->host_info."<br>";

$mysql->close();
?>