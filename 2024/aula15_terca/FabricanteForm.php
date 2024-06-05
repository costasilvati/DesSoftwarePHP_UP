<?php
include_once "dao/ConnectionFactory.php";
include_once "dao/FabricanteDao.php";
include_once "model/Fabricante.php";

$fabricanteDao = new FabricanteDao();
include 'view/fabricante.php';
?>