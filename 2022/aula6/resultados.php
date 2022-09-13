<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados </title>
</head>
<body>
    <h1>Resultados</h1>
    <div>
        Exercício 1
        <?php
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $soma = $valor1 + $valor2;
        ?>
        <p>A soma é: 
        <?php
        if($valor1 == $valor2){
            echo $soma *3;
        }else{
            echo $soma;
        }
        ?></p>
        
    </div>
    <div>
        <?php
        $texto = "juliana";
        $subtexto = "if";
        if(str_contains($texto, $subtexto)){
            echo "$subtexto esta em $texto";
        }else{
            echo "$subtexto NÃO esta em $texto";
        }
        ?>
    </div>
</body>
</html>