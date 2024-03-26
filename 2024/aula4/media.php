<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Atividade IF - media</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
                $nota1 = $_POST['nota1'];
                $nota2 = $_POST["nota2"]; // Arrays associativos
                echo "<p>A nota 1 é: $nota1, Nota 2 é: $nota2</p>";
                $media = ($nota1 + $nota2)/2;
                if($media >= 6){
                    echo "<p> Sua situação é APROVADO!</p>";
                }else if($media >= 2){
                    echo "<p> Sua situação é RECUPERAÇÃO! </p>";
                }else{
                    echo "<p> Sua situação é REPROVADO! </p>";
                }
            ?>

        </div>
    </div>
</body>
</html>