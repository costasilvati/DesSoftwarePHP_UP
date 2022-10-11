<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação 1</title>
</head>
<body>
    <h1>Gerenciamento de usuários PHP</h1>
    <div>
        <p>Dados enviados via POST</p>
        <?php
        foreach($_POST as $chave => $valor ){
            if($chave != "senha"){
                echo "$chave: $valor <br>";
            }else{
                echo " ";
            }
        }
        ?>
    </div>
    <div>
        <h3>Funções</h3>
        <ol>
        <?php
        $senha=$_POST["senha"];
        $status=$_POST["status"];
        $tipo=$_POST["tipo"];

        if($status == "A" and $senha == "funcionario123"){
            if(str_starts_with($tipo,"tec")){
                echo "<li>Registros acadêmicos</li> <li>Certificados</li> <li>Reserva de espaços</li> <li>Administração de Biblioteca</li>";
            }elseif($tipo=="pro"){
                echo "<li>Registros de aula</li> <li>Registro de frequência</li> <li>Notas</li> <li>Administração de Conteúdo</li> <li>Gerência de disciplinas</li";
            }elseif($tipo == "alu"){
                echo "<li>Faltas</li> <li>Boletim</li> <li>Entrega de atividades</li> <li>Lista de disciplinas</li>";
            }
        }else{
            echo "<li>Nenhuma função habilitada! </li>";
        }
        ?>
        
        </ol>
    </div>
    
</body>
</html>