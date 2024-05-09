<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col p-3">
                <h1>Insert dados</h1>
            </div>
        </div>
        <div class="row">
            <?php
                require 'conectaBanco.php';
                $usuario = $_POST['usuario'];
                $senha = $_POST['senha'];
                if(empty($usuario) or empty($senha)){
                    echo "<p>Campos devem ser preenchidos </p>";
                }else{
                    // Monta comando SQL
                    $sql = "INSERT INTO login(usuario, senha) VALUES ('$usuario','$senha')";
                    $banco->query($sql); // Executa comando SQL
                    if($banco->affected_rows >= 1){
                        echo "<p>Usuário $usuario cadastrado com sucesso!</p>";
                    }else{
                        echo "Erro ao inserir usuário $usuario no banco de dados!";
                    }
                }

                $banco->close();
            ?>
        </div>
    </div>
</body>
</html>