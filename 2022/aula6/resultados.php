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
    <h2>Exercício 1 - output</h2>
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
    <h2>Exercício 2 output</h2>
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
    <div>
        <h2>Exercício 3 - output</h2>
        <?php
            for($x=1; $x<=10; $x++){
                if($x< 10){
                    echo "$x-";
                }
                else{
                    echo "$x"."<br>";
                }
            }
        ?>
    </div>
    <div>
        <h2>Exercício 4</h2>
        <?php
        for($x=1;$x<=5;$x++){
            for ($y=1;$y<=$x;$y++){
	            echo "*";
	            if($y< $x){
		            echo " ";
		        }
            }
            echo "<br>";
        }
        ?>
    </div>
    <div>
        <h2>Exercício 5 - output</h2>
        <?php
            for ($row=0; $row<7; $row++){
                for ($column=0; $column<=7; $column++){
                    if ($column == 1 or (($row == 0 or $row == 6) and 
                    ($column > 1 and $column < 6)) or ($row == 3 and $column > 1 and 
                    $column < 5)){
                        echo "*";    
                    }else{
                        echo " ";     
                    }
	            }        
                echo "<br>";
            }
        ?>
    </div>
</body>
</html>