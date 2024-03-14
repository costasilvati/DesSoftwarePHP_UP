<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>media - Aula 3</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Desempenho do aluno</h1>
                <p>
                    <?php
                        $nota1 = $_POST["nota1"];
                        $nota2 = $_POST["nota2"];
                        echo "A nota 1 é: $nota1, a nota 2 é: $nota2";
                    ?>
                </p>
                <p>
                    <?php
                        $media = ($nota1 + $nota2)/ 2;
                        echo "A média do aluno é: $media";
                    ?>
                </p>
                <p>
                    <?php
                        if($media >= 6){
                            echo "Sua situação é: APROVADO!";
                        } else if($media >= 2){
                            echo "Sua situação é: RECUPERAÇÃO!";
                        } else{
                            echo "Sua situação é: REPROVADO!";
                        }
                    ?>
                </p>

            </div>
        </div>
    </div>
</body>
</html>