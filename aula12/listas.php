<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];
$umaIdade = $idadeList[4];

echo $umaIdade . "<br>";
echo $idadeList . "<br>";

for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}
?>