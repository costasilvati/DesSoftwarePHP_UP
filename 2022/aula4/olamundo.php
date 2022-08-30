<?php
echo "Olá mundo! <br>";
$idade = 33;
$nome = "Juliana Costa";

// Comentário de uma linha
/*
Muitas linhas
de comentários
*/

//echo $idade;
//echo $nome;
echo 'Olá ' . $nome . ' sua idade é '.$idade.'<br>';
echo "Olá $nome sua idade é $idade <br>";

//Operações matemáticas
$soma = 2 + 2;
echo "Soma de 2 + 2 = $soma <br>";

$subtracao = 3 - 1;
echo "Subtração de 3 - 1 = $subtracao <br>";

$mult = 2 * 4;
echo "Multiplicação de 2 * 4 = $mult <br>";

$divisao = 5 /2;
echo "Divisão 5/2 = $divisao <br>";

$potencia = 3 ** 2;
echo "Exponenciação 3 ** 2 = $potencia <br>";

$restoDaDivisao = 10 % 3;
echo "Resto da divisão $restoDaDivisao <br>";

$booleana = true;

echo gettype($nome);

?>