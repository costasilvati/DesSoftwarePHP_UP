<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>include + require</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <p>Aqui usamos include 'file.php';</p>
                <?php
                include 'file2.php';
                echo "<p>O nome definido em file.php é $nome </p>";
                ?>
            </div>
            <div class="col">
                <p>Aqui uso a function definida em file.php</p>
                <?php
                echo "O valor de IMC para peso 56 e altura 1.6 é: ". calculaImc(56.0,1.6);
                ?>
            </div>
        </div>
    </div>
</body>
</html>