<?php
$contador = 0;
$numero = 3;
//$contador = $contador + 1;
//$contador++;
//$contador += 1;

while($contador <= 10){
    echo "$numero * $contador = ".($numero * $contador)." <br>";
    $contador++;
}
 
echo "Fim do while";
echo "Imprima os múltiplos de 3 entre 1 e 100<br>";
$final = 100;
for ($i = 1; $i <= $final; $i++ ){
    if (($i % 3) == 0){
        echo "$i é divisivel por 3 <br>";
    }
    echo "$i --<br>";
}

echo "Fim do FOR";
?>