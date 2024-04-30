<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Zoo UP</title>
</head>
<body>
    <div class="container-fluid">
        <?php
        include 'menu.php';
        ?>
        <form action="addBanco.php" method="post">
            <div class="mb-3">
                <label class="form-label" for="usuario">Usuário</label>
                <input class="form-control" type="text" name="usuario" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="senha">Senha</label>
                <input class="form-control" type="password" name="senha" required>
            </div>
            <input type="submit" value="Adicionar no banco de dados">
    </div>
    </div>
</body>
</html>