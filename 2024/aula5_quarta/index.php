<!DOCTYPE html>
<html lang="pt-BR">
    <!-- Gestão de finanças pessoais 
 - Despesas Valores a pagar (período);
 - Tipo de despesa (cadastrar tipos de depesas);
 - parcelas;

 descrição/ carteira /valor/ tipo/ data/ data vencimento
-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Controle de finanças</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 bg-dark">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                    <a class="navbar-brand p-2 ms-3" href="#">
                    <img src="https://noticias.cruzeirodosuleducacional.edu.br/wp-content/uploads/2019/12/positivo_univer_bi_pos_cmyk-1024x315.png" alt="Logo" width="120" height="24" class="d-inline-block align-text-top"> 
                    Up Cash
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#" aria-controls="navbarSupportedContent" 
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Despesas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Carteiras</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tipo de despesas</a>
                            </li>
                        </ul>
                    </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Barra lateral-->
        <div class="row">
            <div class="col-md-2">
                <!-- Opções -->
            </div>
            <div class="col-md-10 p-5">
                <!-- Formulário -->
                <h3 class="text-center">Cadastro de despesas</h3>
                <div class="bg-light p-5">
                    <form action="cadastraDespesa.php" method="post">
                        <div class="mb-3">
                            <label class="form-label" for="descricao">Descrição</label>
                            <input class="form-control" name="descricao" type="text">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="valor">Valor R$</label>
                            <input class="form-control" name="valor" type="text">
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="categoria">Categoria</label>
                                <select class="form-select" name="categoria">
                                    <option value="1" selected>Fixo</option>
                                    <option value="2">Variável</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="tipo">Tipo</label>
                                <select class="form-select" name="tipo">
                                    <option value="1" selected>Alimentação</option>
                                    <option value="2">Locomoção</option>
                                    <option value="3">Saúde</option>
                                    <option value="4">Lazer</option>
                                    <option value="5">Educação</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="data">Data</label>
                            <input class="form-control" name="data" type="date">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="carteira">Carteira</label>
                            <select class="form-select" name="carteira">
                                <option value="1" selected>Débito Visa</option>
                                <option value="2">Crédito NuBank</option>
                                <option value="3">Dinheiro</option>
                                <option value="4">Poupança</option>
                            </select>
                        </div>
                        <div class="mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-outline-danger">
                                Cancelar
                            </button>
                            <button class="btn btn-outline-success" type="submit">
                                Salvar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>