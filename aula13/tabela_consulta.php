<?php
echo '<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Lista de Aluno</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Cadastro de Aluno</h2>';
echo '<table class="table">
        <thead>
            <th>Código</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Ação</th>
        </thead>
        <tbody>';
    // Abre Conexão
    $conn = new mysqli("localhost", "root", "", "faculdade", "3307");

    if($conn->connect_errno){
        echo "Houve um problema na conexão com o banco de dados";
    }
    $query = "SELECT * FROM Aluno";
    $result = mysqli_query($conn, $query);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $codigo = $row['codigo'];
            $nome = $row['nome'];
            $endereco = $row['endereco'];
            //Exibe a linha
            echo "<tr>
                    <td>{$codigo}</td>
                    <td>{$nome}</td>
                    <td>{$endereco}</td>
                    <td>Editar</td>
                  </tr>";
        } 
    }
    //Fecha conexão
    $conn->close();
    echo '</tbody>
    </table>
    </div>
    </body>
    </html>';
?>