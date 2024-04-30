
<div class="row">
    <div class="col-md-3"></div><!-- Div vazia -->
    <div class="col-md-6 m-3 p-3"><!-- Div FORM -->
        <h1>Cadastro de Clientes</h1>
        <form action="cadastraAnimal.php" method="post">
            <div class="mb-3">
                <label class="form-label" for="nome">Nome do Cliente</label>
                <input class="form-control" type="text" name="nome" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="cpf">CPF</label>
                <input class="form-control" type="text" name="cpf" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="dn">Data de nascimento</label>
                <input type="date" name="dn" class="form-control">
            </div>
            <div class="mb-3">
                <div>
                    <label for="">Genero</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="genero" value="F">
                    <label class="form-check-label" for="genero">Feminino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="genero" value="M">
                    <label class="form-check-label" for="genero">Masculino</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="genero" value="O">
                    <label class="form-check-label" for="genero">Outros</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">E-mail</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label" for="fone">Telefone</label>
                <input type="phone" name="fone" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label" for="cep" >CEP</label>
                <input name="cep" type="text" id="cep" value="" size="10" maxlength="9"
                onblur="pesquisacep(this.value);" class="form-control"/>
            </div>
            <div class="mb-3">
                <label class="form-label" for="rua">Rua</label>
                <input name="rua" type="text" id="rua" size="60" class="form-control"/>
            </div>
            <div class="mb-3">
                <label class="form-label" for="numero">Número</label>
                <input name="numero" type="number" id="numero" size="5" class="form-control"/>
            </div>
            <div class="mb-3">
                <label class="form-label" for="complemento">Complemento</label>
                <input name="complemento" type="text" id="complemento" size="5" class="form-control"/>
            </div>
            <div class="mb-3">
                <label class="form-label" for="bairro">Bairro</label>
                <input name="bairro" type="text" id="bairro" size="40" class="form-control"/>
            </div>
            <div class="mb-3">
                <label class="form-label" for="cidade">Cidade</label>
                <input name="cidade" type="text" id="cidade" size="40" class="form-control"/>
            </div>
            <div class="mb-3">
                <label class="form-label" for="uf">Estado</label>
                <input name="uf" type="text" id="uf" size="2" class="form-control"/>
            </div>
            <input class="btn btn-outline-danger" type="button" value="Cancelar">
            <input class="btn btn-outline-success" type="submit" value="Salvar">
        </form>
    </div>
    <div class="col-md-3"></div><!-- Div vazia -->
</div>

<script>
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            //document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            //document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {
                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                //document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>