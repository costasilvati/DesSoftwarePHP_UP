<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Carteiras</title>
</head>
<body>
    <div class="container-fluid">
        <?php
            include 'navbar.php';
        ?>
        <div class="row">
            <div class="col text-center p-3 m-3">
                <h1>Listagem de Carteiras</h1>
                <?php
                require 'conectaBanco.php';
                $select = "SELECT * FROM carteira";
                $resultado = mysqli_query($banco, $select);
                ?>
                <table class="table table-hover">
                    <thead>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Limite R$</th>
                        <th scope="col">Ações</th>
                    </thead>
                    <tbody>
                        <?php
                            if($resultado){
                                while($linha = mysqli_fetch_assoc($resultado)){
                                    $id = $linha['id'];
                                    $nome = $linha['nome'];
                                    $desc = $linha['descricao'];
                                    $limite = $linha['limite'];
                                    echo "<tr>
                                    <td> $id </td>
                                    <td> $nome </td>
                                    <td> $desc </td>
                                    <td> $limite</td>
                                    <td> ?? </td>
                                    </tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>