<?php
require_once 'Produto.php';

$p1 = new Produto;
$p1->descricao = "Feijão";
$p1->estoque = 10;
$p1->preco = 8.9;
// Utilizando método SEM parametros
print "<p>{$p1->toString()}</p> ";
// Utilizando método com passagem de parametros
// Receber valor via GET
// $p1->aumentarEstoque($_GET['unidades']);
// http://localhost/aula11_quarta_poo/index.php?unidades=4
$p1->aumentarEstoque(2);
print "<p>{$p1->toString()}</p> ";

require_once 'Produto2.php';
require_once 'Fabricante.php';
// Declara Produto2
$p2 = new Produto2("Qualquer", 1, 0);
$p2->setDescricao("Farinha");
$p2->setEstoque(5);
$p2->setPreco(5.9);
// print "<p>{$p2->toString()}</p> ";
// Declara Fabricante
$fab1 = new Fabricante;
$fab1->setNome("Coca cola");
$fab1->setEndereco("Qualquer rua");
$fab1->setDocumento("0909090");
echo "<p> {$fab1->__toString()} </p>";

// Associar Fabricante $fab1 a Produto2 $p2
$p2->setFabricante($fab1);
echo "<p> {$p2->__toString()} </p>";

// Utilizando a classe Eletronico que herda de Produto2
require_once "Eletronico.php";
$eletro1 = new Eletronico("Celular Pocket Edition", 3, 200.9, "Bivolt");
// Instanciando Fabricante de $eletro1
$fab2 = new Fabricante;
$fab2->setNome("Samsung");
$fab2->setEndereco("Coreia do Sul");
$fab2->setDocumento("0909999999");
// Associa $fab2 a $eletro1
$eletro1->setFabricante($fab2);
// Imprime dados de $eletro1
echo "<p> {$eletro1->__toString()} </p>";

require_once "Cesta.php";
$cesta1 = new Cesta;
$cesta1->adicionaItem($p2);
$cesta1->adicionaItem($eletro1);
echo "<p> Exibindo itens da cesta </p>";// Marcar impressão
$cesta1->exibeLista();

echo "<p> Total da cesta </p>";
echo "Total da cesta é: R$ {$cesta1->calculaTotal()}";

unset($p2); // chama destruct
?>