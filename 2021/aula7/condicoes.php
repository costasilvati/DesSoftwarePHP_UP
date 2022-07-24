<?php
$idade = 18;
$nome = "Juliana";
$acompanhantes = 1;

if ($idade >= 18){
    echo "Olá $nome. Seja bem vindo(a)!<br>";
}elseif($idade >= 16 && $acompanhantes >= 1){
    echo "Olá $nome. 
    Você e seus acompanhantes podem entrar <br>";
}else{
    echo "Olá $nome. 
    Só é permitida a entrada de maiores de 18 anos.";
}
?>