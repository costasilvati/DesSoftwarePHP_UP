<div class="col-md-10 p-5">
                <!-- Formulário -->
                <h3 class="text-center"><?php echo $nomePagina; ?></h3>
                <div class="bg-light p-5">
                    <form action="cadastraDespesa.php" method="post">
                        <div class="mb-3">
                            <label class="form-label" for="descricao">Descrição</label>
                            <input class="form-control" name="descricao" type="text">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="valor">Valor R$</label>
                            <input class="form-control" name="valor" type="text">
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="categoria">Categoria</label>
                                <select class="form-select" name="categoria">
                                    <option value="1" selected>Fixo</option>
                                    <option value="2">Variável</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="tipo">Tipo</label>
                                <select class="form-select" name="tipo">
                                    <option value="1" selected>Alimentação</option>
                                    <option value="2">Locomoção</option>
                                    <option value="3">Saúde</option>
                                    <option value="4">Lazer</option>
                                    <option value="5">Educação</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="data">Data</label>
                            <input class="form-control" name="data" type="date">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="carteira">Carteira</label>
                            <select class="form-select" name="carteira">
                                <option value="1" selected>Débito Visa</option>
                                <option value="2">Crédito NuBank</option>
                                <option value="3">Dinheiro</option>
                                <option value="4">Poupança</option>
                            </select>
                        </div>
                        <div class="mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-outline-danger">
                                Cancelar
                            </button>
                            <button class="btn btn-outline-success" type="submit">
                                Salvar
                            </button>
                        </div>
                    </form>
                </div>
            </div>