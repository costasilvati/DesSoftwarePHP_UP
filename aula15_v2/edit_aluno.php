<?php
$metodo = $_SERVER['REQUEST_METHOD'];
// Abre Conexão
$conn = new mysqli("localhost", "root", "", "faculdade", "3307");

if ($conn->connect_errno) {
  echo "Houve um problema na conexão com o banco de dados";
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <title>Edição de Aluno</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src=" https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">

    <h2>Editar de Aluno - Código <?php echo "$metodo"; ?></h2>
<?php
$update_query = "UPDATE Aluno 
SET nome = '$_POST[nome]', 
endereco = '$_POST[endereco]'
WHERE codigo = $_POST[codigo]";

if (!empty($_POST)) {    
    if(mysqli_query($conn, $update_query)){
        echo '<div class="alert alert-success" role="alert">
        Aluno '.$_POST['codigo'].' atualizado com sucesso!
      </div>';
    }else{
        echo '<div class="alert alert-danger" role="alert">
            Erro ao atualizar o aluno '.$_POST['codigo'].'!
          </div>';

    }
}
?>
    <form method="post" action="edit_aluno.php" enctype="multipart/form-data">
   <!-- Imprimindo inputs -->
   <?php
   if ($metodo == 'GET') {
    // GET
    $codigo = $_GET['codigo'];
        $query = "SELECT * FROM Aluno WHERE codigo = $codigo";
        $aluno = mysqli_fetch_assoc(mysqli_query($conn, $query));
        if (!empty($aluno)) {
            //$codigo = $aluno['codigo'];
            $nome = $aluno['nome'];
            $endereco = $aluno['endereco'];
        }else{
            echo '<div class="alert alert-danger" role="alert">
            Aluno '.$codigo.' não encontrado!
          </div>';
        }
    }
   ?>
   <div class="form-group">
    <label for="codigo">Código:</label>
    <input
      type="number"
      class="form-control"
      id="codigo"
      name="codigo"
      value="<?php echo "$codigo"?>"
      readonly/>
  </div>
    <div class="form-group">
    <label for="nome">Nome:</label>
    <input
      type="nome"
      class="form-control"
      id="nome"
      placeholder="Nome Completo"
      name="nome"
      value="<?php echo "$nome"?>"/>
  </div>
  <div class="form-group">
    <label for="endereco">Endereço:</label>
    <input
      type="text"
      class="form-control"
      id="endereco"
      placeholder="Logradouro"
      name="endereco"
      value="<?php echo "$endereco"?>"/>
  </div>
  <button type="submit" class="btn btn-success">Salvar</button>
  <button type="reset" class="btn btn-default">Limpar</button>
    </form>
    </div>
    </body>
  </html>