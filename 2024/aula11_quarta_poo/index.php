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
$p2 = new Produto2("Qualquer", 1, 0);
$p2->setDescricao("Farinha");
$p2->setEstoque(5);
$p2->setPreco(5.9);

print "<p>{$p2->toString()}</p> ";
?>