<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Aula 2</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>
                    <?php echo "Olá mundo!"; ?>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <p>
                    <a href="atv1.php">Atividade 1</a>
                </p>
            </div>
            <div class="col-md-8">
                <p>O operador de soma do PHP é +</p>
                <p>
                    <?php
                    $soma = 2 + 2;
                    echo "A soma 2 + 2 = $soma"; 
                    ?>
                </p>
                <p>O operador de resto da divisão PHP é %</p>
                <p>
                    <?php
                        $resto = 15%6;
                        echo "O resto de 3%2 é $resto";
                    ?>
                </p>
                <p>O operador de potenciação PHP é **</p>
                <p>
                    <?php
                        $potencia = 3**2;
                        echo "A exponenciação de 3 ** 2 é $potencia";
                    ?>
                </p>
                <h3>Utilidades</h3>
                <p>Como verificar o tipo da variável.</p>
                <p>Utilizamos a função gettype, exemplo a variável 
                    soma é do tipo: 
                    <?php
                        echo gettype($potencia);
                    ?>
                </p>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>
<?php
    echo "Hello world!! <br>";
    $idade = 33;
    $nome = "Juliana";
    echo 'Olá " '.$nome.' sua idade é '.$idade.'<br>';
    echo "Olá $nome sua idade é $idade";
?>