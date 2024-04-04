<?php
    $nome = "Juliana";

    function calculaImc($peso, $altura){
        $imc = $peso/($altura * $altura);
        return $imc;
    }
?>