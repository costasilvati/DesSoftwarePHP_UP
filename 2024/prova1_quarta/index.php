<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <title>Prova 1</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="arquivo.php" method="post">
                    <div class="mt-3 mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="e-mail" class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" name="senha" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nascimento" class="form-label">Nascimento</label>
                        <input type="date" name="nascimento" class="form-control">
                    </div>
                    <input type="submit" value="Salvar" class="btn btn-primary">
                </form>
            </div>
        </div>

    </div>
</body>
</html>