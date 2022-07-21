<?php
$idade = [21, 23, 19, 25, 30, 41, 18];
$umValor = $idade[0];
echo $umValor;
echo $idade."<br>";

asort($idade);

for ($i = 0; $i < count($idade); $i++){
    echo $idade[$i] . PHP_EOL;
}

echo "<br>";

$carros = array(
    'Palio' => array('cor'=>'azul', 'potencia' => '1.0', 'opicionais'=> 'Ar Cond.'),
    'Corsa' => array('cor'=>'prata', 'potencia' => '1.4', 'opicionais'=> 'Travas El.'));

$carros['Palio']['potencia'] = '1.4';

foreach($carros as $item => $caracteristicas){
    echo "Modelo: $item <br>";
    echo "Características - ";
    foreach($caracteristicas as $caracteristica => $valor){
        echo "$caracteristica : $valor". PHP_EOL;
    }
    echo "<br>";
}
?>