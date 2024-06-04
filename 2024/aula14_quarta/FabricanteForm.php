<?php
include 'view/fabricante.html';

if(isset($_POST['nome']) and isset($_POST['documento'])){
    require_once 'model/Fabricante.php';
    $fabricante = new Fabricante;
    $fabricante->setNome($_POST['nome']);
    $fabricante->setEndereco($_POST['endereco']);
    $fabricante->setDocumento($_POST['documento']);
    
}
?>