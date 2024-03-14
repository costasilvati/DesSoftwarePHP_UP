<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body>
<?php
    $num1 = 5;
    $num2 = 6;
    $soma = $num1 + $num2;
    if($soma > 10){
        echo "O resultado da soma $num1 + $num2 = $soma <br>";
        echo ($soma + 8);
    }else{
        echo "O resultado da soma $num1 + $num2 = $soma <br>";
        echo ($soma - 5);
    }
?>    
</body>
</html>