<div class="row">
    <div class="col-md-3"></div><!-- Div vazia -->
    <div class="col-md-6 m-3 p-3"><!-- Div FORM -->
        <h1>Cadastro de Animais</h1>
        <form action="cadastraAnimal.php" method="post">
            <div class="mb-3">
                <label for="familia" class="form-label">Tipo</label>
                <select class="form-select" name="familia">
                    <option value="1">Felino</option>
                    <option value="2">Caníno</option>
                    <option value="3">Ave</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="nome">Nome do animal</label>
                <input class="form-control" type="text" name="nome">
            </div>
            <div class="mb-3">
                <label class="form-label" for="tutor">Tutor</label>
                <select class="form-select" name="tutor">
                    <option value="1">João</option>
                    <option value="2">Maria</option>
                    <option value="3">José</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="porte">Porte</label>
                <select class="form-select" name="porte">
                    <option value="1">Pequeno</option>
                    <option value="2">Médio</option>
                    <option value="3">Grande</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="peso">Peso</label>
                <input class="form-control" type="text" name="peso">
            </div>
            <div class="mb-3">
                <div>
                    <label for="">Genero</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="genero" value="F">
                    <label class="form-check-label" for="genero">Fêmea</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="genero" value="M">
                    <label class="form-check-label" for="genero">Macho</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="dn">Data de nascimento</label>
                <input type="date" name="dn" class="form-control">
            </div>
            <input class="btn btn-outline-danger" type="button" value="Cancelar">
            <input class="btn btn-outline-success" type="submit" value="Salvar">
        </form>
    </div>
    <div class="col-md-3"></div><!-- Div vazia -->
</div>