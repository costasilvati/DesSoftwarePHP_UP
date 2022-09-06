<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <div>
        <h1>Cálculo de média</h1>
    </div>
    <div>
        <?php
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $media = ($nota1 + $nota2)/2; 
        ?>
        <p>
            Sua média é: <?php echo $media ?>
        </p>
        <p>
            Sua situação é: 
            <?php
            if($media >= 6.0){
                echo "Aprovado!";
            }else if($media >= 2.0){
                echo "Recuperação.";
            }else{
                echo "REPROVADO!";
            }
            ?>
        </p>
    </div>
</body>
</html>
