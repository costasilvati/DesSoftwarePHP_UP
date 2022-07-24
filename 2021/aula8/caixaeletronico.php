<?php
//Uma aplicação PHP que simule um caixa eletrônico, 
// que tem apenas notas de 50, 10 e 5. 
// Dado um valor de saque imprima quantas cedulas de 
// cada valor deve entregar. 
// Exemplo: Valor de saque: R$ 120.00 - 
// Saída: Você recebrá 2 cédulas de R$ 50 e 2 cédulas de R$ 10.
$valorDeSaque = 150;
$n100 = 0;
$n50 = 0;
$n10 = 0;
$n5 = 0;
$soma = 0;

echo "O valor de saque solicitado é: $valorDeSaque<br>";
if ($valorDeSaque >= 100){
    $result = $valorDeSaque/100;
    $n100 = intval($result); // extrai o valor inteiro 
    echo "$n100 Notas de 100 <br>";
    $soma = $n100 * 100;
    $valorDeSaque -= $soma;
    echo "Soma: $soma - Valor de saque restante: $valorDeSaque <br>";
}
if ($valorDeSaque >= 50){
    $result = $valorDeSaque/50;
    $n50 = intval($result); // extrai o valor inteiro 
    echo "$n50 Notas de 50 <br>";
    $soma += $n50 * 50;
    $valorDeSaque -= ($n50 * 50);
    echo "Soma: $soma - Valor de saque restante: $valorDeSaque <br>";
}
if ($valorDeSaque >= 10){
    $result = $valorDeSaque/10;
    $n10 = intval($result); // extrai o valor inteiro 
    echo "$n10 Notas de 10 <br>";
    $soma += $n10 * 10;
    $valorDeSaque -= ($n10 * 10);
    echo "Soma: $soma - Valor de saque restante: $valorDeSaque <br>";
}
if ($valorDeSaque >= 5){
    $result = $valorDeSaque/5;
    $n5 = intval($result); // extrai o valor inteiro 
    echo "$n5 Notas de 5 <br>";
    $soma += $n5 * 5;
    $valorDeSaque -= ($n5 * 5);
    echo "Soma: $soma - Valor de saque restante: $valorDeSaque <br>";
}else{
    echo "restante: $valorDeSaque";
}


?>