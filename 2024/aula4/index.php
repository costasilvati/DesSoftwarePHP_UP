<!-- https://github.com/costasilvati/DesSoftwarePHP_UP/blob/main/2024/aula3/atvif.php -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Atividade IF - Aula 3</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cáculo de média</h1>
         <form action="media.php" method="post">
                    <div class="mb-3">
                        <label for="nota1" class="form-label">Nota 1</label>
                        <input type="number" name="nota1" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nota2" class="form-label">Nota 2</label>
                        <input type="number" name="nota2" class="form-control">
                    </div>
                    <input type="submit" value="Calcular média" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>

</html>