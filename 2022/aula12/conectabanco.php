<?php
$banco = new mysqli("localhost","root","","faculdade",3310);
if($banco->connect_errno){
    echo "Erro ao conectar no banco de dados";
}else{
    echo "Conectado no banco de dados";
}
?>