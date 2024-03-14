<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Aula 3</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 bg-warning">
                <h1>Granja Feliz</h1>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#variaveis">Variáveis PHP</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#constante">Constantes em PHP</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#getpost">GET e POST em PHP</a>
                    </li>
                    <li class="list-group-item">
                        <a href="atvif.php">Exemplo IF</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <section id="variaveis">
                    <h3>Variáveis globais</h3>
                    <p> $_SERVER['SERVER_NAME']: 
                        <?php echo $_SERVER['SERVER_NAME']; ?>
                    </p>
                </section>
                <section id="constante">
                    <h3>Constantes PHP</h3>
                    <p>Exemplo de definição de constante usando define(id,valor)</p>
                    <p>
                    <?php 
                        define('CONSTANTE','Essa é uma constante!');
                        echo CONSTANTE;
                        // modo 2
                        const CONST2 = 10;
                        echo " - constante definida com const NOME = valor: ".CONST2;
                    ?>
                    </p>
                </section>
                <section id="getpost" class="p-3">
                    <h3>Formulário com método GET</h3>
                    <form action="welcome.php" method="get">
                        <div class="mb-3">
                            <label for="raca" class="form-label">Raça da galinha</label>
                            <input type="text" name="raca" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="qtd" class="form-label">
                                Quantidade de ovos</label>
                            <input type="number" name="qtd" class="form-control">
                        </div>
                        <input type="submit" value="Enviar GET" class="btn btn-warning">
                    </form>
                    <h3>Formulário com método POST</h3>
                    <form action="welcome2.php" method="post">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <input type="submit" value="Enviar POST" class="btn btn-danger text-white">
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>
</html>