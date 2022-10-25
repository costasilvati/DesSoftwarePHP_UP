<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
</head>
<body>
    <?php
    include 'conectabanco.php';
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    if($nome != "" and $endereco != ""){
        // Escreve o comando
        $sql = "INSERT INTO aluno (nome, endereco) VALUES ('$nome', '$endereco')";
        // Executa o comando
        $banco->query($sql);
        if($banco->affected_rows > 0){
            echo "Aluno $nome cadastrado com sucesso!";
        }else{
            echo "Erro ao cadastrar Aluno $nome";
        }
    }
?>
<h1>Listagem de Alunos</h1>
<?php
$select = "SELECT * FROM aluno";
$resultado = mysqli_query($banco, $select);
?>
<table>
    <thead>
        <th>Id</th> <th>Nome</th> <th>Endereço</th> <th>Ação</th>
    </thead>
    <tbody>
        <?php 
        if($resultado){
            while($linha = mysqli_fetch_assoc($resultado)){
                $id_result = $linha['id'];
                $nome_result = $linha['nome'];
                $endereco_result = $linha['endereco'];
                echo "<tr>
                <td>$id_result</td> <td>$nome_result</td> 
                <td>$endereco_result</td> <td>??</td>
            </tr>";
            }
        }
        ?>
        
    </tbody>
</table>
    <?php
    $banco->close();
    ?>
</body>
</html>

