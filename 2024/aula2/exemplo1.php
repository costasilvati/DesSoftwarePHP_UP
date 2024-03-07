<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>My first PHP</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 bg-light text-center">
                <h1>
                    <?php echo "Hello World PHP!!"; ?>
                </h1>
            </div>
        </div>
        <div class="row">
        <?php
            // Variáveis
            $idade = 36;                   // variável int
            $nome = "Juliana Costa Silva"; // variável string

            echo '<div class="col-md-6"> <p>'; // abre div col e p
            echo ("Olá ".$nome." sua idade é ".$idade);
            echo ("Olá $nome sua idade é $idade");
            echo '</p> </div>'; // fecha div col e p
            // Comentário de uma linha
            /* Comentário 
            de várias 
            linhas
            */
        ?>
        <div class="col-md-6 bg-dark text-white">
            <?php
                $soma = 2 + 2;
                echo "<h5> A soma de 2+2 é igual a $soma </h5> ";
            ?>
            <h5>
                <?php 
                    $sub = 3 -1;
                    echo "A subtração 3 - 1 é igual a $sub";
                ?>
            </h5>
            <h5>
                <?php
                    $mult = 2*4;
                    echo "A multiplicação 2 * 4 é igual a $mult";
                ?>
            </h5>
            <h5>
                <?php
                    $expo = 3 **2;
                    echo "A exponenciação 3**2 é igual a $expo ";
                ?>
            </h5>
            <h5>
                <?php
                    $resto = 3%2;
                    echo "O resto da divisão 3%2 é igual a $resto";
                ?>
            </h5>
        </div>
        </div>

    </div>
</body>
</html>