<?php

// Abre Conexão
$conn = new mysqli("localhost", "root", "", "faculdade", "3307");

if($conn->connect_errno){
    echo "Houve um problema na conexão com o banco de dados";
}

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
  if (!empty($_POST)){
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $sql = "INSERT INTO Aluno (nome, endereco) VALUES ('$nome','$endereco')";
    $result = mysqli_query($conn, $sql);
    if ($result <= 0){
      echo "Erro ao inserir dados <br>";
    }else{
      echo "<p> Aluno $nome inserido com sucesso! </p>";
    }
  }
echo '<table class="table">
        <thead>
            <th>Código</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Ação</th>
        </thead>
        <tbody>';
    
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
                    <td>
                    <a href='edit_aluno.php?codigo=$codigo'> Editar </a> 
                    </td>
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