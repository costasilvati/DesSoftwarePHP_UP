<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios Aula 6</title>
</head>
<body>
    <div>
        <h2>Exercício 1</h2>
        <p>Escreva um programa PHP para calcular a 
            soma dos dois valores inteiros fornecidos. 
            Se os dois valores forem iguais, 
            retornará o triplo de sua soma;</p>
            <form action="resultados.php" method="post">
                Valor 1: 
                <input type="number" name="valor1" default=0>
                <br>
                Valor 2:
                <input type="number" name="valor2" default=0>
                <br>
                <input type="submit">

            </form>
    </div>

    <div>
        <h2>Exercício 2</h2>
        <form action="resultados.php" method="get">
            Nome:
            <input type="text" name="nome">
            <br>
            <input type="submit">
        </form>
    </div>
    
</body>
</html>