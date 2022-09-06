<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo</title>
</head>
<body>
    <div>
        <h1>Bem vindo!</h1>
    </div>
    <div>
        <p>
            Olá <?php echo $_GET["nome"]; ?>!!!
            Seja bem vindo... 
            Seu e-mail cadastrado é
            <?php echo $_GET["email"]; ?>.
        </p>
    </div>
</body>
</html>