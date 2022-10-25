<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <div>
        <h1>Cadastro de Aluno</h1>
    </div>
    <div>
        <form action="listaluno.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" required>
            <br>
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" required>
            <br>
            <input type="submit" value="Salvar">
        </form>
    </div>
    <div>
        <a href="index.php">Voltar para Home</a>
    </div>
    
</body>
</html>