<?php
include_once "../dao/ConnectionFactory.php";
include_once "../dao/FabricanteDao.php";
include_once "../model/Fabricante.php";

$fabricante = new Fabricante();
$fabricanteDao = new FabricanteDao();

//pega todos os dados passado por POST

$d = filter_input_array(INPUT_POST);

//se a operação for gravar entra nessa condição
if(isset($_POST['cadastrar'])){
    $fabricante->setNome($d['nome']);
    $fabricante->setEndereco($d['endereco']);
    $fabricante->setDocumento($d['documento']);

    $fabricanteDao->inserir($fabricante);
    header("Location: ../FabricanteForm.php");
}// se a requisição for deletar
else if(isset($_GET['del'])){
    $fabricante->setId($_GET['del']);
    $fabricanteDao->delete($fabricante);
    header("Location: ../FabricanteForm.php");
}
?>