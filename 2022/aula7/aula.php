<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 7</title>
</head>
<body>
    <div>
        <h1>Formulário PHP</h1>
        <form action="cadastro.php" method="post">
            <p>    
                Nome completo: 
                <input type="text" name="nome">
            </p>
            <p>
                Data de nascimento:
                <input type="date" name="nascimento">
            </p>
            <p>
                Telefone (celular):
                <input type="tel" name="fone">
            </p>
            <p>
                E-mail:
                <input type="email" name="email">
            </p>
            <p>
                Senha:
                <input type="password" name="senha">
            </p>
            <p>
                Aceita os 
                <a href="https://www.gov.br/cidadania/pt-br/acesso-a-informacao/lgpd"> 
                    termos de uso</a>? 
                    <br>
                    Sim <input type="radio" name="lgpd">
                    Não <input type="radio" name="lgpd">
            </p>
            <p>
                Gênero
                <select name="genero">
                    <option value="F">Feminino</option>
                    <option value="M">Masculino</option>
                    <option value="NB">Não Binário</option>
                </select>
            </p>
            <p>
                Tamanho do calçado
                <input type="number" min="33" max="46">
            </p>
            <p>
                Deseja receber notificações <br>
                Via e-mail 
                <input type="checkbox" name="notemail"> <br>
                Via SMS
                <input type="checkbox" name="notsms"><br>
                Via WhatsApp
                <input type="checkbox" name="notwhats">
            </p>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>