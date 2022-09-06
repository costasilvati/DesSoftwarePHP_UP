<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5 - PHP</title>
</head>
<body>
    <h1>Aula 5</h1>
    <p><a href="formulario.html">Formulários PHP</a></p>
    <p><a href="calculo.php">Formulário com IF</a></p>

    <div>
        <h2>Variáveis Globais</h2>
        <p>
            <?php echo $_SERVER["REQUEST_TIME"]; ?>
        </p>
    </div>
    <div>
        <h2>Constantes</h2>
        <p>
            <?php
            define("CONSTANTE", "Olá! sou constante --- ");
            echo CONSTANTE; 
            // Modo 2
            const OUTRA = 10;
            echo OUTRA
             ?>
        </p>
    </div>
    
</body>
</html>