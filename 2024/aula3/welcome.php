<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Welcome - Aula 3</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <p>
                    <?php
                     echo "A raça ".$_GET["raca"]." bota em mádia ".
                     $_GET["qtd"]." ovos por dia";
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>