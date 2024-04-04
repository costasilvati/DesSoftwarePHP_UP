<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastro de despesas</title>
</head>
<body>
    <div class="container-fluid">
        <?php
        include 'navbar.php';
        ?>
        <div class="row">
            <h3>
                <?php
                    foreach($_POST as $chave => $valor){
                        echo "<p> $chave: $valor</p>";
                    }
                ?>
            </h3>
        </div>
    </div>
</body>
</html>