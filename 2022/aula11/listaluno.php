<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Alunos</title>
</head>
<body>
    <?php
    include 'conectabanco.php';
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    if($nome != "" and $endereco != ""){
        // Monta string INSERT
        $sql = "INSERT INTO Aluno (nome, endereco)
            VALUES ('$nome','$endereco')";
        // Executa insert
        $banco->query($sql);
        // Verifica quantas linhas foram afetadas
        if($banco->affected_rows >= 1){
            echo "Aluno $nome cadastrado com sucesso!";
        }else{
            echo "Erro ao inserir Aluno $nome";
        }
    }

    $banco->close();
    ?>
    
</body>
</html>

