<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Lançamentos</title>
</head>
<body>
    <div class="container-fluid">
        <?php
            include 'navbar.php';
        ?>
        <div class="row">
            <div class="col-md-2">

            </div>
            <?php
                $debCred = $_GET['debitoCredito'];
                $nomePagina = "";
                if($debCred == "C"){
                    $nomePagina = "Cadastro de Renda";
                }else{
                    $nomePagina = "Cadastro de Despesa";
                }
                include 'formDespesa.php';
            ?>
        </div>
    </div>
</body>
</html>