<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 m-2">
                <form action="resposta.php" method="post">
                    <div class="mb-3">
                        <label for="user" class="form-label">Usuário</label>
                        <input type="text" name="user" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="text" name="senha" class="form-control">
                    </div>
                    <input type="submit" value="Salvar" class="btn btn-success">
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>

    </div>
</body>
</html>