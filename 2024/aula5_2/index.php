<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Aula 5</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <h1>Atividade Prática</h1>
                <!-- Menu -->
                <ul class="list-group">
                    <li class="list-group-item"><a href="#atv1">Atividade 1</a></li>
                    <li class="list-group-item"><a href="#atv2">Atividade 2</a></li>
                    <li class="list-group-item"><a href="#atv3">Atividade 3</a></li>
                    <li class="list-group-item"><a href="#atv4">Atividade 4</a></li>
                    <li class="list-group-item"><a href="#atv5">Atividade 5</a></li>
                </ul>
            </div>
            <div class="col-md-8 p-3">
                <section id="atv1" class="border m-2 p-4">
                    <h3>Atividade 1 - Soma</h3>
                    <p>Escreva um programa PHP para calcular a soma dos dois valores inteiros fornecidos. 
                        Se os dois valores forem iguais, retornará o triplo de sua soma;</p>
                    <form action="aula5.php" method="post">
                        <div class="mb-3">
                            <label for="valor1" class="form-label">Valor 1</label>
                            <input type="number" name="valor1" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="valor2" class="form-label">Valor 2</label>
                            <input type="number" name="valor2" class="form-control">
                        </div>
                        <input type="submit" value="Fazer Soma" class="btn btn-primary">
                    </form>
                </section>
                <section id="atv2" class="border m-2 p-4">
                    <h3>Atividade 2 - Manipulação de String</h3>
                    <p>Escreva um programa PHP para criar uma nova string onde ’ba’
                    é adicionado à frente de uma determinada string. Se a string já
                    começar com ’ba’, retorne a string inalterada;</p>
                    <p>Exemplo: Input: Juliana -> Output: baJuliana</p>
                    <p>Exemplo [2]: Input: Banco -> Output: Banco</p>
                    <form action="aula5.php" method="post">
                        <div class="mb-3">
                            <label for="texto" class="form-label">Texto</label>
                            <input type="text" name="texto" class="form-control">
                        </div>
                        <input type="submit" value="Verificar texto" class="btn btn-warning">
                    </form>
                </section>
                <section id="atv3" class="border m-2 p-4">
                    <h3>Atividade 3 - Intervalo numérico</h3>
                    <p>Crie um script que receba dois valores, para definir um intervalo numérico. 
                    Exiba os valores dentro do intevalo em uma linha, separados por hífen.
                    </p>
                    <p>Exemplo: 1-2-3-4-5-6-7-8-9-10 </p>
                    <p>Não haverá hífen (-) na posição inicial e final</p>
                    <form action="aula5.php" method="post">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="inicio" class="form-label">Início do intervalo</label>
                                <input type="number" name="inicio" class="form-control">
                            </div>
                            <div class="col mb-3">
                                <label for="fim" class="form-label">Fim do intervalo</label>
                                <input type="number" name="fim" class="form-control">
                            </div>
                        </div>
                        <input type="submit" value="Exibir intervalo numérico" class="btn btn-secondary">
                    </form>
                </section>
                <section id="atv4" class="border m-2 p-4">
                    <h3>Atividade 4 - Impressão de padrão</h3>
                    <p>Receba a quantidade de linhas que o usuário deseja visualizar.</p>
                    <p>Construa o padrão a seguir, usando o loop for aninhado, com a quantidade de 
                        linhas definidas pelo usuário.</p>
                    <p>*</p>
                    <p>* *</p>
                    <p>* * *</p>
                    <p>* * * *</p>
                    <p>* * * * *</p>
                    <form action="aula5.php" method="post">
                        <div class="mb-3">
                            <label for="linhas" class="form-label">Quantidade de linhas</label>
                            <input type="number" name="linhas" class="form-control">
                        </div>
                        <input type="submit" value="Imprimir padrão" class="btn btn-success">
                    </form>

                </section>
            </div>
        </div>
    </div>
</body>

</html>