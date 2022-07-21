<?php
// Abre Conexão
$conn = new mysqli("localhost", "root", "", "faculdade", "3307");

if($conn->connect_errno){
    echo "Houve um problema na conexão com o banco de dados";
}
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];

$sql = "INSERT INTO aluno (nome, endereco) VALUES ('$nome', '$endereco')";
echo "$sql <br>";

//Fecha conexão
$conn->close();
?>