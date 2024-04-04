<div class="col-md-10 p-5">
                <!-- Formulário -->
                <h3 class="text-center">Cadastro de Tipos de Despesa</h3>
                <div class="bg-light p-5">
                    <form action="cadastraCarteira.php" method="post">
                    <div class="mb-3">
                            <label class="form-label" for="nome">Nome</label>
                            <input class="form-control" name="nome" type="text">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="descricao">Descrição</label>
                            <textarea name="descricao" class="form-control">
                            </textarea>
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