<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Comentários</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1>Comentários registrados</h1>
            </div>
            <div class="row border">
                <div class="col center border">


                
        <?php
            $emails = array();
            array_push($emails, "juliana@email.com");
            array_push($emails, "maria@email.com");

            $email = $_POST['email'];
            echo "<p class='alert'>";
            foreach($_POST as $chave => $valor){
                echo " $chave: $valor";  
            }
            echo "</p>";
            if(strlen($email) < 10){
                echo "E-mail deve ter 10 caracteres ou mais";
            }elseif(in_array($email, $emails)) {
                echo "<p class='alert alert-warning'>Email já cadastrado!</p>";
            } else {
                array_push($emails, $email);
                echo "<p class='alert alert-success'>Comentário enviado com sucesso!</p>";
            }
        ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
