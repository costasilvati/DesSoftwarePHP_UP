<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentario</title>
</head>
<body>
    <h1>Comentários recebidos</h1>
    <div>
    <?php
        foreach($_GET as $xuxu => $abobrinha){
                echo "$xuxu: $abobrinha <br>";
        }
    ?>
    </div>
    <div>
        <p>Bem vindo(a) 
            <?php
            $nome = $_GET["nome"]; 
            echo "$nome";
            ?>
        </p>
    </div>
    <div>
        <?php
        $email = $_GET["email"];
        if(str_ends_with($email,"gmail.com")){
            echo "Você é cliente Google";
        }elseif(str_ends_with($email,"outlook.com")){
            echo "Você é cliente Microsoft";
        }
        ?>
    </div>
</body>
</html>