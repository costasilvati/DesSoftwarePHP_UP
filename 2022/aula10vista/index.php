<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="base.css">
    <title>Avaliação</title>
</head>
<body>
    <div>
       <p> Sistema de gestão acadêmica </p>
    </div>
    <div>
        <form action="resultado.php" method="post">
            <p>MANUTENÇÃO DE USUÁRIOS DO SISTEMA INTERNO</p>
            <label for="login">Login</label><input type="text" name="login"> 
            <br>
            <label for="senha">Senha</label><input type="text" name="senha">
            <br>
            <label for="status">Status</label> 
            <select name="status">
                <option value="I">Inativo</option>
                <option value="A">Ativo</option>
                <option value="B">Bloqueado</option>
            </select>
            <br>
            Tipo
            <input type="radio" name="tipo" value="tec">
            <label for="tipo">Técnico</label>
            <input type="radio" name="tipo" value="pro">
            <label for="tipo">Professor</label>
            <input type="radio" name="tipo" value="alu">
            <label for="tipo">Aluno</label>
            <br>
            <label for="criacao"> Data Criação </label><input type="date" name=criacao>
            <br>
            <br>
            Perfil
            <input type="radio" name="perfil" id="con">
            <label for="tipo">Convidade</label>
            <input type="radio" name="tipo" id="adm">
            <label for="tipo">Administrador</label>
            <br>
            <label for="obs">Observações</label>
            <textarea name="obs" id="observ" cols="30" rows="10">

            </textarea>
            <br>
            Módulos
            <input type="checkbox" name="compras" id="comp"><label for="compras">Compras</label>
            <input type="checkbox" name="biblio" id="bib"><label for="biblio">Biblioteca</label>
            <input type="checkbox" name="acad" id="aca"><label for="acad">Acadêmico</label>
            <br>
            <input type="checkbox" name="doc" id="docs"><label for="doc">Documentação</label>
            <input type="checkbox" name="rh" id="rhu"><label for="rh">Recursos Humanos</label>
            <br>
            <input type="button" value="Camcelar">
            <input type="submit" value="Excluir">
        </form>
    </div>

    
</body>
</html>