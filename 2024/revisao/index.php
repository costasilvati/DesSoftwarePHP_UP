<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Formulário de Comentários</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
            <h1>Deixe um Comentário</h1>
            </div>
        </div>
        <div class="row">
            <div class="col center">
                <form action="comentario.php" method="post">
                    <div class="mb-3">
                        <label class="form-label" for="nome">Nome:</label>
                        <input class="form-control" type="text" name="nome" id="nome" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email:</label>
                        <input class="form-control" type="email" name="email" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="website">Website:</label>
                        <input class="form-control" type="url" name="website" id="website">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="website">Comentário</label>
                        <textarea name="comentario" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit">Enviar Comentário</button>
                </form>
            </div>
        </div>
  </div>
</body>
</html>