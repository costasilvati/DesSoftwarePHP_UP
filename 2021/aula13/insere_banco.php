<?php
// Abre Conexão
$conn = new mysqli("localhost", "root", "", "faculdade", "3307");
$inseridos = 0;

if($conn->connect_errno){
    echo "Houve um problema na conexão com o banco de dados";
}
// Inserir registros
/* 
mysqli_query($conn, 
"INSERT INTO Aluno (nome, endereco) VALUES ('Novo Usuário','Rua Nova Rua, 76')");
echo $inseridos++."<br>";
mysqli_query($conn, 
"INSERT INTO Aluno (nome, endereco) VALUES ('Outro User','Av. Nova Avenida, 19')");
echo $inseridos++."<br>";
*/

//Consulta banco
$query = "SELECT * FROM Aluno";

$result = mysqli_query($conn, $query);
if($result){
    // Percorre o resultado
    while($row = mysqli_fetch_assoc($result)){
        echo $row['codigo'].' - '.$row['nome'].' - '.$row['endereco'].'<br>';
    }
}
// Fecha a conexão
$conn->close();
?>