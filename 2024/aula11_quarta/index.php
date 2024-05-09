<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col p-3">
                <h1>Conecta banco de dados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form action="registra_dados.php" method="post">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Nome de Usuário</label>
                        <input type="text" name="usuario" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="text" name="senha" class="form-control">
                    </div>
                    <input type="submit" value="Salvar no banco de dados" class="btn btn-primary">
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>